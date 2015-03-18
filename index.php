<?php

use App\Kilometres;
use App\Miles;
require 'vendor/autoload.php';

$kilometre = new Kilometres(1);

echo round($kilometre->kilometres(), 2) . 'km is ' . round($kilometre->miles(), 2) . 'miles.<br>';

$mile = new Miles($kilometre->miles());

echo round($mile->miles(), 2) . 'miles is ' . round($mile->kilometres(), 2) . 'km.';


