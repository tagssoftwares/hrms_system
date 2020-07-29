<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goallist extends Model
{
    protected $table='goallist';
    protected $fillable = ['goals_type_id','subject','target_acheivement','start_date','end_date','discription'];
    protected $guarded = ['id'];
}


