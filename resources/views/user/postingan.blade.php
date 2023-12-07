@extends('layout.main')
@section('container')

<div class="row mt-5">
    <div class="col-md-8 offset-md-2">
      <article>
        <header>
          <h1 class="mt-4">{{ $post->title }}</h1>
          <p class="lead">{{ $post->user->name }}   - Tanggal -
            <a class="text-decoration-none" href="/kategori/{{ $post->divisi->slug }}">
                Divisi {{ $post->divisi->nama }} </p>
            </a>
        </header>
        <hr>
        <img src="https://source.unsplash.com/800x400" class="img-fluid" alt="Gambar Postingan">
        <hr>
            <p class="justfy-text">{!! $post->body !!}</p>
        <hr>

      </article>
    </div>
  </div>
