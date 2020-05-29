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
  Route::get('/', 'MainController@home')->name('home');
  Route::view('/faq','main.faq')->name('faq');
  Route::view('/contacto','main.contacto')->name('contacto');
  Route::view('/perfil', 'main.perfil')->name('perfil');

  Route::get('/productos', 'ProductController@catalogo')->name('productos.catalogo');
  Route::get('/productos/{id}', 'ProductController@catalogoCat')->name('producto.detalle');
  Route::get('/carrito', 'ShoppingCartController@index')->name('carrito.index');
  Route::get('/payments/store', 'PaymentsController@store');
  Route::post('/carrito', 'ShoppingCartController@checkOut');//cuando accedemos a esta ruta con el metodo post nos va a mandar a la funcion checkOut
  Route::get('/products_shoppingcarts/{product_id}/{shopping_cart_id}', 'Product_ShoppingCartController@destroy')->name('producto.eliminar');
  Auth::routes();
  Route::resource('products', 'ProductController');
  Route::resource('products_shoppingcarts', 'Product_ShoppingCartController');
  Route::resource('compras', 'ShoppingCartController');
  Route::resource('orders', 'OrdersController');
  Route::get('/administrador', 'AdministradorController@dashboard')->name('administrador');
  Route::resource('categories', 'CategoryController');
  Route::resource('users', 'UserController');
});
