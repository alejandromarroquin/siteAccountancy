<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaserequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaserequests', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idAccountancy')->unsigned();
            $table->foreign('idAccountancy')->references('id')->on('accountancies')->onDelete('cascade');

            $table->integer('idPersonCheck')->unsigned()->nullable();
            $table->foreign('idPersonCheck')->references('id')->on('personalinformations')->onDelete('cascade');

            $table->date('date');
            $table->string('concept',100);
            $table->integer('quantity');
            $table->double('subtotal',10,2);
            $table->double('iva',10,2);
            $table->double('total',10,2);
            $table->integer('status');

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
        Schema::dropIfExists('purchaserequests');
    }
}
