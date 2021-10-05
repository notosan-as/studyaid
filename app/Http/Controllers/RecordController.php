<?php

namespace App\Http\Controllers;

use App\Record;
use App\Item;
use App\StudyRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function index()
    {
        $auth = Auth::id();
        $items = Item::where('user_id',$auth)->orderBy('id')->get();
        return view('study.today_study_add',['items' => $items]);
    }

    public function create()
    {
        //作成
    }

    public function store(Request $request,$id)
    {
        //新規登録

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
