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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/ris','hController@index_h');

Route::get('/insertcom','InsertComController@index_insert');
Route::post('/create','InsertComController@create');

Route::get('/history','HistoryController@index_history');
Route::post('/createhis','HistoryController@create');

Route::get('history','HistoryController@getCom');

Route::get('/showall','ShowallController@index_shows');
Route::get('showall','ShowallController@getShow');

Route::post('searchcom','SearchController@searchcom');

Route::get('details/{id}','DetailController@index_details');

Route::get('/editcom/{id}','EditComController@editcom');
Route::post('updatecom/{id}','EditComController@updatecom');