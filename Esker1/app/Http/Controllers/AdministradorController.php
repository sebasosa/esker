<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Order;
use App\User;

class AdministradorController extends Controller
{
    public function dashboard()
    {
      $products = Product::all()->take(12);
      $categories = Category::all()->take(6);
      $orders = Order::all()->take(6);
      $users = User::all()->take(6);
      $totalMensual = Order::totalMensual() ;
      $totalMensualCount = Order::totalMensualCount();
      return view('admin.welcome', [
        'products' => $products,
        'categories' => $categories,
        'orders' => $orders,
        'users' => $users,
        'totalMensual' => $totalMensual,
        'totalMensualCount' => $totalMensualCount
      ]);
    }
}
