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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'MainController@home');
Route::get('/faq',function(){
  return view('main.faq');
});
Route::get('/contacto', function(){
  return view('main.contacto');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/productos', 'ProductController@catalogo');
Route::get('/productos/{id}', 'ProductController@catalogoCat');

Route::get('/carrito', 'ShoppingCartController@index');

Route::post('/carrito', 'ShoppingCartController@checkOut');//cuando accedemos a esta ruta con el metodo post nos va a mandar a la funcion checkOut

Route::get('/payments/store', 'PaymentsController@store');

Auth::routes();

Route::resource('products', 'ProductController');

Route::resource('products_shoppingcarts', 'Product_ShoppingCartController');

Route::resource('compras', 'ShoppingCartController');

Route::resource('orders', 'OrdersController');

Route::group(['prefix' => 'admin', 'middleware' => ['auth' => 'admin']], function(){
  Route::get('/', function(){
    return view('welcome');
  });
  Route::resource('products', 'ProductController');

});
