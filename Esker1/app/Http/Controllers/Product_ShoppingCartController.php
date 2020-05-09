<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductsShoppingCart;
use App\ShoppingCart;

class Product_ShoppingCartController extends Controller
{

    /* en el constructor de la clase le indicamos que utilize el middleware del  carro de compras*/
    public function __construct()
    {
      $this->middleware("shopping_cart");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $shopping_cart = $request->shopping_cart; //ahora accedo al carro a travez del middleware mediante el objeto request

      $response = ProductsShoppingCart::create([ // creamos una asociacion entre el producto y el carrito mediante la table pivot
        'shopping_cart_id' => $shopping_cart->id,
        'product_id' => $request->product_id
      ]);
      return back();
    // if ($response) {
    //     return redirect('/carrito');
    //   } else {
    //     return back();
    //   }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id, $shopping_cart_id)
    {
      // dd($product_id, $shopping_cart_id);
      $id = ProductsShoppingCart::where("product_id", $product_id)->where("shopping_cart_id", $shopping_cart_id)->first()->id;
      ProductsShoppingCart::destroy($id);
      return redirect('/carrito');
    }
}
