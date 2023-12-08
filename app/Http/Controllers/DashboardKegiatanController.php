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
        $validatedData = $request->validate([
            'nama' => ['required','max:255'],
            'slug' => ['required','unique:kegiatans'],
            'divisi_id' => ['required'],
            'galery_id' => ['nullable'],
            'galery_id' => ['nullable'],
            'body_text' => ['required'],
            'tanggal' => ['required']
        ]);

        $validatedData['excerpt'] = Str::limit( strip_tags($request->body_text) , 200 );

        Kegiatan::create($validatedData);

        return redirect('/dashboard/kegiatan')->with('success', 'Data Kegiatan Berhasil di tambahkan bos!!!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Kegiatan::class, 'slug', $request->nama);
        return response()->json(['slug'=> $slug]);
    }
}
