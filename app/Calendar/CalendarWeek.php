<?php
namespace App\Calendar;

use Carbon\Carbon;

class calendarWeek
{
    protected $carbon;
    protected $index = 0;

    function __construct($date, $index = 0)
    {
        $this->carbon = new Carbon($date);
        $this->index = $index;
    }

    function getClassName()
    {
        return "week-" . $this->index;
    }

    function getDays()
    {
        $days = [];

        $startDay = $this->carbon->copy()->startOfWeek();
        $lastDay = $this->carbon->copy()->endOfWeek();

        $tmpDay = $startDay->copy();

        while($tmpDay->lte($lastDay))
        {
            //前の月か後ろの月の場合は空白を表示する
            if($tmpDay->month != $this->carbon->month)
            {
                $day = new CalendarWeekBlankDay($tmpDay->copy());
                $days[] = $day;
                $tmpDay->addDay(1);
                continue;
            }
            $day = new CalendarWeekDay($tmpDay->copy());
            $days[] = $day;

            $tmpDay->addDay(1);
        }
        return $days;
    }
}
