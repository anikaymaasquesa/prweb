<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->increments('idPlan');
            $table->string("namePlan");
            $table->float('pricePlan', 8, 2);
            $table->string("dateInitPlan");
            $table->string("dateEndPlan");
            $table->integer("statusPlan")->comment("1 Activado, 0 Desactivado");
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
        Schema::dropIfExists('plan');
    }
}
