<?php

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

Route::post('response', 'ResponseController@create');

Route::get('response', 'ResponseController@index');
Route::get('/response/{id}/edit', 'ResponseController@show');
Route::get('/response/{id}/delete', 'ResponseController@destroy');

//Route::get('response/edit', 'ResponseController@edit');

//Route::resource('response', 'ResponseController');
Route::post('/response/{id}/edit', 'ResponseController@edit');