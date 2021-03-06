<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => ['nopin']], function () {
    Route::post('/games', 'GameController@store');
    Route::get('/games/create', 'GameController@create')->name('game.create');
    Route::post('/games/logpin', 'GameController@logpin')->name('game.logpin');
});

Route::group(['middleware' => ['haspin']], function () {
    Route::get('/user/create', 'Auth\RegisterController@create')->name('user.create');
    Route::post('/user', 'Auth\RegisterController@store')->name('user.store');

    Route::group(['middleware' => ['auth']], function () {
        Route::get('/user', 'Auth\RegisterController@index')->name('user.index');
        Route::put('/games/start', 'GameController@update')->name('game.start')->middleware('gamenotstarted');
        // route to main game
        Route::group(['middleware' => ['gamestarted']], function () {
            Route::get('/games', 'GameController@show')->name('game.show');
        });
    });
});
