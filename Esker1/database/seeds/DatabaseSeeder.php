<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
      $this->call(ProductsTableSeeder::class);
      $this->call(CategoriesTableSeeder::class);
      $this->call(LegajosTableSeeder::class);
      $this->call(UsersTableSeeder::class);
      $this->call(OrdersTableSeeder::class);
      $this->call(ImagesTableSeeder::class);
       DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        // $this->call(UsersTableSeeder::class);

    }
}
