<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idTaxInformation')->unsigned();
          $table->foreign('idTaxInformation')->references('id')->on('taxinformations')->onDelete('cascade');

          $table->integer('idGeneralInformation')->unsigned();
          $table->foreign('idGeneralInformation')->references('id')->on('contactlocations')->onDelete('cascade');

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
        Schema::dropIfExists('companies');
    }
}
