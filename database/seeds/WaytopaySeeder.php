<?php

use Illuminate\Database\Seeder;

class WaytopaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('waytopays')->insert([
        'code'=>'01',
        'description'=>'Efectivo',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'02',
        'description'=>'Cheque nominativo',
        'bancarizado'=>'1'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'03',
        'description'=>'Cheque nominativo',
        'bancarizado'=>'1'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'04',
        'description'=>'Tarjeta de crédito',
        'bancarizado'=>'1'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'05',
        'description'=>'Monedero electrónico',
        'bancarizado'=>'1'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'06',
        'description'=>'Dinero electrónico',
        'bancarizado'=>'1'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'08',
        'description'=>'Vales de despensa',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'12',
        'description'=>'Dación en pago',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'13',
        'description'=>'Pago por subrogación',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'14',
        'description'=>'Pago por consignación',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'15',
        'description'=>'Condonación',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'17',
        'description'=>'Compensación',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'23',
        'description'=>'Novación',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'24',
        'description'=>'Confusión',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'25',
        'description'=>'Remisión de deuda',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'26',
        'description'=>'Prescripción o caducidad',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'27',
        'description'=>'A satisfacción del acreedor',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'28',
        'description'=>'Tarjeta de débito',
        'bancarizado'=>'1'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'29',
        'description'=>'Tarjeta de servicios',
        'bancarizado'=>'1'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'30',
        'description'=>'Aplicación de anticipos',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'31',
        'description'=>'Intermediario pagos',
        'bancarizado'=>'0'
      ]);

      DB::table('waytopays')->insert([
        'code'=>'99',
        'description'=>'Por definir',
        'bancarizado'=>'2'
      ]);
    }
}
