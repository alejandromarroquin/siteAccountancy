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
        'CodeAccount'=>'1',
        'debtor'=>'12980.00',
        'creditor'=>'12883.00'
      ]);

      DB::table('accountancycatalogs')->insert([
        'idAccountancy'=>'1',
        'CodeAccount'=>'3',
        'debtor'=>'256987.00',
        'creditor'=>'26773.88'
      ]);
    }
}
