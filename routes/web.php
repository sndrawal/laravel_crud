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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/','DemoController@index');
Route::get('demo/create','DemoController@create');
Route::post('demo/store','DemoController@store');
Route::get('demo/edit/{id}','DemoController@edit');
Route::post('demo/update/{id}','DemoController@update');
Route::get('demo/delete/{id}','DemoController@destroy');