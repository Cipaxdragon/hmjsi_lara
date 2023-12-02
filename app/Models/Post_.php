<?php

namespace App\Models;


class Post
{
    private static $post = [
    [
        'nama_berita' => 'HMJ Dibekukan',
        'tanggal' => 30,
        'slug' => "hmj-dibekukan",
        'isi' => 'Mampus aowkowak aman lagi ana ana tapi kepengurusan yang pegang saat itu malu ki kodong',
    ],
    [
        'nama_berita' => 'HMJ Kembali',
        'tanggal' => 30,
        'slug' => "hmj-kembali",
        'isi' => 'Yoi nda tau apa na mau bilang ibu parida kodong sama rektorat karna nda ada hmjnya',
    ],
    [
        'nama_berita' => 'UIN Menghapuskan Organisasi',
        'tanggal' => 30,
        'slug' => "uin-hapus-organisasi",
        'isi' => 'Akhirnya mahasiswa jadi apatis semua okaowkao bisa mi fokus kuliah coy',
    ]  ]  ;

    public static function all(){
        return collect(self::$post);
    }

    public static function find($slug){
        $post = static::all();
        return $post->firstWhere('slug',$slug);
    }



}
