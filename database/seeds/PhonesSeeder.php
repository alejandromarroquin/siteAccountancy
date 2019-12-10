<?php

use Illuminate\Database\Seeder;

class PhonesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('phones')->insert([
        'office'=>'7773907007',
        'extension'=>'',
        'cellphone'=>'7773907007'
      ]);

      DB::table('phones')->insert([
        'office'=>'6378421',
        'extension'=>'367',
        'cellphone'=>'7774736489'
      ]);

      DB::table('phones')->insert([
        'office'=>'7468389',
        'extension'=>'593',
        'cellphone'=>'7776359203'
      ]);
    }
}
