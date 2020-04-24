<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{

    public function __construct()
    {
      $this->middleware('admin', ["except" => "show"]);
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
      $product = new Product;
      $product->title = $request->title;
      $product->pricing = $request->pricing;
      $product->short_description = $request->short_description;
      $product->long_description = $request->long_description;
      $product->category_id = $request->category_id;
      if ($product->save()) {
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
        return view('products.show', ['product' => $product]);
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
