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

Route::get("entities","EntitiesController@index");
Route::get("entities/{id}","EntitiesController@show");
Route::post("entities","EntitiesController@store");
Route::put("entities/{id}","EntitiesController@update");
Route::delete("entities/{id}","EntitiesController@destroy");
Route::get("entities/data","EntitiesController@index");

Route::get("servicePoints","ServicePointsController@index");
Route::get("servicePoints/{id}","ServicePointsController@show");
Route::post("servicePoints","ServicePointsController@store");
Route::put("servicePoints/{id}","ServicePointsController@update");
Route::delete("servicePoints/{id}","ServicePointsController@destroy");
Route::get("servicePoints/data","ServicePointsController@index");

Route::get("categories","CategoriesController@index");
Route::get("categories/{id}","CategoriesController@show");
Route::post("categories","CategoriesController@store");
Route::put("categories/{id}","CategoriesController@update");
Route::delete("categories/{id}","CategoriesController@destroy");
Route::get("categories/data","CategoriesController@index");

Route::get("database","DatabaseController@index");
Route::get("database/{id}","DatabaseController@show");
Route::post("database","DatabaseController@store");
Route::put("database/{id}","DatabaseController@update");
Route::delete("database/{id}","DatabaseController@destroy");
Route::get("database/data","DatabaseController@index");

Route::get("tickets","TicketsController@index");
Route::get("tickets/{id}","TicketsController@show");
Route::post("tickets","TicketsController@store");
Route::put("tickets/{id}","TicketsController@update");
Route::delete("tickets/{id}","TicketsController@destroy");
Route::get("tickets/data","TicketsController@index");

Route::get("attentions","AttentionsController@index");
Route::get("attentions/{id}","AttentionsController@show");
Route::post("attentions","AttentionsController@store");
Route::put("attentions/{id}","AttentionsController@update");
Route::delete("attentions/{id}","AttentionsController@destroy");
Route::get("attentions/data","AttentionsController@index");