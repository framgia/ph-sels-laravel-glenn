<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password', 'is_admin'
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


    public function followers()
    {
        return $this->hasMany('App\Relationship', 'followed_id');
    }

    public function followings()
    {
        return $this->hasMany('App\Relationship', 'follower_id');
    }

    public function activities()
    {
        return $this->hasMany('App\Activity');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function category_sessions()
    {
        return $this->hasMany('App\Category_Session');
    }
}
