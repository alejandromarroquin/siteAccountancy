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

<<<<<<< HEAD:database/migrations/2019_09_27_173656_create_taxinformations_table.php
          $table->integer('idGeneralInformation')->unsigned();
          $table->foreign('idGeneralInformation')->references('id')->on('generalinformations')->onDelete('cascade');

          $table->integer('idEmails')->unsigned();
          $table->foreign('idEmails')->references('id')->on('emails')->onDelete('cascade');

          $table->string('rfc',13);
          $table->string('businessname',80);
          $table->string('taxRegime',60);
=======
            $table->integer('idtaxinformation')->unsigned();
            $table->foreign('idtaxinformation')->references('id')->on('contactlocations')->onDelete('cascade');

            $table->string('rfc',13);
            $table->string('businessname',250);
            $table->string('taxRegime',6);
>>>>>>> seeds:database/migrations/2019_09_12_180415_create_taxinformations_table.php

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
