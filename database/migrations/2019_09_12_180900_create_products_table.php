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

            $table->string('name',191);
            $table->string('barcode',191);
            $table->string('idCode',6);
            $table->string('idCodeExt',191);
            $table->integer('status');
            $table->string('description',45);
            $table->double('sale',10,2);
            $table->integer('stock');
            $table->double('discount',10,2);
            $table->integer('stockMax');
            $table->integer('stockMin');
            $table->string('size',191);
            $table->integer('cantUnit');
            $table->integer('stockTransit');
            $table->integer('reserved');

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
