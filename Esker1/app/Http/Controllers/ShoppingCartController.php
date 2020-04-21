<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ShoppingCart;
use App\PayPal;

class ShoppingCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $shopping_cart_id = session('shopping_cart_id'); //me fijo si en la sesion hay guardado un id de un carro

      $shopping_cart = ShoppingCart::encontrarOCrearPorSessionID($shopping_cart_id); // aca mandamos a llamar la funcion del modelo ShoppingCart que verifica si tenemos un  carro asignado a esa session


    /* PARA PROBAR LA CLASE PAYPAL COMENTAMOS ESTAS LINEAS POR AHORA
      $products = $shopping_cart->products()->get(); //devuelve un arreglo con los productos del carrito

      $total = $shopping_cart->total(); // saco el total del precio de los productos dentro del carrito

      return view('shopping_carts.index', ['products'=> $products, 'total' => $total]); // retorno la vista del carrito pasandole los productos y el total calculado mas arriba
*/
      $paypal = new PayPal($shopping_cart); //creo una instancia de la clase paypal pasandole el shopping_cart

      $payment = $paypal->generate(); //guardo el resultado en al variable payment

      return redirect($payment->getApprovalLink()); //nos da un link a paypal hacia donde el ususario puede dirigirse a aprobar el pago

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


}
