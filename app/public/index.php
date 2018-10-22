<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Include application bootstrap
require_once dirname(__FILE__) . '/../bootstrap.php';

use SampleApp\Helpers\Hello;
// Defining routes, from specific...
$app->get('/hello(/:name)', function ($name = 'anonymous') use ($app, $log) {
    $greeter = new Hello($name);
    echo $greeter->greet();
    $log->info("Just logging $name visit...");
});
$app->get('/about', function () use ($app, $log) {
    echo "<h1>About ", $app->config('name'), "</h1>";
    var_dump($_SERVER);
    echo "<p><small>Current mode is: ", $app->config('mode'), '</small></p>';
});
// To generic
$app->get('/', function () use ($app, $log) {
    echo '<h1>Welcome to ', $app->config('name'), '</h1>';
});

$app->get('/interface', function ($name = "Suzan") use ($app, $log) {
    $example = new Hello($name);
    echo $example->example();
});
// Important: run the app ;)
$app->run();
