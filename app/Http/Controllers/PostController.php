<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Post;
use App\Models\Postingan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //mempersingkat excerpt
        $posts = Post::all();
        $posts->each(function ($post) {
            $post->excerpt = Str::limit($post->excerpt, 66);
        });

        return view('user/berita',[
            "title" => "berita",
            "post" => $posts,
            "kategori" => Category::all()
        ]);
    }

    


    public function show(Post $post){
        return view('user/postingan',[
            "title" => $post->title,
            "post" => $post,
        ]);

    }
}
