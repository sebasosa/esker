<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\ShoppingCart;

class ShoppingCartProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

     /* este provider nos sirve para poner el carro en todas las paginas sin tener q hacerlo una por una*/
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
     /* para las vistas se utliza la funcion boot por lo tanto aca ponemos el carro*/
    public function boot()
    {
        /* el view composer nos permite inyectar variables dentro de las vistas , como esta seleccionado el * lo va a inyectar en todas las vistas*/
        view()->composer("*", function($view){

          $shopping_cart_id = session('shopping_cart_id'); //me fijo si en la sesion hay guardado un id de un carro

          $shopping_cart = ShoppingCart::encontrarOCrearPorSessionID($shopping_cart_id); // aca mandamos a llamar la funcion del modelo ShoppingCart que verifica si tenemos un  carro asignado a esa session

          session(['shopping_cart_id' => $shopping_cart->id]);//\Session::put(['shopping_cart_id',$shopping_cart->id]); //guardo en la sesion el id del carro de compras con el metodo put de la  clase Session

          $view->with('shopping_cart', $shopping_cart); // aca le digo q las vistas usen el carro de compras

          /* RECORDAR Q PARA PODER UTILIZAR TENGO Q REGISTRAR EL PROVIDER EN EL ARCHIVO APP.PHP DENTRO DE LA CARPETA COFIG*/
        });
    }
}
