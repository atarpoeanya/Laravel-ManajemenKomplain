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
// Route::get('/home', 'HomeController@index');




Route::group(['middleware'=>'auth'], function () {
	Route::get('permissions-all-users',['middleware'=>'check-permission:user','uses'=>'HomeController@allUsers']);
	
	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
});
// ====== tables ======

Route::group(['middleware'=>'check-permission:admin'], function (){
   
    // Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin','uses'=>'HomeController@admin']);
    // Route::get('admin', function () { return view('home'); })->middleware(['checkRole:admin']);
    // Route::get('user', function () { return view('user'); })->middleware(['checkRole:user']);

//ref_layanan
Route::get('/layanan', 'App\Http\Controllers\refLayananController@index');
Route::get('/layanan/create', 'App\Http\Controllers\refLayananController@create');
Route::post('/layanan', 'App\Http\Controllers\refLayananController@store');

//ref_unit
Route::get('/unit', 'App\Http\Controllers\refUnitController@index');
Route::get('/unit/create', 'App\Http\Controllers\refUnitController@create');
Route::post('/unit', 'App\Http\Controllers\refUnitController@store');

//layanan_unit
Route::get('/layananunit', 'App\Http\Controllers\LayananUnitController@index');
Route::get('/layananunit/create', 'App\Http\Controllers\LayananUnitController@create');
Route::post('/layananunit', 'App\Http\Controllers\LayananUnitController@store');

//kategori
Route::get('/kategori', 'App\Http\Controllers\KategoriController@index');
Route::get('/kategori/create', 'App\Http\Controllers\KategoriController@create');
Route::post('/kategori', 'App\Http\Controllers\KategoriController@store');

//komplain
Route::get('komplain', 'App\Http\Controllers\KomplainController@index');
Route::get('/komplain/create', 'App\Http\Controllers\KomplainController@create');
Route::post('/komplain', 'App\Http\Controllers\KomplainController@store');

//komplain komentar
Route::get('/komplainkomentar', 'App\Http\Controllers\KomplainKomentarController@index');
Route::get('/komplainkomentar/create', 'App\Http\Controllers\KomplainKomentarController@create');
Route::post('/komplainkomentar', 'App\Http\Controllers\KomplainKomentarController@store');

//pertanyaan rating
Route::get('/pertanyaanrating', 'App\Http\Controllers\PertanyaanRatingController@index');
Route::get('/pertanyaanrating/create', 'App\Http\Controllers\PertanyaanRatingController@create');
Route::post('/pertanyaanrating', 'App\Http\Controllers\PertanyaanRatingController@store');
});

