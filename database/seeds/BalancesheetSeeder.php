<?php

use Illuminate\Database\Seeder;

class BalancesheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('balancesheets')->insert([
        'idAccountancyCatalog'=>'1',
        'type'=>'1',
        'amount'=>'627.99',
        'totalAssets'=>'7578.48',
        'totalLiabilities'=>'838.83',
        'totalLiabilitiesEquity'=>'364.38',
        'sumAssets'=>'7584.58'
      ]);

      DB::table('balancesheets')->insert([
        'idAccountancyCatalog'=>'1',
        'type'=>'1',
        'amount'=>'345.99',
        'totalAssets'=>'938.48',
        'totalLiabilities'=>'786.83',
        'totalLiabilitiesEquity'=>'557.38',
        'sumAssets'=>'5667.58'
      ]);
    }
}
