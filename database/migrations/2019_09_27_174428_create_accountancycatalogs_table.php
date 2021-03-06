<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountancycatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountancycatalogs', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idAccountancy')->unsigned();
          $table->foreign('idAccountancy')->references('id')->on('accountancies')->onDelete('cascade');

          $table->integer('CodeAccount')->unsigned();
          $table->foreign('CodeAccount')->references('id')->on('accountcatalogs')->onDelete('cascade');

          $table->double('debtor',10,2);
          $table->double('creditor',10,2);
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
        Schema::dropIfExists('accountancycatalogs');
    }
}
