<?php

use App\Http\Controllers\PengurusController;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class,'beranda']);
Route::get('/tentang', [PostController::class,'beranda']);
Route::get('/beranda', [PostController::class,'beranda']);

Route::get('/berita', [PostController::class,'index']);
Route::get('/pengurus', [PengurusController::class,'index']);

Route::fallback(function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});


Route::get('/kategori/{divisi:slug}', [PostController::class, 'showDivisi']);
Route::get('/{post:slug}', [PostController::class,'show']);
