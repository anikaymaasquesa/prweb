<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('idContract');
            $table->integer("idPlan")->comment("hace referencia a la tabla Plan en la llave primaria");
            $table->integer("idAccessAccount")->comment("hace referencia a la tabla AccessAccount en la llave primaria");
            $table->integer("idPaymentMethod")->comment("hace referebcia a la tabla PaymentMethod en la llave primaria");
            $table->string("dateInitContract");
            $table->string("dateFinishContract");
            $table->integer("statusContract")->comment("1 Activado, 2 Desactivado, 3 Gratuito, 4 Pendiente");
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
        Schema::dropIfExists('contracts');
    }
}
