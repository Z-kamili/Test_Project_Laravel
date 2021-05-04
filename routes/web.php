<?php

use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('Deals', 'DealsController');
    Route::get('/Exp', 'DealsController@create')->name('Exp');
    Route::get('Deals/{deals}/edit', 'DealsController@edit')->name('Edit');
    Route::put('Deals/{deals}/update','DealsController@update')->name('update');
    Route::get('Deals/{deals}/delete', 'DealsController@deleteitem')->name('Delete');
    Route::delete('Deals/{deals}/delete','DealsController@destroy')->name('delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
