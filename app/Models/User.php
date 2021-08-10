<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model
{
    protected $table = 'user';
    
    protected $fillable = [
        'name', 'email','age','sex','address_id'
    ];

}
