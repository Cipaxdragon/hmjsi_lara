<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kegiatan(){
        return $this->belongsTo(Kegiatan::class);
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

