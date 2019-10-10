<?php

use Illuminate\Database\Seeder;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('emails')->insert([
        'email'=>'emma@gmail.com'
      ]);

      DB::table('emails')->insert([
        'email'=>'vilma@gmail.com'
      ]);

      DB::table('emails')->insert([
        'email'=>'rodrigo@gmail.com'
      ]);

      DB::table('emails')->insert([
        'email'=>'daniela@gmail.com'
      ]);
    }
}
