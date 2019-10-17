<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalancesheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balancesheets', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idAccountancyCatalog')->unsigned();
          $table->foreign('idAccountancyCatalog')->references('id')->on('accountancycatalogs')->onDelete('cascade');

          $table->integer('type');
          $table->double('amount',10,2);
          $table->double('totalAssets',10,2);
          $table->double('totalLiabilities',10,2);
          $table->double('totalLiabilitiesEquity',10,2);
          $table->double('sumAssets');

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
        Schema::dropIfExists('balancesheets');
    }
}
