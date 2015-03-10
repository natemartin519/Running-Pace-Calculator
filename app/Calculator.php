<?php namespace App;

class Calculator {

    const KILOMETRE_IN_MILE = 1.60934;
    const MILE_IN_KILOMETRE = 0.62137;
    const SECONDS_IN_MINUTE = 60;

    public function ConvertMileToKilometre($miles)
    {
        return $miles * self::KILOMETRE_IN_MILE;
    }

    public function ConvertKilometreToMile($kilometres)
    {
        return $kilometres * self::MILE_IN_KILOMETRE;
    }

    public function ConvertMinutesToSeconds($minutes)
    {
        return $minutes * self::SECONDS_IN_MINUTE;
    }

    public function ConvertSecondsToMinutes($seconds)
    {
        return $seconds / self::SECONDS_IN_MINUTE;
    }
}
