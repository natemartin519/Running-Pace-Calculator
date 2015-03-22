<?php namespace App;

use App\Interfaces\MilesDistanceInterface;
use App\Interfaces\TimeInterface;

class ImperialPace {

    protected $distance;
    protected $time;

    function __construct(MilesDistanceInterface $distance, TimeInterface $time)
    {
        $this->time = $time;
        $this->distance = $distance;
    }

    public function minutesMile()
    {
        return round(($this->time->minutes() / $this->distance->miles()), 4);
    }

    public function milesHour()
    {
        return round($this->distance->miles() / $this->time->hours(), 4);
    }
}
