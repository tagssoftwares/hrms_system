<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Termination extends Model
{
    protected $table='termination';
    protected $fillable=['employees_id','termination_type','termination_date','reason','notice_date'];
}
