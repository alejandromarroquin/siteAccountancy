<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCapitalmovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitalmovements', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idAccountancyCatalog')->unsigned();
          $table->foreign('idAccountancyCatalog')->references('id')->on('accountancycatalogs')->onDelete('cascade');

          $table->string('concept');
          $table->double('amount',10,2);
          $table->string('type',1);

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
        Schema::dropIfExists('capitalmovements');
    }
}
