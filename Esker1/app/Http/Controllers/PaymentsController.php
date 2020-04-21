<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PayPal;
use App\ShoppingCart;
use App\Order;

class PaymentsController extends Controller
{
    public function store(Request $request)
    {
      $shopping_cart_id = session('shopping_cart_id'); //me fijo si en la sesion hay guardado un id de un carro

      $shopping_cart = ShoppingCart::encontrarOCrearPorSessionID($shopping_cart_id); // aca mandamos a llamar la funcion del modelo ShoppingCart que verifica si tenemos un  carro asignado a esa session

      $paypal = new PayPal($shopping_cart);

      $response = $paypal->execute($request->paymentId, $request->PayerID); //del get q nos da la pagina le pasamos el payment id y el payer id a la funcion execute

      if ($response->state == 'approved') {
        session()->forget('shopping_cart_id');//una vez pagado el carro con esta linea lo sacamos de la session asi se puede crear otro       
        $order = Order::createFromPayPalResponse($response, $shopping_cart); // reviso si la respuesta esta aprobada , si es asi guardo en order los detalles de la compra
        $shopping_cart->approve();
      }

      return view('shopping_carts.completed', ['shopping_carro' => $shopping_cart, 'order' => $order]); // retorno la vista de completed q estan en la carp shopping_carts, enviando el carro y la orden creada
    }
}
