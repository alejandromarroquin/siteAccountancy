<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCfdisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdis', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('idCompany')->unsigned();
          $table->foreign('idCompany')->references('id')->on('companies')->onDelete('cascade');

          $table->integer('idMethodPayment')->unsigned();
          $table->foreign('idMethodPayment')->references('id')->on('methodpayments')->onDelete('cascade');

          $table->integer('unitMeasurement')->unsigned();
          $table->foreign('unitMeasurement')->references('id')->on('unitmeasurements')->onDelete('cascade');

          $table->integer('expeditionPlace')->unsigned();
          $table->foreign('expeditionPlace')->references('id')->on('addresses')->onDelete('cascade');

          $table->integer('cfdinumber')->unique();
          $table->date('expeditionDate');
          $table->double('iva',10,2);
          $table->integer('typePayment');
          $table->string('customsNumber',10);
          $table->date('customsDate');
          $table->string('digitalStamp',200);
          $table->string('codeqr',100);

          $table->timestamps();
        });
        DB::statement("ALTER TABLE  `cfdis` AUTO_INCREMENT = 1;");
        DB::statement("ALTER TABLE  `cfdis` CHANGE  `cfdinumber`  `cfdinumber` INT( 8 ) UNSIGNED ZEROFILL NOT NULL DEFAULT '1';");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cfdis');
    }
}
