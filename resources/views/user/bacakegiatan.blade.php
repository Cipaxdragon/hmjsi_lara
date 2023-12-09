@extends('layout.main')
@section('container')
    <style>
        body {
            padding-top: 56px;
            /* Adjusted for fixed navbar */
        }

        img {
            max-width: 100%;
            height: 100%;
        }
    </style>
    <div class="container px-5 mt-5 ">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="mb-4">{{ $post->nama }}</h1>
                <!-- Single Post Title -->

                <div class="overflow-hidden mb-4 " style="height: 400px;">
                    @if ($post->isImageURL($post->gambar))
                    <img src="{{ $post->gambar }}" alt="Gambar Post" class="img-fluid mb-4 w-100 object-fit-cover" >
                @else
                    <img src="{{ asset('storage/'.$post->gambar) }}" alt="Gambar Post" class="img-fluid mb-4 w-100 object-fit-cover" >
                @endif
                </div>


                <!-- Tanggal dan Kategori -->
                <p class="text-muted">Tanggal: {{ $post->tanggal($post->tanggal) }} | Divisi: <a
                        href="#">{{ $post->divisi->nama }}</a></p>

                <!-- Body Text -->
                <p> {!! $post->body_text !!}</p>

            </div>

            <!-- Sidebar (Optional) -->
            <!-- Sidebar (Optional) -->
            <!-- Recent Posts -->
            <div class="col-lg-4">
        <h2 class="mb-4">Postingan Lainnya</h2>

                @foreach ($recent as $item)
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://source.unsplash.com/368x207?together" class="img-fluid rounded-start"
                                    alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title fs-6"><a href="/postingan/{{$item->slug}}">{{ $item->title }}</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>



        </div>
    </div>
@endsection
