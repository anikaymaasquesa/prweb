<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountaccessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accountaccess', function (Blueprint $table) {
            $table->increments('idAccountAccess');
            $table->string("userAccountAccess");
            $table->string("passwordAccountAccess");
            $table->integer("statusAccountAccess")->comment("1 Activado, 0 Desactivado");
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
        Schema::dropIfExists('accountaccess');
    }
}
