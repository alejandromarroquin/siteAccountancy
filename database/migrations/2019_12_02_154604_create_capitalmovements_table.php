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

          $table->integer('idcredit')->unsigned();
          $table->foreign('idcredit')->references('id')->on('credits')->onDelete('cascade');

          $table->integer('iddebit')->unsigned();
          $table->foreign('iddebit')->references('id')->on('debits')->onDelete('cascade');

          $table->string('concept');

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
