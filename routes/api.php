<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::group(['prefix' => 'dashbord'], function () {
    Route::group(['prefix' => 'user'], function () {
        Route::put('/update', 'Dashbord\User\Api\UserController@update');
    });
    Route::group(['prefix' => 'admin'], function () {
        Route::put('/update', 'Dashbord\Admin\Api\AdminController@update');
        Route::get('/getUsers','Dashbord\Admin\Users\UsersController@index');
    });
});
Route::get('/syi', 'Api\UserSystemeInfo@getBrowser' );
