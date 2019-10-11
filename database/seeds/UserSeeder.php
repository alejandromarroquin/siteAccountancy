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
          'name'=>'Alejandro',
          'email'=>'marroquin.alex@hotmail.com',
          'password'=>Hash::make("alejandro")
        ]);

        DB::table('users')->insert([
          'name'=>'Cristina',
          'email'=>'cristina@gmail.com',
          'password'=>Hash::make("cristina")
        ]);

        DB::table('users')->insert([
          'name'=>'Viridiana',
          'email'=>'viridiana@gmail.com',
          'password'=>Hash::make("viridiana")
        ]);
    }
}
