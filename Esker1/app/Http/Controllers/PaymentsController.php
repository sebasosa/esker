<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PayPal;
use App\ShoppingCart;
use App\Order;

class PaymentsController extends Controller
{

    /* en el constructor de la clase le indicamos que utilize el middleware del  carro de compras*/
    public function __construct()
    {
      $this->middleware("shopping_cart");
    }

    public function store(Request $request)
    {
      $shopping_cart = $request->shopping_cart; //ahora accedo al carro a travez del middleware mediante el objeto request

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
