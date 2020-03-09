<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubaccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subaccounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idaccount')->unsigned();
            $table->foreign('idaccount')->references('id')->on('accountancycatalogs')->onDelete('cascade');
            $table->string('idsubaccount');
            $table->string('namesubaccount');
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
        Schema::dropIfExists('subaccounts');
    }
}
