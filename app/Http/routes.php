<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("service","ServiceController@index");
Route::get("service/{id}","ServiceController@show");
Route::post("service","ServiceController@store");
Route::put("service/{id}","ServiceController@update");
Route::delete("service/{id}","ServiceController@destroy");

Route::get("processes","ProcessesController@index");
Route::get("processes/{id}","ProcessesController@show");
Route::post("processes","ProcessesController@store");
Route::put("processes/{id}","ProcessesController@update");
Route::delete("processes/{id}","ProcessesController@destroy");
Route::get("processes/data","ProcessesController@index");