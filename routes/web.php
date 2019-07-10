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


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/santri', 'SantriController@index');
    Route::post('/create', 'SantriController@create');
    Route::get('/', function () {
        return view('layouts.master');
    });  
    Route::get('/santri/{id}/delete', 'SantriController@delete');
    Route::get('/santri/{id}/edit', 'SantriController@edit');
    Route::post('/santri/{id}/update', 'SantriController@update');
});

    