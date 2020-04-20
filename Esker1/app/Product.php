<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
      return $this->belongsTo("App\Category")->first()->title;
    }

    public function paypalItem()
    {
      return \PaypalPayment::item()->setName($this->title) // en el metodo estatico item,le paso los parametros de cada producto q recibo,el titulo,descripcion, la moneda , la cantidad del prod, el precio
                                  ->setDescription($this->long_description)
                                  ->setCurrency('USD')
                                  ->setQuantity(1)
                                  ->setPrice($this->pricing)   ;
    }
}
