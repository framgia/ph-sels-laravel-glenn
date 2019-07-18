<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    protected $fillable = [
        'word_id', 'content', 'is_correct'
    ];

    public function word()
    {
        return $this->belongsTo('App\Word');
    }

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }
}
