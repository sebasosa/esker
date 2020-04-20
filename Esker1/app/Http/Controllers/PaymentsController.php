<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PayPal;
use App\ShoppingCart;

class PaymentsController extends Controller
{
    public function store(Request $request)
    {
      $shopping_cart_id = session('shopping_cart_id'); //me fijo si en la sesion hay guardado un id de un carro

      $shopping_cart = ShoppingCart::encontrarOCrearPorSessionID($shopping_cart_id); // aca mandamos a llamar la funcion del modelo ShoppingCart que verifica si tenemos un  carro asignado a esa session

      $paypal = new PayPal($shopping_cart);

      dd($paypal->execute($request->paymentId, $request->PayerID)); //del get q nos da la pagina le pasamos el payment id y el payer id a la funcion execute
    }
}
