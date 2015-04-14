<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', 'App\Http\Controllers\HomeController@index');

$app->post('/minutes/mile', 'App\Http\Controllers\CalculatorController@MinutesMile');
$app->post('/minutes/kilometre', 'App\Http\Controllers\CalculatorController@MinutesKilometre');
$app->post('/miles/hour', 'App\Http\Controllers\CalculatorController@MilesHour');
$app->post('/kilometres/hour', 'App\Http\Controllers\CalculatorController@KilometresHour');
