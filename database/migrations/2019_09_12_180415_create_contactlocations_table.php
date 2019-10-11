<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactlocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactlocations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idaddress')->unsigned();
            $table->foreign('idaddress')->references('id')->on('addresses')->onDelete('cascade');

            $table->integer('idphone')->unsigned();
            $table->foreign('idphone')->references('id')->on('phones')->onDelete('cascade');

            $table->integer('idemail')->unsigned();
            $table->foreign('idemail')->references('id')->on('emails')->onDelete('cascade');

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
        Schema::dropIfExists('contactlocations');
    }
}
