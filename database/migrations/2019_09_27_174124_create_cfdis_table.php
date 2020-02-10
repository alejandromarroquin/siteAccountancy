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

          $table->string('idMethodPayment',3);
          $table->foreign('idMethodPayment')->references('code')->on('methodpayments')->onDelete('cascade');

          $table->integer('idwaypay')->unsigned();
          $table->foreign('idwaypay')->references('id')->on('waytopays')->onDelete('cascade');

          $table->integer('numcfdi');
          $table->string('customer');
          $table->string('currency',3);
          $table->string('condicspay');
          $table->double('subtotal',10,2);
          $table->double('iva',10,2);
          $table->double('total',10,2);

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
        Schema::dropIfExists('cfdis');
    }
}
