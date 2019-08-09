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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ticket', 'TicketApiController@index');
Route::post('/ticket', 'TicketApiController@store');
Route::get('/ticket/{id}', 'TicketApiController@show');

Route::post('/sensor/env/{id}', 'SensorController@update');
Route::get('/sensor/env/{id}', 'SensorController@update');