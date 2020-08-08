<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table='client';

    protected $fillable=['first_name','last_name','Username','email','password','confirm_password','clientID','phone_number','company_name'];
}
