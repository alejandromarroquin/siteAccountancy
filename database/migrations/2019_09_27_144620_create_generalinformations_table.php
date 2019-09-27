<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generalinformations', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idAddress')->unsigned();
          $table->foreign('idAddress')->references('id')->on('addresses')->onDelete('cascade');

          $table->integer('idPhone')->unsigned();
          $table->foreign('idPhone')->references('id')->on('phones')->onDelete('cascade');

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
        Schema::dropIfExists('generalinformations');
    }
}
