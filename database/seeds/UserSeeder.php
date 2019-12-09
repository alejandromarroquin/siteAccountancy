<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'idCompany'=>'1',
          'typeuser'=>'1',
          'name'=>'Alejandro',
          'lastname'=>'Marroquin',
          'email'=>'marroquin.alex@hotmail.com',
          'password'=>Hash::make("alejandro")
        ]);

        DB::table('users')->insert([
          'idCompany'=>'1',
          'typeuser'=>'2',
          'name'=>'Cristina',
          'lastname'=>'Ramírez',
          'email'=>'cristina@gmail.com',
          'password'=>Hash::make("cristina")
        ]);

        DB::table('users')->insert([
          'idCompany'=>'1',
          'typeuser'=>'3',
          'name'=>'Viridiana',
          'lastname'=>'Herrera',
          'email'=>'viridiana@gmail.com',
          'password'=>Hash::make("viridiana")
        ]);
    }
}
