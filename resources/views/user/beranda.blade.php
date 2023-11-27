@extends('layout.main')

@section('container')
    <div class="container md-5 " id="header-hero-1">
        <div class="row  align-items-center g-5 py-5">
            <div class="col-lg-7">
                <h1 class="display-7 fw-bold ">Selamat datang di website</h1>
                <h1 class="display-4 fw-bold text-body-emphasis lh-1 mb-3">HMJ-Sistem Informasi</h1>
                <p class="lead">
                    Temukan informasi terbaru, termasuk berita dan kegiatan yang diadakan oleh Himpunan Mahasiswa Jurusan
                    Sistem Informasi. Lihat perkembangan terkini, serta konten-konten menarik di sini.</p>
            </div>

            <div class="col-10 col-sm-8 col-lg-5">
                <img src="https://getbootstrap.com/docs/5.3/examples/heroes/bootstrap-themes.png"
                    class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500"
                    loading="eager">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row d-flex">
            <div class="col-md-6 container">
                <h2 class="fw-bold">Apa itu HMJSI ?</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt velit ut orci malesuada, id
                    rhoncus tellus convallis. Vivamus nec fermentum quam.
                </p>
            </div>
            <div class="col-md-6 container">
                <img src="https://source.unsplash.com/300x300" alt="Gambar Fitur" class="img-fluid rounded">
            </div>
        </div>
    </div>

    {{-- //info penting --}}
    <div class="container my-5">
        <div class="position-relative p-5 text-center text-muted bg-body border border-dashed rounded-5">
            {{-- <button type="button" class="position-absolute top-0 end-0 p-3 m-3 btn-close bg-secondary bg-opacity-10 rounded-pill" aria-label="Close"></button> --}}
            <svg class="bi mt-5 mb-3" width="48" height="48">
                <use xlink:href="#check2-circle"></use>
            </svg>
            <h1 class="text-body-emphasis">Placeholder jumbotron</h1>
            <p class="col-lg-6 mx-auto mb-4">
                This faded back jumbotron is useful for placeholder content. It's also a great way to add a bit of context
                to a page or section when no content is available and to encourage visitors to take a specific action.
            </p>
            <button class="btn btn-primary px-5 mb-5" type="button">
                Call to action
            </button>
        </div>
    </div>
    <div class="container">
    <div class="row">
        @foreach ($post as $post)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="https://fakeimg.pl/600x400" class="card-img-top" alt="Gambar Berita 1">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ $post->divisi->slug }}</p>
                                <p class="card-date">25 November 2023</p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/{{ $post->slug }}" class="btn btn-primary">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    </div>
        @endforeach
    </div>
</div>
    


@endsection
