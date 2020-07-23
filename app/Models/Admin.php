<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Dialect\Gdpr\EncryptsAttributes;
use Dialect\Gdpr\Portable;
use Illuminate\Auth\UserTrait;
use BaseModel;
use Illuminate\Auth\Reminders\RemindableTrait;
//use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
//use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Builder;

class Admin extends Model implements Authenticatable, CanResetPasswordContract
{
    use  AuthenticableTrait, CanResetPassword;


    protected $guard = 'admin';

    protected $hidden = ['password', 'remember_token'];
    protected $fillable = ['name', 'email', 'password', 'company_id', 'user_type',
        'accepted_gdpr',
        'isAnonymized'];

    public function checkEmailVerified()
    {
        if ($this->email_verified == 'yes') {
            return true;
        }
        return false;

    }
    //
}
