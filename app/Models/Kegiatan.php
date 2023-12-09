<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];

    public function galery(){
        return $this->hasMany(Galery::class);
    }


    public function scopeFilter($query, array $filters){

        $query->when($filters['search']?? false, function($query,$search){
            return $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('body_text', 'like', '%' . $search . '%');
        });

        $query->when($filters['divisi'] ?? false, function ($query, $divisi) {
            // Ganti divisi::all() dengan Eloquent query
            $query->whereHas('divisi', function ($query) use ($divisi) {
                $query->where('slug', $divisi);
            });

            // Pastikan memberikan nilai kembali $query
            return $query;
        });

    }


    public function divisi(){
        return $this->belongsTo(divisi::class);
    }
    public function batasi($text, $limit = 50) {
        // Memeriksa apakah teks lebih panjang dari batas yang ditentukan
        if (mb_strlen($text) > $limit) {
            // Mengambil sebagian teks sesuai dengan batas yang ditentukan
            $limitedText = mb_substr($text, 0, $limit);

            // Menambahkan tanda elipsis di akhir teks
            $limitedText .= '...';

            return $limitedText;
        }

        // Jika teks tidak melebihi batas, kembalikan teks asli
        return $text;
    }


    public function tanggal($value)
    {
        // Ubah format tanggal menggunakan Carbon
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }

    public function getRouteKeyName()
    {
        return 'slug';

    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function isImageURL($url) {
        $urlLower = strtolower($url); // Ubah ke huruf kecil untuk memastikan case-insensitive
        if (strpos($urlLower, 'https://') === 0) {
            return true;
        } else {
            return false;
        }
    }

}
