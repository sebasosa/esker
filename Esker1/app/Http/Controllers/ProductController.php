<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Image;
class ProductController extends Controller
{

    public function __construct()
    {
      $this->middleware('admin', ["except" =>[ "show", "catalogo", "catalogoCat"]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();  //traemos todos los productos de la base de datos

        return view('products.index',["products" => $products]); // llamamos a la vista y le pasamos los productos de la base de datos
    }

    public function catalogo()
    {
        $products = Product::all();  //traemos todos los productos de la base de datos
        $categories= Category::select('title','id')->get(); //traigo los nombres de las categorias

        return view('main.catalogo',["products" => $products, 'categories'=> $categories]); // llamamos a la vista y le pasamos los productos de la base de datos
    }
    public function catalogoCat($id)
    {
        $products = Category::productos($id);  //traemos todos los productos de la base de datos
        $categories= Category::select('title','id')->get(); //traigo los nombres de las categorias

        return view('main.catalogo',["products" => $products, 'categories'=> $categories]); // llamamos a la vista y le pasamos los productos de la base de datos
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $product = new Product;
      $categories= Category::pluck('title', 'id');
      return view('products.create', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //$hasFile = $request->hasFile('imagen1') && $request->imagen1->isValid();// pregunto si el post del formulario trae un archivo , y si ese archivo esta en la carp temporal
      $hasFile = $request->hasFile('imagen1') && $request->imagen1->isValid();

      $product = new Product;
      $product->title = $request->title;
      $product->pricing = $request->pricing;
      $product->short_description = $request->short_description;
      $product->long_description = $request->long_description;
      $product->category_id = $request->category_id;
      if ($product->save()) {

        if ($hasFile) {
          Image::imagen($request,1,$product);
          if($request->hasFile('imagen2') && $request->imagen2->isValid()){
            Image::imagen($request,2,$product);
            if ($request->hasFile('imagen3') && $request->imagen3->isValid()) {
              Image::imagen($request,3,$product);
            }
          }

        }

        return redirect('/products');
      } else {
        return view('products.create',['product' => $product]);

      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        if ($product) {
          $images= $product->imagenes();
          return view('main.detalle_producto', ['product' => $product, 'images' => $images]);
        } else {
          return redirect('/productos');
        }


        // Seleccionamos las imágenes por su 'id'




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::find($id);
      $categories= Category::pluck('title', 'id');
      return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $product->title = $request->title;
      $product->pricing = $request->pricing;
      $product->short_description = $request->short_description;
      $product->long_description = $request->long_description;
      $product->category_id = $request->category_id;
      if ($product->save()) {
        return redirect('/products');
      } else {
        return view('products.edit',['product' => $product]);
    }
  }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::destroy($id);
      return redirect('/products');
    }
}
