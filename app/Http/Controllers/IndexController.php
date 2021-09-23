<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar\CalendarView;

class IndexController extends Controller
{
    public function index()
    {
        $calendar = new CalendarView(time());

        return view('home',[
            "calendar" => $calendar
        ]);

    }
}
