<?php

require 'vendor/autoload.php';

use App\Models\ImperialPace;
use App\Models\Kilometres;
use App\Models\MetricPace;
use App\Models\Miles;
use App\Models\Minutes;
use Slim\Slim;

$app = new Slim([
    'templates.path' => './app/views',
]);

$app->get('/', function() use ($app) {
    $app->render('index.php');
});

$app->post('/miles', function() use ($app) {
    $distance = new Kilometres($app->request->params('distance'));
    $time = new Minutes($app->request->params('time'));
    $pace = new ImperialPace($distance, $time);

    echo $time->minutes() . ' Min/Km is ' . round($pace->minutesMile(), 2) . ' Min/Mile';
});

$app->post('/kilometres', function() use ($app) {
    $distance = new Miles($app->request->params('distance'));
    $time = new Minutes($app->request->params('time'));
    $pace = new MetricPace($distance, $time);

    echo $time->minutes() . ' Min/Km is ' . round($pace->minutesKilometre(), 2) . ' Min/Mile';
});


$app->run();