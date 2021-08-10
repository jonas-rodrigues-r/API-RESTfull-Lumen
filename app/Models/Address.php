<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = [
        'street', 'number','city','cep','district'
    ];
}
