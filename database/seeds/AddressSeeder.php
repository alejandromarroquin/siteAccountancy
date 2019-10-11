<?php

use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('addresses')->insert([
        'street'=>'5 de febrero',
        'colony'=>'Civac',
        'state'=>'Morelos',
        'city'=>'Cuernavaca',
        'numExt'=>'125',
        'numInt'=>'',
        'PostalCode'=>'62500',
        'reference'=>'Portón verde',
        'country'=>'México',
      ]);

      DB::table('addresses')->insert([
        'street'=>'olivos',
        'colony'=>'manzanos',
        'state'=>'Jalisco',
        'city'=>'Guadalajara',
        'numExt'=>'748',
        'numInt'=>'',
        'PostalCode'=>'62680',
        'reference'=>'Tienda de manualidades',
        'country'=>'México',
      ]);

      DB::table('addresses')->insert([
        'street'=>'palma',
        'colony'=>'capiri',
        'state'=>'Nuevo León',
        'city'=>'Monterrey',
        'numExt'=>'657',
        'numInt'=>'',
        'PostalCode'=>'46938',
        'reference'=>'Edificio de cristal',
        'country'=>'México',
      ]);
    }
}
