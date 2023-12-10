@extends('admin.layout.main')

@section('container')

<style>
</style>
<div class="container px-5 mt-5 ">
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-4">{{ $kegiatan->nama }}</h1>

            <!-- Single kegiatan Title -->

            <div class="overflow-hidden mb-4 " style="height: 400px;">
                @if ($kegiatan->isImageURL($kegiatan->gambar))
                <img src="{{ $kegiatan->gambar }}" alt="Gambar kegiatan" class="img-fluid mb-4 w-100 object-fit-cover" >
            @else
                <img src="{{ asset('storage/'.$kegiatan->gambar) }}" alt="Gambar kegiatan" class="img-fluid mb-4 w-100 object-fit-cover" >
            @endif
            </div>
            <div class="" id="admin">
                <a href="/dashboard/kegiatan/{{ $kegiatan->slug }}" class="badge bg-primary"><i
                    class="bi bi-eye"></i></a>
                <a href="/dashboard/kegiatan/{{ $kegiatan->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/kegiatan/{{ $kegiatan->slug}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0 " onclick="return confirm('seriusko moko hapus ki?') " ><i class="bi bi-trash"></i></button>
                </form>
            </div>

            <!-- Tanggal dan Kategori -->
            <p class="text-muted">Tanggal: {{ $kegiatan->tanggal($kegiatan->tanggal) }} | Divisi: <a
                    href="#">{{ $kegiatan->divisi->nama }}</a></p>

            <!-- Body Text -->
            <p> {!! $kegiatan->body_text !!}</p>


        </div>

</div>
@endsection
