<?php

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix' => 'dashbord'], function () {
    //Globale routes for dashbord
    Route::get('/', 'Dashbord\GDashbordController@index');
    /* the user dashbord routes*/
    Route::group(['prefix' => 'user'] , function(){
        Route::get('/{vue?}', 'Dashbord\User\UserController@index')->where('vue', '[\/\w\.-]*');
    });
    Route::group(['prefix' => 'admin'] , function(){
        Route::get('/{all?}', 'Dashbord\Admin\AdminController@index')->where('all', '[\/\w\.-]*');
    });
    /* the end of user dashbord routes*/

    /* the admin dashbord routes*/

    /* the and of admin dashbord routes*/

    //Route::get('/', 'Dashbord@index')->name('dashbord');

});
Route::get('/testip', 'TestsController@getUserIp');
