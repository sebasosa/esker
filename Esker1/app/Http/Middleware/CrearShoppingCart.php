<?php

namespace App\Http\Middleware;

use Closure;
use App\ShoppingCart;

class CrearShoppingCart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $shopping_cart_id = session('shopping_cart_id'); //me fijo si en la sesion hay guardado un id de un carro

        $shopping_cart = ShoppingCart::encontrarOCrearPorSessionID($shopping_cart_id); // aca mandamos a llamar la funcion del modelo ShoppingCart que verifica si tenemos un  carro asignado a esa session

        $request->shopping_cart = $shopping_cart; //asigno al objeto request un campo con el carrito de compras , para q este disponible en todos los controladores

        return $next($request);
    }
}
