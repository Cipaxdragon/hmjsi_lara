<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;
    use Sluggable;
    // Menyatakan bahwa kolom id tidak dapat diisi secara massal (mass-assignment protected).
    protected $guarded = ['id'];

    // Mendefinisikan relasi satu ke banyak dengan model Galery. Artinya, satu kegiatan dapat memiliki banyak galeri.
    public function galery(){
        return $this->hasMany(Galery::class);
    }

    // Menyatakan bahwa kegiatan ini dimiliki oleh satu divisi.
    public function divisi(){
        return $this->belongsTo(divisi::class);
    }

    // Mendefinisikan metode scope untuk melakukan filter pada query berdasarkan kriteria tertentu seperti pencarian dan divisi.
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

    // Metode ini digunakan untuk membatasi panjang teks dan menambahkan elipsis jika melebihi batas yang ditentukan.
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

    // Metode ini mengubah format tanggal menggunakan Carbon dan mengembalikan tanggal dalam format tertentu.
    public function tanggal($value)
    {
        // Ubah format tanggal menggunakan Carbon
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }

    // Menentukan bahwa atribut 'slug' akan digunakan sebagai kunci rute model.
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Memberikan konfigurasi untuk penggunaan trait Sluggable, yang membuat slug dari atribut 'nama'.
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    // Memeriksa apakah URL yang diberikan adalah URL gambar (dimulai dengan 'https://'). Mengembalikan true jika ya, false jika tidak.
    public function isImageURL($url) {
        $urlLower = strtolower($url); // Ubah ke huruf kecil untuk memastikan case-insensitive
        if (strpos($urlLower, 'https://') === 0) {
            return true;
        } else {
            return false;
        }
    }
    
}
