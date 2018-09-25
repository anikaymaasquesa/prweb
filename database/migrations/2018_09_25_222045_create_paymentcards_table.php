<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentcards', function (Blueprint $table) {
            $table->increments('idPaymentCard');
            $table->integer("idBank")->comment("hace referencia a la tabla Bank en la llave primaria");
            $table->integer("idUser")->comment("hace referencia a la tabla Users en la llave primaria");
            $table->string("numberCardPaymentCard");
            $table->string("securityNumberPaymentCard");
            $table->string("expirationDatePaymentCard");
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
        Schema::dropIfExists('paymentcards');
    }
}
