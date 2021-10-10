<?php

namespace App\Http\Controllers;

use App\Record;
use App\Item;
use App\StudyRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    //今日の学習内容の投稿画面
    public function index()
    {
        $auth = Auth::id();
        $items = Item::where('user_id',$auth)->orderBy('id')->get();
        return view('study.today_study_add',['items' => $items]);
    }

    public function create()
    {
        //Recodeへの登録
        //itemへの登録
    }

    //今日の学習内容の登録処理
    public function store(Request $request)
    {

        $record = new Record;
        $record->memo = $request->memo;
        $record->user_id = $request->user()->id;
        $record->save();
        $record_id  = $record->id;

        $itemid = $request->get('itemid');
        $times = $request->get('time');

        $studies = array_combine($itemid,$times);

        foreach($studies as $key => $study)
        {
            $studyrecords = new StudyRecord;
            $studyrecords->record_id = $record_id;
            $studyrecords->item_id = $key;
            $studyrecords->time = $study;
            $studyrecords->save();
        }

        $studyrecords = StudyRecord::where('record_id',$record_id)->orderBy('record_id')->get();

        return view('study.today_study_show',['studyrecords' => $studyrecords]);

    }

    public function show()
    {
        //詳細
    }

    public function edit()
    {
        //編集
    }

    public function update()
    {
        //編集
    }

    public function destroy()
    {
        //削除

    }
}
