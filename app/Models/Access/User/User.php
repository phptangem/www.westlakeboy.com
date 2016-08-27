<?php

namespace App\Models\Access\User;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $guarded      = ['id'];
    protected $hidden       = ['password', 'remember_token'];
    protected $dates        = ['deleted_at'];
}
