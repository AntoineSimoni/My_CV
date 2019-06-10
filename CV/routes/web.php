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

Route::get('/', 'MonControlleur@elements');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/delete-e/{id}', 'MonControlleur@deleteE');
Route::get('/delete-c/{id}', 'MonControlleur@deleteC');
Route::get('/delete-f/{id}', 'MonControlleur@deleteF');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/creer-exp', 'MonControlleur@elements');
Route::post('/creer-exp', 'Creer@create')->name('creerExp');
Route::get('/creer-Com', 'MonControlleur@elements');
Route::post('/creer-Com', 'Creer@createA')->name('creerCom');
Route::get('/creer-For', 'MonControlleur@elements');
Route::post('/creer-For', 'Creer@createB')->name('creerFor');
