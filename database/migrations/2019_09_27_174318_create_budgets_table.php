<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('budgets', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idAccountancy')->unsigned();
          $table->foreign('idAccountancy')->references('id')->on('accountancies')->onDelete('cascade');
          $table->string('typebudget',1);
          $table->date('start');
          $table->date('end');
          $table->double('amount',10,2);

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('budgets');
    }
}
