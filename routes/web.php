<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
// VERSION
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// unsecure routes 


// $router->group(['prefix' => 'api'], function () use ($router) {
//     $router->get('/users',['uses' => 'UserController@getUsers']);
// })  


//SIMPLE ROUTES



/* Same to index controller  
    $router->get('/studentsList',['uses' => 'UserController@getAllUsers']); */ 

//<-- get all users
$router->get('/studentsList',['uses' => 'UserController@getAllUsers']);
$router->get('/users', 'UserController@index'); //<-- get all users


$router->get('/guser/{id}', 'UserController@showUserWithID'); // get user by id

$router->post('/auser', 'UserController@addUser'); // create new user record

$router->put('/uuser/{id}', 'UserController@updateUserInfo'); // update user record

$router->delete('/duser/{id}', 'UserController@deleteUser'); // delete record