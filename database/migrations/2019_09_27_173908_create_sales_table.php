<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
          $table->increments('id');

          // $table->integer('idAddress')->unsigned();
          // $table->foreign('idAddress')->references('id')->on('addresses')->onDelete('cascade');
          //
          // $table->integer('idCompany')->unsigned();
          // $table->foreign('idCompany')->references('id')->on('companies')->onDelete('cascade');
          //
          // $table->string('folio',191);
          // $table->date('date');
          // $table->integer('type');
          // $table->integer('status');
          // $table->double('totalAccount',10,2);
          // $table->integer('free');

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
        Schema::dropIfExists('sales');
    }
}
