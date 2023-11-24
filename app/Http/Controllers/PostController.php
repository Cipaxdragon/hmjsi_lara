<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Postingan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('user/berita',[
            "title" => "berita",
            "post" => Post::all()
        ]);
    }
    public function show(Post $post){
        return view('user/postingan',[
            "title" => $post->title,
            "post" => $post,
        ]);

    }
}
