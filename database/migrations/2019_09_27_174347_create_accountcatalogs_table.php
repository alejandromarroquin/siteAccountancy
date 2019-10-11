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
<<<<<<< HEAD:database/migrations/2019_09_27_174347_create_accountcatalogs_table.php
          $table->increments('id');
          $table->string('gruperCode',6);
          $table->integer('level');
          $table->string('accountName',100);
=======
            $table->increments('id');

            $table->integer('idgrouperaccount')->unsigned();
            $table->foreign('idgrouperaccount')->references('groupcode')->on('accounts')->onDelete('cascade');

            $table->integer('level')->nullable();
            $table->string('code',6);
            $table->string('accountName',250);
>>>>>>> seeds:database/migrations/2019_09_12_182003_create_accountcatalogs_table.php

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
