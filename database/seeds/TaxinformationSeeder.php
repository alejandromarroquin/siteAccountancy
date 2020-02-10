<?php

use Illuminate\Database\Seeder;

class TaxinformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('taxinformations')->insert([
        'idtaxinformation'=>'1',
        'idtaxRegime'=>'1',
        'rfc'=>'DYC160316AT6',
        'businessname'=>'D&C Tech Development and Consulting S.A. de C.V.'
      ]);

    }
}
