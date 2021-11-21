<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use Illuminate\Support\Facades\Auth;
use App\Record;
use App\StudyRecord;
use Carbon\Carbon;

class IndexController extends Controller
{
    //indexページの表示
    public function toppage()
    {
        return view('index');
    }

    //home画面の表示
    public function index(Request $request)
    {
        $date = $request->input('date');

        if($date && preg_match("/^[0-9]{4}-[0-9]{2}$/", $date))
        {
            $date = $date . "-01";
        }else{
            $date = null;
        }

        if(!$date)$date = time();
        $calendar = new CalendarView($date);

        $dt = Carbon::now();
        $user = Auth::user();

        if(empty($user)){
            session()->flash('flash_message', 'セッションの有効期限が切れました、再度ログインしてください。');
            return redirect('/login');
        }

        $user_id = $user->id;

        $records = Record::all();
        $records = $records->where('user_id',$user_id);
        $studyrecords = StudyRecord::all();

        $time = 0;
        $totaltime = 0;
        $totalmonthtime = 0;

        //トータル学習時間の計算
        foreach( $studyrecords as $studyrecord )
        {
            $studyid = $studyrecord->record_id;

            if($records->find($studyid))
            {
                $time = $studyrecord->time;
                $totaltime = $totaltime + $time;

                $createrecord = Record::find($studyid);
                $createrecord = $createrecord->created_at;
                $createrecord = date('m', strtotime($createrecord));

                if($createrecord == $dt->month)
                {
                    $totalmonthtime = $totalmonthtime + $time;
                }
            }
        }
        return view('home',compact('calendar','user','totaltime','totalmonthtime'));
    }


}
