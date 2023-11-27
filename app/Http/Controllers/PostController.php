<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\divisi;
use App\Models\Post;
use App\Models\Postingan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //mempersingkat excerpt
        $posts = Post::with('divisi')->latest()->get();

        return view('user/berita',[
            "title" => "berita",
            "post" => $posts,
            "kategori" => divisi::all()
        ]);
    }

    public function beranda(){
        //mengambil dari model kemudian mengurutkan yang terbaru lalu mengamil 3 biji
        $post = Post::with('divisi')->orderBy('created_at', 'desc')->take(3)->get();
        return view('user/beranda',[
            "title" => 'HMJ-SI',
            "post" => $post,
        ]);
    }

    public function showDivisi(divisi $divisi)
    {
        $posts = $divisi->post;
        return view('user.kategori', [
            'title' => $divisi->nama,
            'slug' => $divisi->slug,
            'post' => $posts,
            'kategori' => divisi::all(),
        ]);
    }

    public function sortDivisi(divisi $divisi)
        {
            $posts = $divisi->post;

            return view('user.berita', [
                'title' => $divisi->nama,
                'slug' => $divisi->slug,
                'post' => $posts,
                'kategori' => divisi::all(),
            ]);
        }



    public function show(Post $post){
        $randomData = Post::inRandomOrder()->take(3)->get(); // Mengambil 5 data secara acak


        return view('user/postingan',[
            "title" => $post->title,
            "post" => $post,
            "recent" => $randomData,
        ]);

    }
}
