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

Route::get('properties', 'PropertyController@index');
Route::get('properties/{property}', 'PropertyController@show');
Route::get('new-property', 'PropertyController@create');
Route::post('create-property', 'PropertyController@store');
Route::get('properties/{property}/edit', 'PropertyController@edit');
Route::post('properties/{property}/update-property', 'PropertyController@update');
Route::get('projects', 'ProjectController@index');
Route::get('projects/{project}', 'ProjectController@show');

