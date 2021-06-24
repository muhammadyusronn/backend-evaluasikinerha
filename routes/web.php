<?php

/** @var \Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1', 'namespace' => 'API\V1'], function () use ($router) {
    $router->group(['prefix' => 'auth', 'namespace' => 'Auth'], function () use ($router) {
        $router->post('login', ['uses' => 'LoginController@login']);
        $router->post('register', ['uses' => 'RegisterController@register']);
    });
    $router->group(['prefix' => 'admin'], function () use ($router) {
        $router->get('/', ['uses' => 'AdminController@index']);
    });
});
