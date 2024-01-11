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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


//generate key
$router->get('/Key', function() {
    return \Illuminate\Support\Str::random(32);
});

//grup route
$router->group(['prefix' => 'api'], function() use ($router) {
    //books
    $router->get('/books', 'bookscontroller@index');
    $router->get('/books/{id}', 'bookscontroller@show');
    $router->post('/books', 'bookscontroller@store');
    $router->put('/books/{id}', 'bookscontroller@update');
    $router->delete('/books/{id}', 'bookscontroller@destroy');
    //customers
    $router->get('/customers', 'customerscontroller@index');
    $router->get('/customers/{id}', 'customerscontroller@show');
    $router->post('/customers', 'customerscontroller@store');
    $router->put('/customers/{id}', 'customerscontroller@update');
    $router->delete('/customers/{id}', 'customerscontroller@destroy');
    //orderdetails
    $router->get('/orderdetails', 'orderdetailscontroller@index');
    $router->get('/orderdetails/{id}', 'orderdetailscontroller@show');
    $router->post('/orderdetails', 'orderdetailscontroller@store');
    $router->put('/orderdetails/{id}', 'orderdetailscontroller@update');
    $router->delete('/orderdetails/{id}', 'orderdetailscontroller@destroy');
    //orders
    $router->get('/orders', 'orderscontroller@index');
    $router->get('/orders/{id}', 'orderscontroller@show');
    $router->post('/orders', 'orderscontroller@store');
    $router->put('/orders/{id}', 'orderscontroller@update');
    $router->delete('/orders/{id}', 'orderscontroller@destroy');
    //payments
    $router->get('/payments', 'paymentscontroller@index');
    $router->get('/payments/{id}', 'paymentscontroller@show');
    $router->post('/payments', 'paymentscontroller@store');
    $router->put('/payments/{id}', 'paymentscontroller@update');
    $router->delete('/payments/{id}', 'paymentscontroller@destroy');

});
