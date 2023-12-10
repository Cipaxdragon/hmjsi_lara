<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Throttle;
use App\Models\kritik;
use Illuminate\Http\Request;

class KritikController extends Controller
{
    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'teks' => ['required'],
            'email' => ['email','required'],
        ]);
        kritik::create($validatedData);
        return redirect('/beranda#kritik')->with('success','Kritik Anda Berhasil Terkirim ');
    }
}
