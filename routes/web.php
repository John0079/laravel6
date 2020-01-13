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

Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', function () {
    dump(Auth::user());
    dump(Auth::id());
    dump(Auth::check());
    return time();
})->name('test');

Route::get('/auth', function () {
    return '123';
})->middleware('auth');

Route::get('/auth2', function () {
    return '123';
})->middleware('auth.basic');

Route::get('/out', function () {
    Auth::logout();
});

Route::get('/play', function () {
    Auth::logoutOtherDevices('12345678');
    //return '45677';
})->middleware('auth.basic');


