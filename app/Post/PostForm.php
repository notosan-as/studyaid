<?php

namespace App\Post;

use App\StudyRecord;

class PostForm
{
    public function Posttimeget($id)
    {
        $query = StudyRecord::query();
        $query->where('record_id',$id);
        $studies = $query->get();

        return $studies;
    }
}
