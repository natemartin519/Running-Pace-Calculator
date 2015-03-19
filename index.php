<?php

use App\Models\ImperialPace;
use App\Models\Kilometres;
use App\Models\MetricPace;
use App\Models\Minutes;

require 'vendor/autoload.php';

$distance = new Kilometres(3.25);
$time = new Minutes(15);

$pace = new MetricPace($distance, $time);

echo $distance->kilometres() .
    'km in ' . $time->minutes() .
    ' minutes is ' .
    round($pace->minutesKilometre(), 2) .
    'min/km or ' .
    round($pace->kilometresHour(), 2) .
    'km/hour.<br>';

$pace = new ImperialPace($distance, $time);

echo $distance->kilometres() .
    'km in ' . $time->minutes() .
    ' minutes is ' .
    round($pace->minutesMile(), 2) .
    'min/mile or ' .
    round($pace->milesHour(), 2) .
    'mile/hour.<br>';
