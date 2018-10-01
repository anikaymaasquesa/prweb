<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('idUser');
            $table->integer("idSocialNetwork")->comment('hace referencia a la tabla de SocialNetwork en la llave primaria');
            $table->integer("idTypeUser")->comment('hace referencia a la tabla de TypeUser en la llave primaria');
            $table->integer("idAccountAccess")->comment('Hace referencia a la tabla AccountAccess en la llave primaria');
            $table->integer("idCountry")->comment('Hace referencia a la tabla Country en la llave primaria');
            $table->integer("idState")->comment('Hace referencia a la tabla State en la llave primaria');
            $table->string('nameUser');
            $table->string('lastNameUsuario');
            $table->string('emailUser')->unique();
            $table->string('ageUser');
            $table->string('dateOfBirthUser');            
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
        Schema::dropIfExists('users');
    }
}
