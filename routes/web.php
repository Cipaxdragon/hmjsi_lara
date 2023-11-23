<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});

Route::get('/berita', [PostController::class,'index']);
Route::get('/postingan/{id}', [PostController::class,'singlepost']);

Route::get('/pengurus', function () {
    return view('user/pengurus',[
        "title" => "pengurus"
    ]);
});

Route::get('/tentang', function () {
    return view('user/tentang',[
        "title" => "tentang"
    ]);
});

Route::fallback(function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});




