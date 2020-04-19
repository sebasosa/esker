<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopping_cart extends Model
{
  /* cuando el cliente recien entra le mostramos el carrito q ya tenia o si no tiene le creamos uno */
  public static function findOrCreateBySessionID()
  {
    // code...
  }
}
