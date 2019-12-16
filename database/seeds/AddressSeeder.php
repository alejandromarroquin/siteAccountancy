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
        'street'=>'Autopista del Sol',
        'colony'=>'Real del Puente',
        'state'=>'Morelos',
        'city'=>'Xochitepec',
        'numExt'=>'KM 104',
        'numInt'=>'',
        'PostalCode'=>'62790',
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
        'country'=>'México',
      ]);
    }
}
