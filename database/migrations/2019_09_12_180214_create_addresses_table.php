<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type',1);
            $table->string('street',30);
            $table->string('colony',30);
            $table->string('state',45);
            $table->string('city',30);
            $table->string('numExt',4);
            $table->string('numInt',3);
            $table->string('postalCode',5);
            $table->string('reference',200);
            $table->string('country',60);
            
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
        Schema::dropIfExists('addresses');
    }
}
