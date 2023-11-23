<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user/beranda',);
});

Route::get('/berita', function () {
    return view('user/berita',);
});

Route::get('/pengurus', function () {
    return view('user/pengurus',);
});


