<?php namespace App\Models;

use App\Interfaces\KilometresDistanceInterface;
use App\Interfaces\TimeInterface;

class MetricPace {

    protected $time;
    protected $distance;

    function __construct(KilometresDistanceInterface $distance, TimeInterface $time)
    {
        $this->time = $time;
        $this->distance = $distance;
    }

    public function minutesKilometre()
    {
        return round(($this->time->minutes() / $this->distance->kilometres()), 4);
    }

    public function kilometreHour()
    {
        return round($this->distance->kilometres() / $this->time->hours(), 4);//9.6560);
    }
}