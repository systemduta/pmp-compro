<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('cache_clear', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    dd("cache:clear");
});
Route::get('config_clear', function () {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    dd("config:clear");
});
Route::get('storage', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    dd("storage");
});

Route::get('migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate');
    dd("migrate");
});


Route::get('lang/{language}', 'LocalizationController@switch')->name('localization.switch');
Route::get('laporan-pdf', 'TentangKamiController@generatePDF');
Route::get('/', 'FrontController@index');
Route::get('produk/produk_balok', 'ProdukController@index');
Route::get('produk/produk_kristal', 'ProdukController@index1');
Route::get('/tentang_kami', 'TentangKamiController@index');
Route::get('/berita/{id}', 'TentangKamiController@details')->name('details');
Route::get('/tentang_kami/cetak_pdf', 'TentangKamiController@cetak_pdf');
Route::get('/tentang_kami/sejarahkami', 'TentangKamiController@sejarah');
Route::resource('/csr', 'CSRController');
Route::get('/relasi_investor', 'RelasiInvestorController@index');
Route::get('/mitra', 'MitraController@mitra');
Route::get('/karir', 'KarirController@index');
Route::get('/karir/internship', 'KarirController@internship');
Route::get('/karir/position_a', 'KarirController@position_a');
Route::get('/karir/position_b', 'KarirController@position_b');

Auth::routes();

//admin
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@store')->name('berita');
Route::post('/update/{id}', 'HomeController@update')->name('update');
Route::get('/edit/{id}', 'HomeController@edit')->name('edit');
Route::get('/hapus/{id}', 'HomeController@destroy')->name('destroy');
