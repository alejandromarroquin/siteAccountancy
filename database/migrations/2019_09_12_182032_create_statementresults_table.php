<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatementresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statementresults', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idAccountancyCatalog')->unsigned();
            $table->foreign('idAccountancyCatalog')->references('id')->on('accountancycatalogs')->onDelete('cascade');

            $table->date('date');
            $table->double('amount',10,2);
            $table->double('porcent');

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
        Schema::dropIfExists('statementresults');
    }
}
