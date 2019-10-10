<?php

use Illuminate\Database\Seeder;

class PurchaserequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('purchaserequests')->insert([
        'idAccountancy'=>'1',
        'idPersonCheck'=>'1',
        'date'=>'2006-05-05',
        'concept'=>'Repuesto de computadora',
        'quantity'=>'1',
        'subtotal'=>'100.00',
        'iva'=>'16.00',
        'total'=>'116.00',
        'status'=>'0'
      ]);

      DB::table('purchaserequests')->insert([
        'idAccountancy'=>'1',
        'idPersonCheck'=>'2',
        'date'=>'2019-04-06',
        'concept'=>'Reemplazo de mobiliario',
        'quantity'=>'3',
        'subtotal'=>'1000.00',
        'iva'=>'160.00',
        'total'=>'1160.00',
        'status'=>'1'
      ]);

    }
}
