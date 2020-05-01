<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static function productos($id)
    {

      return Category::find($id)->hasMany("App\Product")->get(); //devuelve los productos de la categoria
    }
}
