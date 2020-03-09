<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashflowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashflows', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('idaccountancydebtor')->unsigned();
            // $table->foreign('idaccountancydebtor')->references('id')->on('accountancycatalogs')->onDelete('cascade');
            //
            // $table->integer('idaccountancycreditor')->unsigned();
            // $table->foreign('idaccountancycreditor')->references('id')->on('accountancycatalogs')->onDelete('cascade');

            $table->integer('idsubaccountdeb')->unsigned()->nullable();
            $table->foreign('idsubaccountdeb')->references('id')->on('subaccounts')->onDelete('cascade');

            $table->integer('idsubaccountcred')->unsigned()->nullable();
            $table->foreign('idsubaccountcred')->references('id')->on('subaccounts')->onDelete('cascade');

            $table->integer('type');//1=deudor 2=acreedor
            $table->string('activity');
            $table->string('concept');
            $table->double('amount');

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
        Schema::dropIfExists('cashflow');
    }
}
