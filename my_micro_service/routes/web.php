<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//routes user
$router->get('user/{id}', 'UserController@showOne');
$router->get('user', 'UserController@showAll');
$router->post('user', 'UserController@create');
$router->delete('user/{id}', 'UserController@delete');
$router->put('user/{id}', 'UserController@update');


//routes message
$router->get('message/{id}', 'MessageController@show');

