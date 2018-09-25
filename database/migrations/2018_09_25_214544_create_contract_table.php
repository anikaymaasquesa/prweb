<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->increments('idContract');
            $table->integer("idPlan")->comment("hace referencia a la tabla Plan en la llave primaria");
            $table->integer("idAccessAccount")->comment("hace referencia a la tabla AccessAccount en la llave primaria");
            $table->integer("idPaymentMethod")->comment("hace referebcia a la tabla PaymentMethod en la llave primaria");
            $table->string("dateInitContract");
            $table->string("dateFinishContract");
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
        Schema::dropIfExists('contract');
    }
}
