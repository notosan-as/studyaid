<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;
use Illuminate\Support\Facades\Auth;

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
        return view('home',compact('calendar','user'));

    }
}
