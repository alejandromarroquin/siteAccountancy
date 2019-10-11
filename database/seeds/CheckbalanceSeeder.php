<?php

use Illuminate\Database\Seeder;

class CheckbalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('checkbalances')->insert([
        'idAccountancyCatalog'=>'1',
        'beginningBalance'=>'273.28',
        'charge'=>'283.99',
        'payment'=>'637.48',
        'finalBalance'=>'992.83'
      ]);

      DB::table('checkbalances')->insert([
        'idAccountancyCatalog'=>'1',
        'beginningBalance'=>'846.28',
        'charge'=>'782.99',
        'payment'=>'292.48',
        'finalBalance'=>'289.83'
      ]);

      DB::table('checkbalances')->insert([
        'idAccountancyCatalog'=>'1',
        'beginningBalance'=>'216.28',
        'charge'=>'179.99',
        'payment'=>'182.48',
        'finalBalance'=>'219.83'
      ]);
    }
}
