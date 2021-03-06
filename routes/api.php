<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// Route::namespace('Api')->group(function () {
    
// });


Route::group(['namespace' => 'App\Http\Controllers\Api'], function () {
    // unauthenticated routes
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');

    Route::resource('question', 'QuestionController');
    Route::resource('media', 'MediaController');

    // authenticated routes using middleware
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('logout', 'Api\AuthController@logout');
        Route::get('user', 'Api\AuthController@user');
    });
});
