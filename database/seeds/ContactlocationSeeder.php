<?php

use Illuminate\Database\Seeder;

class ContactlocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contactlocations')->insert([
        'idaddress'=>'1',
        'idphone'=>'1',
        'idemail'=>'1',
        'responsible'=>'José René Chavarría Carranza',
        'positionresponsible'=>'Director general',
        'web'=>'www.dyctech.com'
      ]);

    }
}
