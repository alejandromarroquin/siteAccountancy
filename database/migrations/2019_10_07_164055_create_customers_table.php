<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idCompany')->unsigned();
            $table->foreign('idCompany')->references('id')->on('companies')->onDelete('cascade');

            $table->integer('idTaxInformation')->unsigned();
            $table->foreign('idTaxInformation')->references('id')->on('taxinformations')->onDelete('cascade');

            $table->double('maxDebt',10,2);
            $table->double('actualDebt',10,2);
            $table->string('notes',100);

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
        Schema::dropIfExists('customers');
    }
}
