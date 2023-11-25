<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class,'beranda']);
Route::get('/tentang', [PostController::class,'beranda']);
Route::get('/beranda', [PostController::class,'beranda']);

Route::get('/berita', [PostController::class,'index']);
Route::get('/pengurus', function () {
    return view('user/pengurus',[
        "title" => "pengurus"
    ]);
});

Route::fallback(function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});


Route::get('/kategori/{category:slug}', [PostController::class, 'showKategori']);
Route::get('/{post:slug}', [PostController::class,'show']);
