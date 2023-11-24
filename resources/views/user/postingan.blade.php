@extends('layout.main')
@section('container')

<div class="row">
    <div class="col-md-8 offset-md-2">
      <article>
        <header>
          <h1 class="mt-4">{{ $post->title }}</h1>
          <p class="lead">Penulis Gazali   - Tanggal -
            <a href="/kategori/{{ $post->category->slug }}">
                Divisi {{ $post->category->nama }} </p>
            </a>
        </header>
        <hr>
        <img src="https://via.placeholder.com/800x400" class="img-fluid" alt="Gambar Postingan">
        <hr>
        <p class="justfy-text">{!! $post->body !!}</p>
        <hr>
        <div class="mb-4">
          <a href="#" class="btn btn-primary">Kategori</a>
          <a href="#" class="btn btn-secondary">Tag</a>
          <!-- Tambahkan tombol atau informasi lain sesuai kebutuhan -->
        </div>
      </article>
    </div>
  </div>
@endsection
