<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class resignation extends Model
{
    protected $table='resignation';
    protected $fillable=[
        'employees_id','notice_date','resignation_date','reason'
    ];
}
