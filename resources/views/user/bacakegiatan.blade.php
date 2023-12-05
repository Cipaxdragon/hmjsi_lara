@extends('layout.main')
@section('container')
<br>
<br>
<br>
<br>
<style>
    .timeline {
        width: 2px;
        background-color: #333;
        height: 100%;
        position: absolute;
        left: 50%;
        margin-left: -1px;
    }

    .lingkaran {
        width: 17px;
        height: 17px;
        border-radius: 50%;
        background-color: rgb(255, 255, 255);
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        color: blue;
    }

    .jumbotron {
        background-image: url('https://source.unsplash.com/368x207?together');
        /* Ganti 'url_gambar_anda.jpg' dengan path gambar Anda */
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        padding: 100px 0;
        /* Sesuaikan padding sesuai kebutuhan */
    }

    .jumbotron h1 {
        font-size: 3.5rem;
    }

    .jumbotron p {
        font-size: 1.5rem;
        margin-top: 20px;
    }
</style>

<section class="">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <img src="{{$post->gambar}}" class="card-img-top" alt="Gambar Kegiatan">
                    <div class="card-body">
                        <h2 class="card-title">{{$post->nama}}</h2>

                        <p class="card-text"><small class="text-muted">{{ $post->tanggal($post->tanggal) }}</small><br><small class="text-muted">{{$post->divisi->nama}}</small></p>
                        <p class="card-text">
                            {!!$post->body_text!!}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
