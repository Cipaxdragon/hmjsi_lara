<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class DasborGaleriKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galeri.index', [
            'galeri' => Galery::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galeri.create', [
            'kegiatan' => kegiatan::all(),
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commonRules = [
            'nama' => ['nullable'],
            'divisi_id' => ['nullable'],
        ];

        if ($request->link) {
            $validatedData = $request->validate([
                'link' => ['url'],
            ] + $commonRules);
        } else {
            $validatedData = $request->validate([
                'gambar' => ['image', 'max:10240', 'required'],
            ] + $commonRules);


            // Assign the file path or URL to 'link' based on your application logic
            $validatedData['link'] = $validatedData['gambar']->store('gambar-galeri');
        }
        Galery::create($validatedData);
        return redirect('/dashboard/galeri')->with('success', 'Data Galeri Berhasil ditambahkan ');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function show(Galery $galery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function edit(Galery $galery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galery $galery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galery  $galery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galery $galery)
    {
        dd($galery->id);
        Galery::destroy($galery->id);
        return redirect('/dashboard/galeri')->with('success', 'Data Galeri Berhasil Apus!!!');
    }
}
