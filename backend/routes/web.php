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
/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// API Routes
$router->group(['prefix' => 'api'], function () use ($router) {
    // API v1 Routes
    $router->group(['prefix' => 'v1'], function () use ($router) {

        $router->get('/', function () use ($router) {
            return 'Welcome to &quot;Lumen x React&quot; API v1 by <b>Ali Shaikh</b>!';
        });

        $router->get('books', ['uses' => 'BookController@getAllBooks']);

        $router->get('books/{id}', ['uses' => 'BookController@getBookByID']);

        $router->post('books', ['uses' => 'BookController@create']);

        $router->delete('books/{id}', ['uses' => 'BookController@delete']);

        $router->put('books/{id}', ['uses' => 'BookController@update']);

    });
});
