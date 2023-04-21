<?php

use Illuminate\Http\Request;

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

/* Get All Task  */
Route::get('/tasks', 'TaskController@index');

/* Get Single Task  */
Route::get('/tasks/getTask/{id}', 'TaskController@getTask');

/* Store Task  */
Route::post('/tasks/create', 'TaskController@store');

/* Update Task (With Id)  */
Route::put('/tasks/update/{id}', 'TaskController@update');

/* Complete Task (With Id)  */
Route::post('/tasks/complete/{id}', 'TaskController@completeTask');

/* Delete Task (With Id)  */
Route::delete('/tasks/delete/{id}', 'TaskController@destroy');