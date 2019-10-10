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
    }
}
