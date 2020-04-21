<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ShoppingCart;

class Order extends Model
{
  protected $fillable = ['line1', 'line2', 'city', 'country_code', 'state', 'postal_code', 'email', 'shopping_cart_id', 'status', 'total', 'guide_number', 'recipient_name'];

  public function address()
  {
    return "$this->line1 $this->line2";
  }

  public static function createFromPayPalResponse($response, $shopping_cart)
  {
    $payer = $response->payer; // extraemos el pagador del pago creado en PayPal

    $orderData = (array) $payer->payer_info->shipping_address; // en un array ponemos toda la informacion de la direccion y el q recibe la encomienda

    $orderData = $orderData[key($orderData)]; //paso necesario para crear el arreglo

    $orderData['email'] = $payer->payer_info->email; // agrego la info del mail al array

    $orderData['total'] = $shopping_cart->total(); // del carro de copras saco el total y el id

    $orderData['shopping_cart_id'] = $shopping_cart->id;

    return Order::create($orderData); //creamos una instancia de la clase con los datos recibidos
  }
}
