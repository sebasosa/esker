<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsShoppingCart extends Model
{
    protected $fillable =['product_id', 'shopping_cart_id'];

    public static function productsCount($shopping_cart_id) //esta funcion cuenta cuantos productos hay asociados al carro de compras q recibe
    {
      return ProductsShoppingCart::where("shopping_cart_id", $shopping_cart_id)->count();
    }
}
