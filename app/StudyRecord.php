<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyRecord extends Model
{
    public $timestamps = false;

    protected $casts = [
        'time' => 'integer'
    ];

    public function record(): BelongsTo
    {
        return $this->belongsTo('App\Record');
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo('App\Item');
    }

}
