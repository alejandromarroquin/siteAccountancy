<?php

use Illuminate\Database\Seeder;

class MethodpaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('methodpayments')->insert([
        'code'=>'01',
        'description'=>'Efectivo'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'02',
        'description'=>'Cheque nominativo'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'03',
        'description'=>'Transferencia electrónica de fondos'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'04',
        'description'=>'Tarjeta de crédito'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'05',
        'description'=>'Monedero electrónico'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'08',
        'description'=>'Vales de despensa'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'12',
        'description'=>'Dación en pago'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'13',
        'description'=>'Pago por subrogación'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'14',
        'description'=>'Pago por consignación'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'15',
        'description'=>'Condonación'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'17',
        'description'=>'Compensación'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'23',
        'description'=>'Novación'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'24',
        'description'=>'Confusión'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'25',
        'description'=>'Remisión de deuda'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'26',
        'description'=>'Prescripción o caducidad'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'27',
        'description'=>'A satisfacción del acreedor'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'28',
        'description'=>'Tarjeta de débito'
      ]);

      DB::table('methodpayments')->insert([
        'code'=>'29',
        'description'=>'Tarjeta de servicios'
      ]);
    }
}
