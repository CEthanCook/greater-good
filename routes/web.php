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
  return view('calendarFunctions(2)');
});
/*Route::get('/calendar', function() {
  return view('calendarUser');
<<<<<<< HEAD
});*/
=======
});

>>>>>>> 4973f1cca2b561def753b9651c35c623a6e48947
Route::post('/insert','Controller@insert');
Route::get('/events', 'EventController@index');
Route::get('calendar', function()
    {
        return View::make('calendarUser');
    });
