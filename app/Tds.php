<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tds extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'submit_tds';


    protected $fillable = [
        'user_id',
        'quarter',
        'entries',
        'filing_type',
        'mobile_number',
        'file_name',
        'comments'
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