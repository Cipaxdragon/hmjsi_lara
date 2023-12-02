<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function divisi(){
            return $this->belongsTo(divisi::class);
        }

}
