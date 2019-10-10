<?php

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('customers')->insert([
        'idCompany'=>'1',
        'idTaxInformation'=>'3',
        'maxDebt'=>'5748.99',
        'actualDebt'=>'0.00',
        'notes'=>'Cliente puntual'
      ]);

      DB::table('customers')->insert([
        'idCompany'=>'1',
        'idTaxInformation'=>'3',
        'maxDebt'=>'5748.99',
        'actualDebt'=>'4304.00',
        'notes'=>'Cliente moroso'
      ]);
    }
}
