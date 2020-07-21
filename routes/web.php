<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('meeting', 'MeetingController@create')->name('meeting');
Route::post('createmeeting', 'MeetingController@store');
Route::get('sendmail','MeetingController@show');



Route::get('project', 'ProjectController@create')->name('project');
Route::post('createproject', 'ProjectController@store');
Route::get('sendproject','ProjectController@show');

Route::post('storem','MailmController@store');
Route::get('sendm','MailmController@show');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




