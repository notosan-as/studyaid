<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use Illuminate\Support\Facades\Auth;
use App\Record;
use App\StudyRecord;

class IndexController extends Controller
{
    public function toppage()
    {
        return view('index');
    }

    public function index()
    {
        $calendar = new CalendarView(time());
        $user = Auth::user();
        $user_id = $user->id;

        $records = Record::all();
        $records = $records->where('user_id',$user_id);
        $studyrecords = StudyRecord::all();

        $totaltime = 0;
        $time = 0;

        //トータル学習時間の計算
        foreach( $studyrecords as $studyrecord )
        {
            $studyid = $studyrecord->record_id;

            if($records->find($studyid))
            {
                $time = $studyrecord->time;
                $totaltime = $totaltime + $time;
            }
        }
        return view('home',compact('calendar','user','totaltime'));
    }


}
