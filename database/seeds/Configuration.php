<?php

use Illuminate\Database\Seeder;

class Configuration extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('configurations')->insert([
        'idCompany'=>'1',
        'cfditemplate'=>'1'
      ]);
    }
}
