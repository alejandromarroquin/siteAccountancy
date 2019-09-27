<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxinformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxinformations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('idGeneralInformation')->unsigned();
            $table->foreign('idGeneralInformation')->references('id')->on('generalinformations')->onDelete('cascade');

            $table->integer('idEmails')->unsigned();
            $table->foreign('idEmails')->references('id')->on('emails')->onDelete('cascade');

            $table->string('rfc',13);
            $table->string('businessname',80);
            $table->string('taxRegime',60);

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
        Schema::dropIfExists('taxinformations');
    }
}
