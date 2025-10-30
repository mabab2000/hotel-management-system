<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

//use Illuminate\Database\Eloquent\Model;

class Register extends Authenticatable
{
    //specify the table if it's not the plural form of the model name
    protected $table='register';

    //specify the fillable fields to allow mass assignment
    protected $fillable = [
        'name', 
        'email', 
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
