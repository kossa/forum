<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $fillable = ['question_id', 'body'];
    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
