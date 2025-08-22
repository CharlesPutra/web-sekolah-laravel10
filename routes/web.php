<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PrestasiController;
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


//route untuk bagian user
Route::middleware('guest')->group(function () {

    Route::get('/', function () {
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

    //route login
    Route::get('/login', [AuthController::class, 'ShowLogin'])->name('ShowLogin');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});




//route untuk bagian admin
Route::middleware('auth')->group(function() {


    //route prestasi
    Route::resource('/prestasi',PrestasiController::class);
    
    //route jurusan
    Route::resource('/keterampilan', JurusanController::class);
    //route berita
    Route::resource('/berita', BeritaController::class);


    //route logout
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
});