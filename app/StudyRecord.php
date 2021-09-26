<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyRecord extends Model
{
    public function studyrecord():BelongsTo
    {
        return $this->belongsTo('App\StudyRecord');
    }
}
