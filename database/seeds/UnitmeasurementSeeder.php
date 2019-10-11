<?php

use Illuminate\Database\Seeder;

class UnitmeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('unitmeasurements')->insert([
        'code'=>'10',
        'description'=>'Grupos'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'11',
        'description'=>'Equipos'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'A9',
        'description'=>'Tarifa'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'AB',
        'description'=>'Paquete a granel'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'ACT',
        'description'=>'Actividad'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'AS',
        'description'=>'Variedad'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'BB',
        'description'=>'Caja base'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'DAY',
        'description'=>'Día'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'DPC',
        'description'=>'Docenas de piezas'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'E48',
        'description'=>'Unidad de Servicio'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'E51',
        'description'=>'Trabajo'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'E54',
        'description'=>'Viaje'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'EA',
        'description'=>'Elemento'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'GRM',
        'description'=>'Gramo'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'H87',
        'description'=>'Pieza'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'HUR',
        'description'=>'Hora'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'KGM',
        'description'=>'Kilogramo'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'KT',
        'description'=>'Kit'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'LTR',
        'description'=>'Litro'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'MGM',
        'description'=>'Miligramo'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'MLT',
        'description'=>'Mililitro'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'MON',
        'description'=>'Mes'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'MTK',
        'description'=>'Metro cuadrado'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'MTR',
        'description'=>'Metro'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'PR',
        'description'=>'Par'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'SET',
        'description'=>'Conjunto'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'XBX',
        'description'=>'Caja'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'XKI',
        'description'=>'Kit (Conjunto de piezas)'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'XLT',
        'description'=>'Lote'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'XPK',
        'description'=>'Paquete'
      ]);

      DB::table('unitmeasurements')->insert([
        'code'=>'XUN',
        'description'=>'Unidad'
      ]);
    }
}
