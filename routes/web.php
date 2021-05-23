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
    return view('welcome');
});

Auth::routes();
Route::get('dasboard', 'UserController@dashboard')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ====== tables ======
//ref_layanan
Route::get('/test1', 'App\Http\Controllers\refLayananController@index');
Route::get('/test1/create', 'App\Http\Controllers\refLayananController@create');
Route::post('/test1', 'App\Http\Controllers\refLayananController@store');

//ref_unit
