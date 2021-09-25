<?php

namespace App\Http\Controllers;

use App\Record;
use App\Item;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function todayStudyadd()
    {
        $items = Item::all()->sortByDesc('crated_at');
        return view('study.today_study_add',['items' => $items]);
    }
}
