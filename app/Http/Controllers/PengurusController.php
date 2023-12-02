<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index(){
        return view('user.pengurus',[
            'title' => 'pengurus',
            'pengurus' => pengurus::all(),
        ]);
    }

    public function pengursshow(){
        $divisi = divisi::with('pengurus')->latest()->get();
        $data =  pengurus::orderBy('divisi_id')->orderBy('jabatan')->get();
            return view('user.pengurus',[
                'title' => 'Pengurus',
                'pengurus' => $divisi,
            ]);
        }
}
