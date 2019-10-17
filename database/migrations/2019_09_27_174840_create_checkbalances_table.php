<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckbalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checkbalances', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idAccountancyCatalog')->unsigned();
          $table->foreign('idAccountancyCatalog')->references('id')->on('accountancycatalogs')->onDelete('cascade');

          $table->double('beginningBalance',10,2);
          $table->double('charge',10,2);
          $table->double('payment',10,2);
          $table->double('finalBalance',10,2);
          
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
        Schema::dropIfExists('checkbalances');
    }
}
