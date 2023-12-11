<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\MahasiswaController;

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

Route::get('/halo', function () {
    return "<marquee>Cieeeeee, nungguin teks ini lewat AOWKOWKWKWKWKWKAOWKOWAOWKOWAOWKOWAOWKOWAOWKOWAOWKOWAOWKOWAOWKOW</marquee>";
});

Route::get('/blog2', function () {
    return view('blog');
});

Route::get('/week1', function () {
    return view('pweb1');
});

Route::get('/week2', function () {
    return view('pweb2');
});

Route::get('/linktree', function () {
    return view('5026221087');
});

Route::get('/week3', function () {
    return view('pweb3');
});

Route::get('/latihan1', function () {
    return view('progresLatihan1');
});

Route::get('/week5', function () {
    return view('pweb5');
});

Route::get('/week6', function () {
    return view('pweb6');
});

Route::get('/ETS', function () {
    return view('ETS');
});

Route::get('/perkalian', 'App\Http\Controllers\MahasiswaController@index');
Route::get('/show', 'App\Http\Controllers\MahasiswaController@showBlog');

Route::get('/employee/{nama}', 'App\Http\Controllers\MahasiswaController@showNama');

Route::get('/formulir', 'App\Http\Controllers\MahasiswaController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\MahasiswaController@proses');

Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index2');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambah2');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

Route::get('/bedak','App\Http\Controllers\BedakController@index3');
Route::get('/bedak/cari','App\Http\Controllers\BedakController@cari');
Route::get('/bedak/tambah','App\Http\Controllers\BedakController@tambah3');
Route::post('/bedak/store','App\Http\Controllers\BedakController@store');
Route::get('/bedak/view/{kodebedak}','App\Http\Controllers\BedakController@view3');
Route::get('/bedak/edit/{kodebedak}','App\Http\Controllers\BedakController@edit3');
Route::post('/bedak/update','App\Http\Controllers\BedakController@update');
Route::get('/bedak/hapus/{kodebedak}','App\Http\Controllers\BedakController@hapus');

Route::get('/combo','App\Http\Controllers\KategoriController@indexEAS');
Route::post('/hasilcombo','App\Http\Controllers\KategoriController@viewEAS');
