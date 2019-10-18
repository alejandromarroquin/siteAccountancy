<?php

use Illuminate\Database\Seeder;

class CompanieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies')->insert([
        'idTaxInformation'=>'1',
        'idGeneralInformation'=>'2'
      ]);

      DB::table('companies')->insert([
        'idTaxInformation'=>'2',
        'idGeneralInformation'=>'2'
      ]);

      DB::table('companies')->insert([
        'idTaxInformation'=>'3',
        'idGeneralInformation'=>'1'
      ]);
    }
}
