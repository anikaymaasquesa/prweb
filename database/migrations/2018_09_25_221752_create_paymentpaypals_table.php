<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentpaypalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentpaypals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("idUser")->comment("hace referencia a la tabla de User en la llave primaria");
            $table->string("accountPaymentPaypal");
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
        Schema::dropIfExists('paymentpaypals');
    }
}
