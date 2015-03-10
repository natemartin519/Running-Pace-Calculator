<?php namespace App;

class Calculator {

    const SECONDS_IN_MINUTE = 60;

    public function ConvertMinutesToSeconds($minutes)
    {
        return $minutes * self::SECONDS_IN_MINUTE;
    }

    public function ConvertSecondsToMinutes($seconds)
    {
        return $seconds / self::SECONDS_IN_MINUTE;
    }
}
