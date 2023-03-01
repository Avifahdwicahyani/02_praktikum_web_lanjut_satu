<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//Soal No.2
Route::get('/', function () {
    return "Selamat Datang";
});
Route::get('/about', function () {
    return "NIM: 2141720053 <br> Nama: Avifah Dwi Cahyani";
});
Route::get('/articles/{id}', function () {
    return "Halaman Artikel";
});

//Soal No.3
Route::get('/articles1/{id}', function () {
    return "Halaman Artikel 1";
});
Route::get('/articles2/{id}', function () {
    return "Halaman Artikel 2";
});