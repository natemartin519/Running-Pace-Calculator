<?php

require 'vendor/autoload.php';

use App\ImperialPace;
use App\MetricPace;
use App\Models\Hours;
use App\Models\Kilometres;
use App\Models\Miles;
use App\Models\Minutes;
use Slim\Slim;

$app = new Slim([
    'templates.path' => './app/views',
]);

$app->get('/', function() use ($app) {
    $app->render('index.php');
});

$app->post('/minutes/mile', function() use ($app) {
    $distance = new Kilometres($app->request->params('distance'));
    $time = new Minutes($app->request->params('time'));
    $pace = new ImperialPace($distance, $time);

    echo $time->minutes() . ' Min/Km is ' . round($pace->minutesMile(), 2) . ' Min/Mile';
});

$app->post('/minutes/kilometre', function() use ($app) {
    $distance = new Miles($app->request->params('distance'));
    $time = new Minutes($app->request->params('time'));
    $pace = new MetricPace($distance, $time);

    echo $time->minutes() . ' Min/Mile is ' . round($pace->minutesKilometre(), 2) . ' Min/Km';
});
//////////////////
$app->post('/miles/hour', function() use ($app) {
    $distance = new Kilometres($app->request->params('distance'));
    $time = new Hours($app->request->params('time'));
    $pace = new ImperialPace($distance, $time);

    echo $distance->kilometres() . ' Km/Hour is ' . round($pace->milesHour(), 2) . ' Miles/Hour';
});

$app->post('/kilometres/hour', function() use ($app) {
    $distance = new Miles($app->request->params('distance'));
    $time = new Hours($app->request->params('time'));
    $pace = new MetricPace($distance, $time);

    echo $distance->miles() . ' Miles/Hour is ' . round($pace->kilometresHour(), 2) . ' Km/Hour';
});


$app->run();