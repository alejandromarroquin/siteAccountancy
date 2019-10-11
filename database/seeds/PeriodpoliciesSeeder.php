<?php

use Illuminate\Database\Seeder;

class PeriodpoliciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('periodpolicies')->insert([
        'idAccountancyCatalog'=>'1',
        'account'=>'1',
        'subaccount'=>'345.99',
        'name'=>'938.48',
        'partial'=>'786.83',
        'debit'=>'557.38',
        'have'=>'5667.58'
      ]);

      DB::table('periodpolicies')->insert([
        'idAccountancyCatalog'=>'1',
        'account'=>'1',
        'subaccount'=>'345.99',
        'name'=>'392.48',
        'partial'=>'372.83',
        'debit'=>'557.38',
        'have'=>'7722.58'
      ]);

      DB::table('periodpolicies')->insert([
        'idAccountancyCatalog'=>'1',
        'account'=>'1',
        'subaccount'=>'283.99',
        'name'=>'637.48',
        'partial'=>'992.83',
        'debit'=>'233.38',
        'have'=>'3728.58'
      ]);
    }
}
