<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/korona', 'HomeController@korona');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pesan/{id}', 'PesanController@index');
Route::post('pesan/{id}', 'PesanController@pesan');
Route::get('checkout', 'PesanController@checkout');
Route::get('checkout/{id}','PesanController@delete');
Route::get('konfirmasi-checkout', 'PesanController@konfirmasi');

Route::get('/berita', 'BeritaController@index');
Route::get('/berita/create', 'BeritaController@create');
Route::post('/berita', 'BeritaController@store');

Route::get('/berita/{id}/edit', 'BeritaController@edit');
Route::patch('/berita/{id}', 'BeritaController@update');

Route::get('/donasi', 'DonasiController@index');
Route::get('/donasi/create', 'DonasiController@create');
Route::post('/donasi', 'DonasiController@store');
Route::get('/donasi/{id}', 'DonasiController@destroy');

// Route::get('/penggalangan', 'PenggalanganController@index');
// Route::get('/penggalangan/create', 'PenggalanganController@create');
// Route::post('/penggalangan', 'PenggalanganController@store');
// Route::get('/penggalangan/{id}', 'PenggalanganController@destroy');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@detail');

Route::get('/toko', 'HomeController@toko');

Route::get('admin', 'AdminController@index');
Route::post('/admin/tambah', 'AdminController@tambah');
Route::get('/admin/{id}/edit', 'AdminController@edit');
Route::post('/admin/{id}/update', 'AdminController@update');
Route::get('admin/{id}', 'AdminController@hapus');
