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
        'concept'=>'Presupuesto general',
        'amount'=>'1000000.00'
      ]);

      DB::table('budgets')->insert([
        'idAccountancy'=>'1',
        'concept'=>'Presupuesto de refacciones',
        'amount'=>'1000000.00'
      ]);

    }
}
