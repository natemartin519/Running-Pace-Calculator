<?php

use App\Models\Kilometres;
use App\Models\Miles;

require 'vendor/autoload.php';

$inputNumber = 3.25;

$kilometre = new Kilometres($inputNumber);
echo round($kilometre->kilometres(), 2) . 'km is ' . round($kilometre->miles(), 2) . 'miles.<br>';

$mile = new Miles($kilometre->miles());
echo round($mile->miles(), 2) . 'miles is ' . round($mile->kilometres(), 2) . 'km.';
