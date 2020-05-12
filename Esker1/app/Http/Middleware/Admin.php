<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
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
      if (Auth::check() && Auth::user()->rol() == "admin") { // si el usuario esta logueado y su rol es administrador sigue con el la cadena de middleware , si no es admin manda la login
        return $next($request);
      }
        return redirect('/administrador');
    }
}
