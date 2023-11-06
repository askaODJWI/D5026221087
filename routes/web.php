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

Route::get('/blog', function () {
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
