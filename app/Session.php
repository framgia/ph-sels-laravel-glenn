<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'last_answered', 'is_finished'
    ];

    protected $table = 'sessions';

    public function activities()
    {
        return $this->morphMany('App\Activity', 'activatable');
    }
}
