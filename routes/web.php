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
    return view('dashboard');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/ticket', 'TicketController@create');
Route::get('/ticket/{id}', 'TicketController@show');
Route::get('/ticket_process/{id}', 'TicketController@process');
Route::post('/ticket_accept/{id}', 'TicketController@process_accept');
Route::post('/ticket_reject/{id}', 'TicketController@process_reject');
Route::post('/ticket_resolve/{id}', 'TicketController@process_resolve');
Route::post('/ticket_feedback/{id}', 'TicketController@process_feedback');
//Route::get('/ticket_assign/{id}', 'TicketController@assign');
//Route::get('/ticket_resolve/{id}', 'TicketController@resolve');
Route::get('/ticket_modify/{id}', 'TicketController@edit');
Route::post('/ticket', 'TicketController@store');
Route::get('/ticket-{filter}', 'TicketController@index');
