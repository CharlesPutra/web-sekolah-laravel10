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
//cobaa commit
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home'); // otomatis cari resources/views/home.blade.php
})->name('home');

// web.php
Route::get('/visi-misi', function () {
    return view('visiMisi');
})->name('visiMisi');

Route::get('/profil', function () {
    return view('profil'); // ambil resources/views/profil.blade.php
})->name('profil');

Route::get('/postingan', function () {
    $page = request('page', 1); // ambil ?page= dari URL
    return view('postingan', compact('page'));
})->name('postingan.index');

Route::get('/post/{id}', function ($id) {
    return view('show', compact('id'));
})->name('post.show');

Route::get('/jurusan/{slug}', function ($slug) {
    return view('deskripsiJurusan', ['slug' => $slug]);
})->name('jurusan.show');