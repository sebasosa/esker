<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShoppingCart;
use App\PayPal;

class ShoppingCartController extends Controller
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
    public function index(Request $request)
    {
      $shopping_cart = $request->shopping_cart; //ahora accedo al carro a travez del middleware mediante el objeto request
      $shopping_cart_id = $shopping_cart->id;
      $products = $shopping_cart->products()->get(); //devuelve un arreglo con los productos del carrito

      $total = $shopping_cart->total(); // saco el total del precio de los productos dentro del carrito

      return view('main.shopping_cart', ['products' => $products, 'total' => $total,'shopping_cart_id'=>$shopping_cart_id]);
      //return view('shopping_carts.index', ['products'=> $products, 'total' => $total]); // retorno la vista del carrito pasandole los productos y el total calculado mas arriba



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shopping_cart = ShoppingCart::where('custom_id',$id)->first(); //buscamos el carrito q coincide con el custom_id como no es la llave primaria lo buscamos con where

        $order = $shopping_cart->order();

        return view('shopping_carts.completed', ['shopping_carro' => $shopping_cart, 'order' => $order]); // retorno la vista de completed

    }

    public function checkOut(Request $request)
    {
      $shopping_cart = $request->shopping_cart; //ahora accedo al carro a travez del middleware mediante el objeto request

      $paypal = new PayPal($shopping_cart); //creo una instancia de la clase paypal pasandole el shopping_cart

      $payment = $paypal->generate(); //guardo el resultado en al variable payment

      return redirect($payment->getApprovalLink()); //nos da un link a paypal hacia donde el ususario puede dirigirse a aprobar el pago
    }


}
