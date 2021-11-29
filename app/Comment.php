<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'post_id',
        'comment',
    ];

    public function record()
    {
        return $this->belongsTo('App\Record');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
