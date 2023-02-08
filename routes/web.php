<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serieController;

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
    return view('home');
});



Route::get('serie','App\Http\Controllers\serieController@serie')->name('serie');
Route::post('fib','App\Http\Controllers\serieController@fib')->name('fibonacci');


Route::get('palindromos','App\Http\Controllers\palindromosController@palindromos')->name('palindromos');
Route::post('resp','App\Http\Controllers\palindromosController@resp')->name('resupal');

Route::get('factorizacion','App\Http\Controllers\factorizacionController@factorizacion')->name('factorizacion');
Route::post('fac','App\Http\Controllers\factorizacionController@fac')->name('resufac');

Route::get('simon',function(){
    return view('simon');
});




