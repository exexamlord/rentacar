<?php

use Illuminate\Routing\Router;
use App\Admin\Controllers\carsmainController;
use App\Admin\Controllers\deneme2controllers;
use App\Admin\Controllers\carmain2Controllers;
use App\Admin\Controllers\MainusersControllers;
use App\Admin\Controllers\RentalsControllers;


Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    
    $router->resource('deneme2s', deneme2controllers::class);

    $router->resource('carsmains', carsmainController::class);
    
    $router->resource('carmain2s', carmain2Controllers::class);

    $router->resource('mainusers', MainusersControllers::class);

    $router->resource('rentals', RentalsControllers::class);


});
