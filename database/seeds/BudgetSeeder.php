<?php

use Illuminate\Database\Seeder;

class BudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('budgets')->insert([
        'idAccountancy'=>'1',
        'typebudget'=>'2',
        'start'=>'2019-12-17',
        'end'=>'2019-01-29',
        'amount'=>'1000000.00'
      ]);

      DB::table('budgets')->insert([
        'idAccountancy'=>'1',
        'typebudget'=>'1',
        'start'=>'2019-12-17',
        'end'=>'2019-01-29',
        'amount'=>'1000000.00'
      ]);

    }
}
