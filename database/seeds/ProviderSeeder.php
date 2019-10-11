<?php

use Illuminate\Database\Seeder;

class ProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('providers')->insert([
        'idTaxinformation'=>'1',
        'idCompany'=>'1',
        'debt'=>'1200.00',
        'maxDebt'=>'10000.00'
      ]);

      DB::table('providers')->insert([
        'idTaxinformation'=>'2',
        'idCompany'=>'1',
        'debt'=>'1270.00',
        'maxDebt'=>'7000.00'
      ]);

      DB::table('providers')->insert([
        'idTaxinformation'=>'2',
        'idCompany'=>'1',
        'debt'=>'170.00',
        'maxDebt'=>'700.00'
      ]);
    }
}
