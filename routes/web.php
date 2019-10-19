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

// Property Class Routes
Route::get('properties', 'PropertyController@index');
Route::get('properties/{property}', 'PropertyController@show');
Route::get('new-property', 'PropertyController@create');
Route::post('create-property', 'PropertyController@store');
Route::get('properties/{property}/edit', 'PropertyController@edit');
Route::post('properties/{property}/update-property', 'PropertyController@update');
Route::get('properties/{property}/delete', 'PropertyController@destroy');
Route::get('properties/{property}/complete', 'PropertyController@complete');


// Project Class Routes
Route::get('projects', 'ProjectController@index');
Route::get('projects/{project}', 'ProjectController@show');
Route::get('new-project', 'ProjectController@create');
Route::post('create-project', 'ProjectController@store');
Route::get('projects/{project}/edit', 'ProjectController@edit');
Route::post('projects/{project}/update-project', 'ProjectController@update');
Route::get('projects/{project}/delete', 'ProjectController@destroy');
Route::get('projects/{project}/complete', 'ProjectController@complete');


