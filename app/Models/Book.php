<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    
    protected $fillable = [
        'name',
        'email',
        'phonenumber',
        'roomtype',
        'guest',
        'request',
        'checkin',
        'checkout',
        'status'
    ];
}
