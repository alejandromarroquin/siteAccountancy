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
        'web'=>'www.dyctech.com',
        'responsible'=>'José René Chavarría Carranza'
      ]);

      DB::table('contactlocations')->insert([
        'idaddress'=>'2',
        'idphone'=>'2',
        'idemail'=>'2',
        'web'=>'www.empresa.com',
        'responsible'=>'Viridiana Herrera Matínez'
      ]);

      DB::table('contactlocations')->insert([
        'idaddress'=>'3',
        'idphone'=>'3',
        'idemail'=>'3',
        'web'=>'www.empresa.com',
        'responsible'=>'Sergio Romero Tellez'
      ]);
    }
}
