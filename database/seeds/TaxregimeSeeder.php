<?php

use Illuminate\Database\Seeder;

class TaxregimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('taxregimes')->insert([
        'code'=>'601',
        'description'=>'General de Ley Personas Morales',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'603',
        'description'=>'Personas Morales con Fines no Lucrativos',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'605',
        'description'=>'Sueldos y Salarios e Ingresos Asimilados a Salarios',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'606',
        'description'=>'Arrendamiento',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'608',
        'description'=>'Demás ingresos',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'609',
        'description'=>'Consolidación',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'610',
        'description'=>'Residentes en el Extranjero sin Establecimiento Permanente en México',
        'fisica'=>'1',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'611',
        'description'=>'Ingresos por Dividendos (socios y accionistas)',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'612',
        'description'=>'Personas Físicas con Actividades Empresariales y Profesionales',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'614',
        'description'=>'Ingresos por intereses',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'615',
        'description'=>'Régimen de los ingresos por obtención de premios',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'616',
        'description'=>'Sin obligaciones fiscales',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'620',
        'description'=>'Sociedades Cooperativas de Producción que optan por diferir sus ingresos',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'621',
        'description'=>'Incorporación Fiscal',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'622',
        'description'=>'Actividades Agrícolas, Ganaderas, Silvícolas y Pesqueras',
        'fisica'=>'1',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'623',
        'description'=>'Opcional para Grupos de Sociedades',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'624',
        'description'=>'Coordinados',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'628',
        'description'=>'Hidrocarburos',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'607',
        'description'=>'Régimen de Enajenación o Adquisición de Bienes',
        'fisica'=>'0',
        'moral'=>'1'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'629',
        'description'=>'De los Regímenes Fiscales Preferentes y de las Empresas Multinacionales',
        'fisica'=>'1',
        'moral'=>'0'
      ]);

      DB::table('taxregimes')->insert([
        'code'=>'630',
        'description'=>'Enajenación de acciones en bolsa de valores',
        'fisica'=>'1',
        'moral'=>'0'
      ]);
    }
}
