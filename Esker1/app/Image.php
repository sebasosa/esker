<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Product;

class Image extends Model
{
  protected $fillable = ['name', 'ext', 'product_id'];

  public static function imagen(Request $request, $i, $product)
  {
    $imgn ="imagen$i";
    
    $ext = $request->$imgn->extension();
    $name = "$request->title $i";
    $request->$imgn->storeAs('img', "$name.$ext");
    $imagen = Image::create([
      'name' => $name,
      'ext' => $ext,
      'product_id' => $product->id
    ]);
    $imagen->save();
  }
}
