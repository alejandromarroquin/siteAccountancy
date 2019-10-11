<?php

use Illuminate\Database\Seeder;

class StatementresultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('statementresults')->insert([
        'idAccountancyCatalog'=>'1',
        'date'=>'2001-11-08',
        'amount'=>'1200.00',
        'porcent'=>'0.23'
      ]);

      DB::table('statementresults')->insert([
        'idAccountancyCatalog'=>'1',
        'date'=>'2019-10-23',
        'amount'=>'120.00',
        'porcent'=>'0.19'
      ]);

      DB::table('statementresults')->insert([
        'idAccountancyCatalog'=>'1',
        'date'=>'2019-05-17',
        'amount'=>'279.00',
        'porcent'=>'0.19'
      ]);
    }
}
