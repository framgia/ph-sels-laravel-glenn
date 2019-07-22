<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_Session extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'last_answered', 'is_finished'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function activity()
    {
        return $this->morphOne('App\Activity', 'activity');
    }
}
