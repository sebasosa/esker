<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
  //mass assigment
  protected $fillable = ['status'];
  /*Los metodos estaticos , los podemos llamar desde la clase ej ShoppingCart::crearSinSessionen cambio los metodos publicos solo los llamamos cuando instanciamos la clase*/

  public function approve() // este metodo se encarga de iniciar la actualizacion del custom_id y de poner el status en aprobado
  {
    $this->updateCustomIdAndStatus();
  }

  public function generateCustomId() //una vez q el carro fue pagado generamos un id con  un hash cosa de q no puedan acceder a los carros sin tener el id correcto
  {
    return md5("$this->id $this->updated_at");// esta funcion devuelve un hash a partir de un string para mas seguridad le agragamos al numero de id el timestamp de cuando fue creado
  }

  public function updateCustomIdAndStatus()// guardamos el custom id en el carro de compras y modifica el status del mismo
  {
    $this->status = 'Aprobado';
    $this->custom_id = $this->generateCustomId();
    $this->save();
  }

  public function inShoppingCarts()
  {
    return $this->hasMany("App\ProductShoppingCart"); //establecemos la relacion entre las tablas
  }
  public function products()
  {
    return $this->belongsToMany("App\Product", "products_shopping_carts");
  }

  public function order()
  {
    return $this->hasOne("App\Order")->first(); // nos devuelve la orden q esta relacionada a este carro de compras
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
