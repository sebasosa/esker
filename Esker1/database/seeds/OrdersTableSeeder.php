<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 10 ; $i++) {
        DB::table('orders')->insert([
          [ 'shopping_cart_id'=> $i,
            'line1'=> '1 Main St',
            'city'=> 'San Jose',
            'postal_code'=> '95131',
            'country_code'=> 'US',
            'state'=> 'CA',
            'recipient_name'=> 'eduardo arg',
            'email'=> 'sebasbuyer@codigofacilito.com',
            'status'=> 'creado',
            'total'=> '20',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]
        ]);
      }

    }
}
