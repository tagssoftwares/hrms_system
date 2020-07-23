<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goaltype extends Model
{
    protected $table='goal_type';
    protected $fillable=[
        'goal_type','goal_discription'
    ];
}
