<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description',
    ];

    public function words()
    {
        return $this->hasMany('App\Word');
    }

    public function choices()
    {
        return $this->hasManyThrough('App\Choice', 'App\Word');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

    public function sessions()
    {
        return $this->hasMany('App\Session');
    }

    public function category_sessions()
    {
        return $this->hasMany('App\Category_Session');
    }
}
