<?php

use App\Http\Controllers\PengurusController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;


//beranda
Route::get('/', [PostController::class,'beranda']);
Route::get('/beranda', [PostController::class,'beranda']);


//about
Route::get('/tentang', [PostController::class,'beranda']);


//berita
Route::get('/berita', [PostController::class,'index']);

//pengurus
Route::get('/pengurus', [PengurusController::class,'index']);


//jika tidak ada sama semakali
Route::fallback(function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});


Route::get('/kategori/{divisi:slug}', [PostController::class, 'sortDivisi']);
Route::get('/{post:slug}', [PostController::class,'show']);
