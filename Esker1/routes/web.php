<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'shopping_cart'], function(){
  Route::get('/', 'MainController@home');
  Route::get('/faq',function(){
    return view('main.faq');
  });
  Route::get('/contacto', function(){
    return view('main.contacto');
  });
  Route::get('/productos', 'ProductController@catalogo');
  Route::get('/productos/{id}', 'ProductController@catalogoCat');
  Route::get('/carrito', 'ShoppingCartController@index');
  Route::get('/payments/store', 'PaymentsController@store');
  Route::post('/carrito', 'ShoppingCartController@checkOut');//cuando accedemos a esta ruta con el metodo post nos va a mandar a la funcion checkOut
  Route::get('/products_shoppingcarts/{product_id}/{shopping_cart_id}', 'Product_ShoppingCartController@destroy');
  Auth::routes();
  Route::resource('products', 'ProductController');
  Route::resource('products_shoppingcarts', 'Product_ShoppingCartController');
  Route::resource('compras', 'ShoppingCartController');
  Route::resource('orders', 'OrdersController');
  Route::get('/administrador', 'AdministradorController@dashboard');
  // Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin' ]], function(){ // con esto accedemos a las rutas de administrador que llevan el prefijo /admin/
  //   Route::get('/', function(){
  //     return view('admin.welcome');
  //   });
  // });
});
