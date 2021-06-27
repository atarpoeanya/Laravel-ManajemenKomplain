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

// Route::get('/home', 'HomeController@index');




Route::group(['middleware'=>'check-permission:user'], function () {
    Route::get('/user', 'App\Http\Controllers\User\DashboardController@index');
    Route::get('formKomplain', 'App\Http\Controllers\KomplainController@create');
    Route::post('/user', 'App\Http\Controllers\KomplainController@store');
	
	
	// Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);
});
// ====== tables ======
// Auth::routes();
Route::group(['middleware'=>'check-permission:admin'], function (){
    
Route::get('/home', 'App\Http\Controllers\Admin\AdminDashboardController@index')->middleware('auth');
Route::get('/table', [App\Http\Controllers\HomeController::class, 'index'])->name('table');
   

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
Route::get('/komplain', 'App\Http\Controllers\KomplainController@index');
Route::get('/komplain/create', 'App\Http\Controllers\KomplainController@create');
Route::post('/komplain', 'App\Http\Controllers\KomplainController@store');

//komplain komentar
Route::get('/komplainkomentar', 'App\Http\Controllers\KomplainKomentarController@index');
Route::get('/komplainkomentar/create', 'App\Http\Controllers\KomplainKomentarController@create');
Route::post('/home', 'App\Http\Controllers\KomplainKomentarController@store');

//pertanyaan rating
Route::get('/pertanyaanrating', 'App\Http\Controllers\PertanyaanRatingController@index');
Route::get('/pertanyaanrating/create', 'App\Http\Controllers\PertanyaanRatingController@create');
Route::post('/pertanyaanrating', 'App\Http\Controllers\PertanyaanRatingController@store');

//jawabanrating
Route::get('/jawabanrating', 'App\Http\Controllers\JawabanRatingController@index');
Route::get('/jawabanrating/create', 'App\Http\Controllers\JawabanRatingController@create');
Route::post('/jawabanrating', 'App\Http\Controllers\JawabanRatingController@store');

//kontak
Route::get('/kontak', 'App\Http\Controllers\KontakController@index');
Route::get('/kontak/create', 'App\Http\Controllers\KontakController@create');
Route::post('/kontak', 'App\Http\Controllers\KontakController@store');

//refjeniskontak
Route::get('/jeniskontak', 'App\Http\Controllers\refJenisKontakController@index');
Route::get('/jeniskontak/create', 'App\Http\Controllers\refJenisKontakController@create');
Route::post('/jeniskontak', 'App\Http\Controllers\refJenisKontakController@store');

//group
Route::get('/group', 'App\Http\Controllers\GroupController@index');
Route::get('/group/create', 'App\Http\Controllers\GroupController@create');
Route::post('/group', 'App\Http\Controllers\GroupController@store');

//groupmember
Route::get('/groupmember', 'App\Http\Controllers\GroupMemberController@index');
Route::get('/groupmember/create', 'App\Http\Controllers\GroupMemberController@create');
Route::post('/groupmember', 'App\Http\Controllers\GroupMemberController@store');

//broadcast
Route::get('/broadcast', 'App\Http\Controllers\BroadcastController@index');
Route::get('/broadcast/create', 'App\Http\Controllers\BroadcastMemberController@create');
Route::post('/broadcast', 'App\Http\Controllers\BroadcastMemberController@store');

//broadcast
Route::get('/broadcast', 'App\Http\Controllers\BroadcastController@index');
Route::get('/broadcast/create', 'App\Http\Controllers\BroadcastMemberController@create');
Route::post('/broadcast', 'App\Http\Controllers\BroadcastMemberController@store');

/*user
Route::get('/user', 'App\Http\Controllers\UserController@index');
Route::get('/user/create', 'App\Http\Controllers\UserController@create');
Route::post('/user', 'App\Http\Controllers\UserController@store');
*/
});

