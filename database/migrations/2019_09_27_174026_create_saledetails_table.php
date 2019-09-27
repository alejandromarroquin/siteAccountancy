<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaledetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saledetails', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idSale')->unsigned();
          $table->foreign('idSale')->references('id')->on('sales')->onDelete('cascade');

          $table->integer('idProduct')->unsigned();
          $table->foreign('idProduct')->references('id')->on('products')->onDelete('cascade');

          $table->integer('unitMeasurement')->unsigned();
          $table->foreign('unitMeasurement')->references('id')->on('unitmeasurements')->onDelete('cascade');

          $table->integer('quantity');
          $table->string('description',100);
          $table->double('unitValue',10,2);
          $table->double('total',10,2);
          $table->double('discountProducts',10,2);

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
        Schema::dropIfExists('saledetails');
    }
}
