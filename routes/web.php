<?php


$router->get('/', function () use ($router) {
    return $router->app->version();
});

// API Routes (Make sure to put them outside the first function!)
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', ['uses' => 'UserController@getUsers']);
});
