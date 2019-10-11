<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idTaxinformation')->unsigned();
            $table->foreign('idTaxinformation')->references('id')->on('taxinformations')->onDelete('cascade');

            $table->integer('idCompany')->unsigned();
            $table->foreign('idCompany')->references('id')->on('companies')->onDelete('cascade');

            $table->double('debt',10,2);
            $table->double('maxDebt',10,2);

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
        Schema::dropIfExists('providers');
    }
}
