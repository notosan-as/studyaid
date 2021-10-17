<?php

namespace App\Calendar;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Record;
use App\StudyRecord;

class CalendarWeekDay
{
    protected $carbon;

    function __construct($date)
    {
        $this->carbon = new Carbon($date);
    }

    function getClassName()
    {
        return "day-" . strtolower($this->carbon->format("D"));
    }

    function render()
    {
        $time = 0;
        $today_time = 0;
        $today = $this->carbon->format("Y-m-d");
        // $today = '2021-10-16';

        $user = Auth::user();
        $user_id = $user->id;

        $records = Record::whereDate('created_at', $today)->where('user_id',$user_id)->exists();

        if($records)
        {
            $records = Record::whereDate('created_at', $today)->where('user_id',$user_id)->get();

            foreach($records as $record)
            {
                $id = $record->id;
                $studyrecords = StudyRecord::where('record_id', $id)->get();

                    foreach($studyrecords as $studyrecord)
                    {
                        $time = $studyrecord->time;
                        $today_time = $today_time + $time;
                    }
            }
        }

        return '<p class="day">' . $this->carbon->format("j").
        '</p><p class="day">' . $today_time. '分</p>';
    }
}
