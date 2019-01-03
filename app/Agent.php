<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'agent';


    protected $fillable = [
        'user_id',
        'deductor_name',
        'institute_name',
        'tan',
        'mobile_number',
        'alternate_mobile_number',
        'email',
        'flat',
        'building',
        'street',
        'area',
        'city',
        'state',
        'pincode'
    ];

    public function user() {
        return $this->hasOne('App\User','user_id','id');
    }   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    public $timestamps = true;

    
}