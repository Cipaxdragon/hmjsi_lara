<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class divisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function post(){
        return $this->hasMany(Post::class);
    }
    public function pengurus(){
            return $this->hasMany(Pengurus::class);
    }
    public function tanggal($value)
    {
        // Ubah format tanggal menggunakan Carbon
        return \Carbon\Carbon::parse($value)->format('d F Y');
    }

}
