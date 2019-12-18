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
        'rfc'=>'DYC160316AT6',
        'businessname'=>'D&C Tech Development and Consulting S.A. de C.V.',
        'taxRegime'=>'Física'
      ]);

      DB::table('taxinformations')->insert([
        'idtaxinformation'=>'3',
        'rfc'=>'VIC160316AYA',
        'businessname'=>'VICHISA S.A. DE C.V.',
        'taxRegime'=>'Física'
      ]);

      DB::table('taxinformations')->insert([
        'idtaxinformation'=>'2',
        'rfc'=>'FSE920910CC6',
        'businessname'=>'Coca-Cola FEMSA, S.A.B. de C.V.',
        'taxRegime'=>'Moral'
      ]);

      DB::table('taxinformations')->insert([
        'idtaxinformation'=>'2',
        'rfc'=>'BIM011108DJ5',
        'businessname'=>'GRUPO BIMBO, S.A.B. DE C.V.',
        'taxRegime'=>'Moral'
      ]);

    }
}
