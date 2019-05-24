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

Route::get('/', 'TaskController@index');
Route::get('/user', 'UserController@index');

Route::get('/task/apply', 'TaskController@apply');
Route::get('/task/{task_id}/{user_id}/approve', 'TaskController@approve');
Route::get('/user/{user_id}/edit', 'UserController@edit');
Route::post('/task/createApplication', 'TaskController@createApplication');
Route::put('/user/{id}/update', 'UserController@update');


Route::resource('task', 'TaskController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
