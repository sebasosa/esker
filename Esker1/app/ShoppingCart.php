<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
  //mass assigment
  protected $fillable = ["status"];
  /*Los metodos estaticos , los podemos llamar desde la clase ej ShoppingCart::crearSinSessionen cambio los metodos publicos solo los llamamos cuando instanciamos la clase*/

  public function inShoppingCarts()
  {
    return $this->hasMany("App\ProductShoppingCart"); //establecemos la relacion entre las tablas
  }
  public function products()
  {
    return $this->belongsToMany("App\Product", "products_shopping_carts");
  }

  public function productsSize()
  {
     return $this->products()->count(); // cuenta los productos asociados al carro de compras
  }
  public function idCarro()
  {
    return $this->id ;
  }
   public function total()
   {
     return $this->products()->sum('pricing'); //sumo todos los precios de los productos dentro del carrito de compras
   }

   public function totalUSD() //esta funcion me tranforma el total de pesos a dolares
  {
    return $this->total() / 67 ;
  }
  /* cuando el cliente recien entra le mostramos el carrito q ya tenia o si no tiene le creamos uno */
  public static function encontrarOCrearPorSessionID($shopping_cart_id)
  {
      if ($shopping_cart_id) {
        return ShoppingCart::encontrarPorSession($shopping_cart_id) ;// Buscar el carrito de compras con este ID
      } else {
        return ShoppingCart::crearSinSession();// Crear un carrito de compras
      }

  }

  public static function encontrarPorSession($shopping_cart_id)
  {
    return ShoppingCart::find($shopping_cart_id);//busco el carrito por el id q me llega
  }

  public static function crearSinSession()
  {
  return ShoppingCart::create([
    "status" => "incompleted"
  ]);// creo un nuevo carro de compras para esta session
  }
}
