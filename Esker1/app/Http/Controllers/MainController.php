<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ShoppingCart;
use App\Product;

class MainController extends Controller {
    public function home () {
        // $products = Product::latest()->get(); si queres mostrar todos los productos de la base de datos en una sola pag
        //$products = Product::latest()->simplePaginate(25); // si queremos mostrar cierta cantidad de productos , la cant de pag se maneja desde la vista main/home.php

      return view('main.home'/*,["products" => $products]*/);
    }
}
