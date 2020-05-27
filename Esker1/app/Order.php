<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ShoppingCart;

class Order extends Model
{
  protected $fillable = ['line1', 'line2', 'city', 'country_code', 'state', 'postal_code', 'email', 'shopping_cart_id', 'status', 'total', 'guide_number', 'recipient_name'];

  public function scopeUltimas($query) //usando el prefijo scope podemos usar la funcion como metodo de clase o como un metodo del objeto
  {

    return $query->orderId()->mensual(); //esto devuelve las ordenes del mes ordenadas por el id
  }

  public function scopeOrderId($query)
  {
    return $query->orderBy('id', 'desc');//dev las ordenes por id y en forma descendente
  }

  public function scopeMensual($query)
  {
    return $query->whereMonth('created_at', "=", date('m')) ;//la funcion date con el paremetro m devuelve el mes actual, con eso buscamos las ordenes del mes con el whereMonth
  }

  public function address()
  {
    return "$this->line1 $this->line2";
  }

  public static function totalMensual()
  {
    return Order::mensual()->sum('total'); //suma el total de cada una de las ordenes del mes, para hacer un total mensual
  }

  public static function totalMensualCount()
  {
    return Order::mensual()->count('total'); //cuenta la cantidad de ordenes del mes
  }


  public static function createFromPayPalResponse($response, $shopping_cart)
  {
    $payer = $response->payer; // extraemos el pagador del pago creado en PayPal

    $orderData = (array) $payer->payer_info->shipping_address; // en un array ponemos toda la informacion de la direccion y el q recibe la encomienda

    $orderData = $orderData[key($orderData)]; //paso necesario para crear el arreglo

    $orderData['email'] = $payer->payer_info->email; // agrego la info del mail al array

    $orderData['total'] = $shopping_cart->total(); // del carro de copras saco el total y el id
    $orderData['status'] = 'Aprobado';
    $orderData['shopping_cart_id'] = $shopping_cart->id;

    return Order::create($orderData); //creamos una instancia de la clase con los datos recibidos
  }
}
