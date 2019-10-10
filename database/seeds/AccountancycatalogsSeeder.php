<?php

use Illuminate\Database\Seeder;

class AccountancycatalogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('accountancycatalogs')->insert([
        'idAccountancy'=>'1',
        'CodeAccount'=>'1'
      ]);

      DB::table('accountancycatalogs')->insert([
        'idAccountancy'=>'1',
        'CodeAccount'=>'3'
      ]);
    }
}
