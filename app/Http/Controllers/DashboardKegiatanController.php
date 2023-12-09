<?php

namespace App\Http\Controllers;

use App\Models\divisi;
use App\Models\Galery;
use App\Models\Kegiatan;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
// use App\Http\Controllers\Str;
use Illuminate\Support\Str;

use Symfony\Component\HttpFoundation\Test\Constraint\ResponseFormatSame;

class DashboardKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kegiatan.index',[
            'kegiatan' => Kegiatan::latest('tanggal')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kegiatan.create',[
            'divisi' => divisi::all(),
            'galery' => Galery::all()
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
        // ddd($request);
    // Melakukan validasi data yang diterima dari request
    $validatedData = $request->validate([
        'nama' => ['required','max:255'],
        'slug' => ['required','unique:kegiatans'],
        'gambar' => ['image','file','max:10240'],
        'divisi_id' => ['required'],
        'galery_id' => ['nullable'],
        'body_text' => ['required'],
        'tanggal' => ['required']
    ]);

    if($request->file('gambar')){
        $validatedData['gambar'] = $request->file('gambar')->store('gambar-kegiatan');
    }

    // Menggunakan fungsi Str::limit untuk membuat excerpt dari body_text dengan batasan 200 karakter
    $validatedData['excerpt'] = Str::limit(strip_tags($request->body_text), 200);

    // Membuat entitas Kegiatan baru dengan menggunakan metode create dari model Kegiatan
    Kegiatan::create($validatedData);

    // Redirect ke halaman '/dashboard/kegiatan' dengan pesan sukses
    return redirect('/dashboard/kegiatan')->with('success', 'Data Kegiatan '.$validatedData['nama'].' Berhasil ditambahkan, bos!!!');
}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.show',[
            'kegiatan' => $kegiatan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit',[
            'divisi' => divisi::all(),
            'kegiatan' => $kegiatan,
            'galery' => Galery::all()
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        // Mendefinisikan aturan validasi untuk data yang akan diupdate
        $rules = [
            'nama' => ['required','max:255'],
            'divisi_id' => ['required'],
            'galery_id' => ['nullable'],
            'body_text' => ['required'],
            'tanggal' => ['required']
        ];

        // Memeriksa apakah nilai slug yang dimasukkan dalam request berbeda dengan slug yang sudah ada
        if($request->slug != $kegiatan->slug){
            // Jika berbeda, tambahkan aturan validasi untuk memastikan slug baru bersifat unik di dalam tabel 'kegiatans'
            $rules['slug'] = 'required|unique:kegiatans';
        }

        // Melakukan validasi data berdasarkan aturan yang sudah ditentukan
        $validatedData = $request->validate($rules);

        // Menggunakan fungsi Str::limit untuk membuat excerpt dari body_text dengan batasan 200 karakter
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body_text), 200);

        // Melakukan update data Kegiatan berdasarkan ID
        Kegiatan::where('id', $kegiatan->id)
            ->update($validatedData);

        // Redirect ke halaman '/dashboard/kegiatan' dengan pesan sukses
        return redirect('/dashboard/kegiatan')->with('success', 'Data '.$kegiatan->nama.' berhasil diedit, bos!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        Kegiatan::destroy($kegiatan->id);
        return redirect('/dashboard/kegiatan')->with('success', 'Data Kegiatan Berhasil Apus!!!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Kegiatan::class, 'slug', $request->nama);
        return response()->json(['slug'=> $slug]);
    }
}
