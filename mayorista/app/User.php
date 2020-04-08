<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'Users';
    // protected $primarykey = id_user;
    public $timestamps = false;
    // public $guarded = [];
    /**
     * The attributes that are mass assignable.

     *
     * @var array
     */
    protected $fillable = [
      'name','email', 'password'
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

    public function kind(){
      // return $this->belongTo('App\Tipo','id_kind');
      return $this->belongTo(kinduser::class);
    }

    



}
