<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

    //route home
    Route::get('/', function () {
        return view('home'); // otomatis cari resources/views/home.blade.php
    })->name('home');
    Route::get('/', [HomeController::class, 'kejuaraan'])->name('home');
    
    // web.php
    Route::get('/visi-misi', function () {
        return view('visiMisi');
    })->name('visiMisi');
    
    //route profil
    Route::get('/profil/{id}', [ProfileController::class,'deskripsi'])->name('profil.show');
    Route::get('/profil',[ProfileController::class, 'keterampilan'])->name('profil');
    

    //route postingan
    Route::get('/postingan', [PostController::class, 'postingan'])->name('postingan.index');
    Route::get('/postingan/{id}', [PostController::class, 'despost'])->name('post.show');



    // Route::get('/postingan', function () {
    //     $page = request('page', 1); // ambil ?page= dari URL
    //     return view('postingan', compact('page'));
    // })->name('postingan.index');
    
    // Route::get('/post/{id}', function ($id) {
    //     return view('show', compact('id'));
    // })->name('post.show');
    

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