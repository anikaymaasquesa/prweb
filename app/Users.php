<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        "idSocialNetwork", "idTypeUser", "idAccountAccess", "idCountry", "idState", "nameUser", "lastNameUsuario", "emailUser", "ageUser", "dateOfBirthUser"
    ];

}
