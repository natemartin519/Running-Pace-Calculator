<?php namespace App\Http\Controllers;

use App\ImperialPace;
use App\MetricPace;
use App\Models\Hours;
use App\Models\Kilometres;
use App\Models\Miles;
use App\Models\Minutes;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    public function MinutesMile(Request $request)
    {
        $distance = new Kilometres($request->input('distance'));
        $time = new Minutes($request->input('time'));
        $pace = new ImperialPace($distance, $time);

        echo $time->minutes() . ' Min/Km is ' . round($pace->minutesMile(), 2) . ' Min/Mile';
    }

    public function MinutesKilometre(Request $request)
    {
        $distance = new Miles($request->input('distance'));
        $time = new Minutes($request->input('time'));
        $pace = new MetricPace($distance, $time);

        echo $time->minutes() . ' Min/Mile is ' . round($pace->minutesKilometre(), 2) . ' Min/Km';
    }

    public function MilesHour(Request $request)
    {
        $distance = new Kilometres($request->input('distance'));
        $time = new Hours($request->input('time'));
        $pace = new ImperialPace($distance, $time);

        echo $distance->kilometres() . ' Km/Hour is ' . round($pace->milesHour(), 2) . ' Miles/Hour';
    }

    public function KilometresHour(Request $request)
    {
        $distance = new Miles($request->input('distance'));
        $time = new Hours($request->input('time'));
        $pace = new MetricPace($distance, $time);

        echo $distance->miles() . ' Miles/Hour is ' . round($pace->kilometresHour(), 2) . ' Km/Hour';
    }
}
