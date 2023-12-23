@extends('layout.main')
@section('container')
    <main class="container">
        <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
            <div class="col-lg-6 px-0">
                <h1 class="display-4 fst-italic">Berita</h1>
                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
                    about what’s most interesting in this post’s contents.</p>
            </div>
        </div>
        <div class="nav-scroller py-1 mb-3 border-bottom">
            <nav class="nav nav-underline justify-content-between">
                @foreach ($kategori as $item)
                    <a class="nav-item nav-link link-body-emphasis  "
                        href="/kategori/{{ $item->slug }}">{{ $item->nama }}</a>
                @endforeach
            </nav>
        </div>
        <div class="row mb-2">`
            @foreach ($post as $post)
                <div class="col-md-6">
                    <div
                        class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary-emphasis">{{ $post->divisi->slug }}</strong>
                            <h3 class="mb-0">{{ $post->title }}</h3>
                            <div class="mb-1 text-body-secondary">{{ $post->created_at->diffForHumans() }}</div>
                            <p class="card-text mb-auto">{{ $post->excerpt }}</p>
                            <a href="/{{ $post->slug }}"
                                class="icon-link gap-1 icon-link-hover stretched-link text-decoration-none">
                                Baca Selengkapnya
                                <svg class="bi">
                                    <use xlink:href="#chevron-right"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="https://source.unsplash.com/1600x900" class="img-fluid" alt="tes">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
