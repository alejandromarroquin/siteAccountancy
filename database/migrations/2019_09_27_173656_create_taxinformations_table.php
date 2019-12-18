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

            $table->integer('idtaxinformation')->unsigned();
            $table->foreign('idtaxinformation')->references('id')->on('contactlocations')->onDelete('cascade');

            $table->string('rfc',13)->unique();
            $table->string('businessname',250);
            $table->string('taxRegime',6);

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
