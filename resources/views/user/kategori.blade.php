@extends('layout.main')
@section('container')
 <h1>Kategori {{$category}} </h1>
    <div class="row">
        @foreach ($post as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://fakeimg.pl/600x400" class="card-img-top" alt="Gambar Berita 1">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <p class="card-date">25 November 2023</p>
                        <a href="/{{ $post->slug }}" class="btn btn-primary">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
