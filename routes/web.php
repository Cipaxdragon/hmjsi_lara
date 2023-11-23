<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});

Route::get('/berita', function () {
    return view('user/berita',[
        "title" => "berita"
    ]);
});

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




