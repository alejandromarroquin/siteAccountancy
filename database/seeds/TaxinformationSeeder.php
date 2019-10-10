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
        'idtaxinformation'=>'2',
        'rfc'=>'IAGF961220LF4',
        'businessname'=>'Fernanda Romero Castro',
        'taxRegime'=>'Física'
      ]);

      DB::table('taxinformations')->insert([
        'idtaxinformation'=>'1',
        'rfc'=>'SATD961220LF4',
        'businessname'=>'Santiago Nuñez Bahena',
        'taxRegime'=>'Física'
      ]);

      DB::table('taxinformations')->insert([
        'idtaxinformation'=>'3',
        'rfc'=>'RYGD961427LU4',
        'businessname'=>'Industrias Farmacéuticas de Mexico S.A DE C.V',
        'taxRegime'=>'Física'
      ]);
    }
}
