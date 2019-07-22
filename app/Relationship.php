<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $fillable = [
        'follower_id', 'followed_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'follower_id');
    }

    public function following()
    {
        return $this->belongsTo('App\User', 'followed_id');
    }

    public function activities()
    {
        return $this->morphMany('App\Activity', 'activatable');
    }
}
