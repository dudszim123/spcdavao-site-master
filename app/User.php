<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
// passport
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    // passport
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'number',
        'type',
        'activeUser',
        'image',
        'firstName',
        'lastName',
        'middleName',
        'extensionName',
        'gender',
        'civilStatus',
        'contacts',
        'address',
        'RFID',
        'height',
        'wieght',
        'religion',
        'nationality',
        'dualCitizenship',
        'tribe',
        'bloodType'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getActiveUserAttribute($value)
    {
        if($value == '1')
            return 'Active';
        else
            return 'In-active';
    }
}
