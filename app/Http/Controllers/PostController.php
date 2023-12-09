<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\divisi;
use App\Models\Kegiatan;
use App\Models\Post;
use App\Models\Postingan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('divisi')->latest()->get();

        $kegiatan = Kegiatan::with('divisi')->orderByDesc('tanggal');

        return view('user/kegiatan', [
            "title" => "Informasi",
            "post" => $posts,
            "berhasil" => "berhasil",
            "kegiatan" => $kegiatan->filter(request(['search','divisi']))->paginate(5),
            "kategori" => Divisi::all()
        ]);
    }
    public function KegiatanDivisi(divisi $divisi)
    {
        $divisi->nama;
        $posts = Post::with('divisi')->latest()->get();


        return view('user/kegiatan', [
            "title" =>  $divisi->slug,
            "post" => $posts,
            "kegiatan" => $divisi->kegiatan->sortBy('created_at'),
            "kategori" => Divisi::all()
        ]);
    }



    public function beranda(){
        //mengambil dari model kemudian mengurutkan yang terbaru lalu mengamil 3 biji
        $post = Kegiatan::with('divisi')->orderBy('created_at', 'desc')->take(4)->get();
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

    public function kegiatanShow(kegiatan $kegiatan){
        $randomData = Post::inRandomOrder()->take(3)->get(); // Mengambil 5 data secara acak
        return view('user/bacakegiatan',[
            "title" => $kegiatan->nama,
            "post" => $kegiatan,
            "recent" => $randomData,
        ]);
    }

    public function show(Post $post){
        $randomData = Post::inRandomOrder()->take(3)->get(); // Mengambil 5 data secara acak
        return view('user/`postingan`',[
            "title" => $post->title,
            "post" => $post,
            "recent" => $randomData,
        ]);
    }
}
