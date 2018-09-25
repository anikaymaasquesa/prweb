<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentmethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentmethods', function (Blueprint $table) {
            $table->increments('idPaymentMethod');
            $table->integer("idPaymentCard")->comment("hace referencia a la tabla de PaymentCard en la llave primaria");
            $table->integer("idPaymentPaypals")->comment("hace referencia en la tabla PaymentPaypals en la llave primaria");
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
        Schema::dropIfExists('paymentmethods');
    }
}
