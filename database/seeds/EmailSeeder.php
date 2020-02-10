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
        'email'=>'mcao160696@upemor.edu.mx'
      ]);

    }
}
