<?php namespace App;

class Calculator {

    const KILOMETER_IN_MILE = 1.60934;
    const MILE_IN_KILOMETER = 0.62137;

    public function ConvertMileToKilometer($miles)
    {
        return $miles * self::KILOMETER_IN_MILE;
    }

    public function ConvertKilometerToMile($kilometers)
    {
        return $kilometers * self::MILE_IN_KILOMETER;
    }

    public function ConvertMinutesToSeconds($minutes)
    {
        return $minutes * 60;
    }

    public function ConvertSecondsToMinutes($seconds)
    {
        return $seconds / 60;
    }
}
