<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policies extends Model
{
    protected $table = 'policies';
    protected $fillable = ['department_id','policy_name','description','upload_policy'];
    protected $guarded =  ['id'];
}