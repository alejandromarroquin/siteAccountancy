<?php

use Illuminate\Database\Seeder;

class MethodpaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('methodpayments')->insert([
        'code'=>'PUE',
        'description'=>'Pago en una sola exhibición'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'PPD',
        'description'=>'Pago en parcialidades o diferido'
      ]);
    }
}
