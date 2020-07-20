<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    protected $table = 'users_roles';

    protected $fillable = [
        'role_id','user_id',
    ];

    protected $guarded = [];
}
