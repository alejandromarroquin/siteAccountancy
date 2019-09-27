<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodpoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodpolicies', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idAccountancyCatalog')->unsigned();
          $table->foreign('idAccountancyCatalog')->references('id')->on('accountancycatalogs')->onDelete('cascade');

          $table->string('account',6);
          $table->string('subaccount',2);
          $table->string('name',60);
          $table->double('partial',10,2);
          $table->double('debit',10,2);
          $table->double('have',10,2);

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
        Schema::dropIfExists('periodpolicies');
    }
}
