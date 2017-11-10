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
Route::get ('calendar', function() {
  return view('calenderUser');
});
Route::get('/user', function () {
  return view('user');
});
Route::get('/calendarFunctions', function() {
  return view('calendarFunctions');
});
/*Route::get('/calendar', function() {
  return view('calendarUser');
});*/
Route::post('/insert','Controller@insert');
Route::get('/events', 'EventController@index');
Route::get('calendar', function()
    {
        return View::make('calendarUser');
    });
