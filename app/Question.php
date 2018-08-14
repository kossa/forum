<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $with = ['user'];

    // Relations
    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // attributes
    public function getSinceAttribute()
    {
        return $this->created_at->diffForHumans();
    }

}
