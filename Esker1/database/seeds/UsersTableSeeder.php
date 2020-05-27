<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            ['name' => 'Jon Snow',
            'email' => 'jon@gmail.com',
            'password' => Hash::make('11111111'),
            'role' => 'admin',
            'imagen' => 'Jon Snow.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Arya Stark',
            'email' => 'arya@gmail.com',
            'password' => Hash::make('11111111'),
            'role' => 'user',
            'imagen' => 'Arya Stark.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Bran Stark',
            'email' => 'bran@gmail.com',
            'password' => Hash::make('11111111'),
            'role' => 'user',
            'imagen' => 'Bran Stark.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'Sansa Stark',
            'email' => 'sansa@gmail.com',
            'password' => Hash::make('11111111'),
            'role' => 'admin',
            'imagen' => 'Sansa Stark.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]
        ]);
    }
}
