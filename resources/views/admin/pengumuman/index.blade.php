@extends('admin.layout.main')

@section('container')
<h1 class="text-center mt-5">Pengumuman</h1>

<section>
    @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
    <a href="/dashboard/pengumuman/{{ $pengumuman->id ?? null}}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
    <br>
    <div class="border border-danger">
        {!!$pengumuman->code ?? null !!}
    </div>
</section>
@endsection
