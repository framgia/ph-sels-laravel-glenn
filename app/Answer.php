<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'word_id', 'choice_id', 'is_correct'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function word()
    {
        return $this->belongsTo('App\Word');
    }

    public function choice()
    {
        return $this->belongsTo('App\Choice');
    }
}
