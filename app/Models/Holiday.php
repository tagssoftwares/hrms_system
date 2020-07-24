<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holiday extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'holiday';
    protected $fillable=['holiday_name','holiday_date'];
    
    /**
    * The attributes that aren't mass assignable.
    *
    * @var array
    */
    protected $guarded = [];
}
