<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idCompany')->unsigned();
          $table->foreign('idCompany')->references('id')->on('companies')->onDelete('cascade');
            $table->string('code');
            $table->string('description');
            $table->double('unitprice');
            $table->double('iva');
            $table->double('discount');

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
        Schema::dropIfExists('products');
    }
}
