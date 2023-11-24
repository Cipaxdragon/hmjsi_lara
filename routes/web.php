<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/beranda',[
        "title" => "beranda"
    ]);
});

Route::get('/berita', [PostController::class,'index']);

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


Route::get('/kategori/{category:slug}', function(Category $category){
    $posts = $category->post;
    $posts->each(function ($post) {
        $post->excerpt = Str::limit($post->excerpt, 66);
    });

    return view('user/kategori',[
        'title' => $category->nama,
        'slug' => $category->slug,
        'post' => $posts,
        'kategori' => Category::all(),
    ]);

    // return "tes";
});
Route::get('/{post:slug}', [PostController::class,'show']);
