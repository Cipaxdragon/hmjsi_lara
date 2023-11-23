<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});

Route::get('/berita', function () {
    $berita = [
        [
            'nama_berita' => 'HMJ Dibekukan',
            'tanggal' => 30,
            'slug' => "hmj-dibekukan",
            'isi' => 'Mampus aowkowak',
        ],
        [
            'nama_berita' => 'HMJ Kembali',
            'tanggal' => 30,
            'slug' => "hmj-kembali",
            'isi' => 'Yoi Mara mara bu parida',
        ]
        
   
        ];
    return view('user/berita',[
        "title" => "berita",
        "berita" => $berita
    ]);
});

Route::get('postingan/{slug}', function($slug) {
    $berita = [
        [
            'nama_berita' => 'HMJ Dibekukan',
            'tanggal' => 30,
            'slug' => "hmj-dibekukan",
            'isi' => 'Mampus aowkowak',
        ],
        [
            'nama_berita' => 'HMJ Kembali',
            'tanggal' => 30,
            'slug' => "hmj-kembali",
            'isi' => 'Yoi Mara mara bu parida',
        ]
        
   
        ];
    $newpost = [];
    foreach($berita as $post){
        if($post['slug'] === $slug){
            $newpost = $post;
        }
    }

    return view('user/postingan',[
        "title" => $newpost['nama_berita'],
        "post" => $newpost
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

Route::fallback(function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});




