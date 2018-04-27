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

Route::get('sample/{user}', function(\App\User $user) {
    if(\Illuminate\Support\Facades\Auth::check($user)) {
        return $user->withCount('trainees')->first();
    } else {
        return 'logged out';
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/trainees/login', 'TraineesController@login');
Route::post('/trainees/logout/{user}', 'TraineesController@logout');

Route::resource('reservations', 'ReservationsController');
Route::resource('trainees', 'TraineesController');
