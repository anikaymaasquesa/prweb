<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialnetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socialnetwork', function (Blueprint $table) {
            $table->increments('idSocialNetwork')->comment("1 Facebook, 2 Twitter, 3 LinkedIn, 4 Gmail");
            $table->string("nameSocialNetwork")->unique();
            $table->integer("statusSocialNetwork")->comment("1 Activado, 0 Desactivado");
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
        Schema::dropIfExists('socialnetwork');
    }
}
