<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountcatalogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountcatalogs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idgrouperaccount')->unsigned();
            $table->foreign('idgrouperaccount')->references('groupcode')->on('accounts')->onDelete('cascade');

            $table->integer('level')->nullable();
            $table->string('code',6);
            $table->string('accountName',250);

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
        Schema::dropIfExists('accountcatalogs');
    }
}
