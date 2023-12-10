<?php

namespace App\Http\Controllers;

use App\Models\kritik;
use Illuminate\Http\Request;

class DashboardKritikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.kritik.index', [
            'kritik' => kritik::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function show(kritik $kritik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function edit(kritik $kritik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kritik $kritik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kritik  $kritik
     * @return \Illuminate\Http\Response
     */
    public function destroy(kritik $kritik)
    {
        kritik::destroy($kritik->id);
        return redirect('/dashboard/kritik')->with('success', 'Data Kegiatan Berhasil Apus!!!');
    }
}
