<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitmeasurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unitmeasurements', function (Blueprint $table) {
<<<<<<< HEAD:database/migrations/2019_09_27_174004_create_unitmeasurements_table.php
          $table->increments('id');
          $table->string('code',3);
          $table->string('description',45);

          $table->timestamps();
=======
            $table->increments('id');
            $table->string('code',3);
            $table->string('description',45);
>>>>>>> seeds:database/migrations/2019_09_12_180942_create_unitmeasurements_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unitmeasurements');
    }
}
