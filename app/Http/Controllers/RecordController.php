<?php

namespace App\Http\Controllers;

use App\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all()->sortByDesc('created_at');

        return view('index',['records' => $records]);
    }
}
