<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Employee extends Model
{
     use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'employees';

    protected $fillable = [
        'user_id', 'employeeID', 'first_name','middel_name','last_name', 'email', 'mobile_number', 'gender', 'date_of_birth', 'joining_date','local_address','permanent_address','profile_image','status','department','designation',
    ];

    /*protected $dates = [
    'joining_date',
	];*/

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    

    /**
     * The attributes that should be cast to native types.
     *
     * @var array

     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
