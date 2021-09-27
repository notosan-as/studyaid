<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = ['item','use_id'];
    protected $dates = [];
    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
