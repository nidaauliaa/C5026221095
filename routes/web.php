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

Route::get('halo', function () {
    //bisa diisi program apa saja
    return "Halo apa kabar
    heloh helo";
});

Route::get('halo2', function () {
    return "<h1> Halo apa kabar </h1>";
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('hello', function () {
    return view('hello');
});
Route::get('Style', function () {
    return view('Style');
});
Route::get('ppi', function () {
    return view('ppi');
});
Route::get('responsive3', function () {
    return view('responsive3');
});
Route::get('basic_list_group', function () {
    return view('basic_list_group');
});
Route::get('active_state', function () {
    return view('active_state');
});
Route::get('js1', function () {
    return view('js1');
});
Route::get('link', function () {
    return view('link');
});
Route::get('latihan', function () {
    return view('latihan');
});
Route::get('buatnyobain', function () {
    return view('buatnyobain');
});
Route::get('responsive', function () {
    return view('responsive');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showtime');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/blog', function () {
    return view('home');
});
Route::get('/blog/tentang', function () {
    return view('tentang');
});
Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

//keranjangbelanja | tugas cwe2 dikelas
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index2');
Route::get('/keranjangbelanja/tambah2','App\Http\Controllers\KeranjangController@tambah2');
Route::get('/keranjangbelanja/hapus2/{id}','App\Http\Controllers\KeranjangController@hapus2');
Route::post('/keranjangbelanja/store2','App\Http\Controllers\KeranjangController@store2');

//sandal | tugas dikumpul senin
Route::get('/sandal','App\Http\Controllers\SandalController@indexsandal');
Route::get('/sandal/tambahsandal','App\Http\Controllers\SandalController@tambahsandal');
Route::get('/sandal/hapus/{id}','App\Http\Controllers\SandalController@hapus');
Route::post('/sandal/store','App\Http\Controllers\SandalController@store');
Route::get('/sandal/lihatsandal/{id}','App\Http\Controllers\SandalController@lihatsandal');
Route::get('/sandal/editsandal/{id}','App\Http\Controllers\SandalController@editsandal');
Route::post('/sandal/update','App\Http\Controllers\SandalController@update');
Route::get('/sandal/cari','App\Http\Controllers\SandalController@cari');

//nilai | tugas cwo2 dikelas
Route::get('/nilai','App\Http\Controllers\NilaiController@indexnilai');
Route::get('/nilai/tambahnilai','App\Http\Controllers\NilaiController@tambahnilai');
Route::post('/nilai/store2','App\Http\Controllers\NilaiController@store2');



