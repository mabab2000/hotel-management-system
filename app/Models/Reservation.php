<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //specify the table if it's not the plural form of the model name 
    protected $table='reservation';

    //specify the fillable fields to allow mass assignment
    protected $fillable = [
        
        'name',
        'email',
        'phonenumber',
        'roomtype',
        'guest',
        'request',
        'checkin',
        'checkout',
    ];
}
