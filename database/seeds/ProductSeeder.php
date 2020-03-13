<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('products')->insert([
        'idCompany'=>1,
        'code'=>'SW23',
        'description'=>'Pasta colgate',
        'unitprice'=>23.45,
        'iva'=>0.16,
        'discount'=>0.30
      ]);
    }
}
