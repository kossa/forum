<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
