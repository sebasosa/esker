<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

      $products1 = Product::where('title', 'WATERDOG DOME 3')->get();
      foreach ($products1 as $prod) {
        DB::table('images')->insert([
          ['name'=> 'WATERDOG DOME 3 1',
          'ext'=> 'png',
          'product_id' => $prod->id,
          'url'=> 'WATERDOG DOME 3 1.png' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'WATERDOG DOME 3 2',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'WATERDOG DOME 3 2.jpeg' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'WATERDOG DOME 3 3',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'WATERDOG DOME 3 3.jpeg' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")]
        ]);
      }
      $products1 = Product::where('title', 'Natway Blac 30')->get();
      foreach ($products1 as $prod) {
        DB::table('images')->insert([
          ['name'=> 'Natway Blac 30 1',
          'ext'=> 'png',
          'product_id' => $prod->id,
          'url'=> 'Natway Blac 30 1.png' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'Natway Blac 30 2',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=>'Natway Blac 30 2.jpeg' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'Natway Blac 30 3',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'Natway Blac 30 3.jpeg',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")]
        ]);
      }
      $products1 = Product::where('title', 'Botas Borcegos Hi Tec')->get();
      foreach ($products1 as $prod) {
        DB::table('images')->insert([
          ['name'=> 'Botas Borcegos Hi Tec 1',
          'ext'=> 'png',
          'product_id' => $prod->id,
          'url'=> 'Botas Borcegos Hi Tec 1.png' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'Botas Borcegos Hi Tec 2',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'Botas Borcegos Hi Tec 2.jpeg',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'Botas Borcegos Hi Tec 3',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'Botas Borcegos Hi Tec 3.jpeg' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")]
        ]);
      }
      $products1 = Product::where('title', 'WATERDOG TA450D')->get();
      foreach ($products1 as $prod) {
        DB::table('images')->insert([
          ['name'=> 'WATERDOG TA450D 1',
          'ext'=> 'png',
          'product_id' => $prod->id,
          'url'=> 'WATERDOG TA450D 1.png',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'WATERDOG TA450D 2',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'WATERDOG TA450D 2.jpeg',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'WATERDOG TA450D 3',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'WATERDOG TA450D 3.jpeg',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")]
        ]);
      }
      $products1 = Product::where('title', 'Hi-Tec Tortola Escape')->get();
      foreach ($products1 as $prod) {
        DB::table('images')->insert([
          ['name'=> 'Hi-Tec Tortola Escape 1',
          'ext'=> 'png',
          'product_id' => $prod->id,
          'url'=> 'Hi-Tec Tortola Escape 1.png',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'Hi-Tec Tortola Escape 2',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'Hi-Tec Tortola Escape 2.jpeg',
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")],
          ['name'=> 'Hi-Tec Tortola Escape 3',
          'ext'=> 'jpeg',
          'product_id' => $prod->id,
          'url'=> 'Hi-Tec Tortola Escape 3.jpeg' ,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s")]
        ]);
      }


    }

}
