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

      DB::table('contactlocations')->insert([
        'idaddress'=>'2',
        'idphone'=>'2',
        'idemail'=>'2',
        'responsible'=>'Viridiana Herrera Matínez',
        'positionresponsible'=>'Gerente de ventas',
        'web'=>'www.empresa.com'
      ]);

      DB::table('contactlocations')->insert([
        'idaddress'=>'3',
        'idphone'=>'3',
        'idemail'=>'3',
        'responsible'=>'Sergio Romero Tellez',
        'positionresponsible'=>'Contador',
        'web'=>'www.empresa.com'
      ]);
    }
}
