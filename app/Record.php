<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    protected $guarded = array('id');

    public function user():BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
