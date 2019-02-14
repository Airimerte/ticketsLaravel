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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/crearTicket', 'TicketController@create');
Route::post('/crearTicket', 'TicketController@store');
Route::get('/misTickets', 'TicketController@showOwn');
Route::post('/misTickets/{id}', 'TicketControl@updateTicket');
Route::get('/todosTickets', 'TicketController@showAll');
Route::get('/todosTickets/{id}', 'TicketController@updateTicket');
