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
Route::get('/environment', function () {
    return view('environment', Redis::hget("sensor:env:0"));
});
Route::get('/ticket/new', 'TicketController@create');
Route::get('/ticket/{id}', 'TicketController@show');
Route::get('/ticket/{id}/process', 'TicketController@process');
Route::post('/ticket/{id}/approve', 'TicketController@process_approve');
Route::post('/ticket/{id}/cancel', 'TicketController@process_cancel');
Route::post('/ticket/{id}/accept', 'TicketController@process_accept');
Route::post('/ticket/{id}/reject', 'TicketController@process_reject');
Route::post('/ticket/{id}/resolve', 'TicketController@process_resolve');
Route::post('/ticket/{id}/reschedule', 'TicketController@process_reschedule');
Route::post('/ticket/{id}/feedback', 'TicketController@process_feedback');
Route::get('/ticket/{id}/edit', 'TicketController@edit');
Route::post('/ticket', 'TicketController@store');
Route::get('/ticket-{filter}', 'TicketController@index');

//wechat
Route::any('/wechat', 'WeChatController@serve');
Route::group(['middleware' => ['web', 'wechat.oauth']], function () {
    Route::get('/user', function () {
        $user = session('wechat.oauth_user.default'); // 拿到授权用户资料

        dd($user);
    });
});
