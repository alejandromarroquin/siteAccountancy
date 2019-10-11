<?php

use Illuminate\Database\Seeder;

class PersonalinformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('personalinformations')->insert([
        'idUser'=>'1',
        'name'=>'Alejandro',
        'lastname'=>'Marroquin',
        'motherssurname'=>'Cruz'
      ]);

      DB::table('personalinformations')->insert([
        'idUser'=>'2',
        'name'=>'Rubí',
        'lastname'=>'Luna',
        'motherssurname'=>'Mendoza'
      ]);

      DB::table('personalinformations')->insert([
        'idUser'=>'3',
        'name'=>'Viridiana',
        'lastname'=>'Herrera',
        'motherssurname'=>'Ramírez'
      ]);
    }
}
