<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LocalUser extends Model
{
    protected $fillable = [
        'name',
        'avatar',
        'pin'
    ];

    protected $hidden = [
        'password'
    ];

}
