@extends('layout.main')
@section('container')
   @foreach ($berita as $post)
   <div class="card mb-3" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $post['nama_berita'] }}</h5>
      <p class="card-text">{{ $post['isi'] }}</p>
      <a href="/postingan/{{ $post['slug'] }}" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
   @endforeach
   
@endsection