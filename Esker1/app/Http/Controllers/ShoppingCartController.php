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
        //
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
    public function destroy($id)
    {
        //
    }
}
