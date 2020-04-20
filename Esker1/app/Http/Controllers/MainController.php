<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ShoppingCart;

use App\Product;


class MainController extends Controller {
    public function home () {
    
        return view('main.home'); // a la vista le paso el carrito de compras
    }
}
