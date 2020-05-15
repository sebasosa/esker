<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegajosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Legajos')->insert([
        ['numero_legajo' => '112255',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")],
        ['numero_legajo' => '112266',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")],
        ['numero_legajo' => '112277',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")],
        ['numero_legajo' => '112288',
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s")]
      ]);
    }
}
