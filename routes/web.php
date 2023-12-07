<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Kegiatan;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;



Route::get('/', [PostController::class,'beranda']);
Route::get('/beranda', [PostController::class,'beranda']);
Route::get('/login', [LoginController::class,'index']);
Route::post('/login', [LoginController::class,'autenticate']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', [RegisterController::class,'index']);


//about
// Route::get('/tentang', [PostController::class,'beranda']);
//jika tidak ada sama semakali
Route::get('/tentang', function () {
    return view('user.tentang',[
        "title" => "tentang"
    ]);
});

//berita
Route::get('/kegiatan', [PostController::class,'index']);

Route::get('/kegiatan/{kegiatan:slug}', [PostController::class, 'kegiatanShow']);
// Route::get('/kegiatan/kategori/{divisi:slug}', [PostController::class,'KegiatanDivisi']);

//pengurus
Route::get('/pengurus', [PengurusController::class,'pengursshow']);


//jika tidak ada sama semakali
Route::fallback(function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});


Route::get('/kategori/{divisi:slug}', [PostController::class, 'sortDivisi']);
Route::get('/{post:slug}', [PostController::class,'show']);

