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
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 fw-bold">Pusat Informasi</h1>
            <p class="lead">Temukan berbagai Info info menarik tentang HMJ-SI </p>
        </div>
    </div>

    <section class="">

        <div class="container mt-5">
            <h1 class="my-3 text-center text-lg-start">Daftar Kegiatan</h1>

            <!-- //daftar Postingan -->
            <!-- Di halamaman Desktop -->
            <div id="desktopContent" class="content">

                <div class="row mb-2">
                    <div class="col-lg-10">
                        <div class="row my-4">
                            <div class="col offset-1">
                                <div class="nav-scroller py-1 mb-3 border-bottom">
                                    <nav class="nav nav-underline justify-content-between">
                                        <a class="nav-item nav-link  active" href="#">Kaderisasi</a>
                                        <a class="nav-item nav-link " href="#">Kominfo</a>
                                        <a class="nav-item nav-link " href="#">Keilmuan</a>
                                        <a class="nav-item nav-link " href="#">Humas</a>
                                        <a class="nav-item nav-link " href="#">Keslog</a>
                                    </nav>
                                </div>
                                <div class="col-1">

                                </div>
                            </div>

                        </div>
                        @foreach ($kegiatan as $item)
                        <div class="row mb-2 " style="min-height: 300px;">
                            <div class="col-lg-1 container fs-7 text-nowrap px-4 p-lg-0 mb-1">
                                {{$item->tanggal($item->tanggal)}}

                            </div>
                            <div
                                class="col-lg-1  d-flex flex-column justify-content-center align-items-center gap-1 p-0 mb-1">
                                <div class="d-flex flex-row">
                                    <div class="row ">
                                        <div class="col-4 ">
                                            <div class="lingkaran border-primary border border-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-3 border-end  h-100" style="color: rgb(236, 236, 236);"></div>
                            </div>
                            <div class="col-lg-4 mb-1">
                                <div class="container ">
                                    <img src="{{$item->gambar}}" class="img-fluid w-100"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-1">

                                <div class="card">
                                    <div class="card-header">
                                        {{$item->divisi->nama}}
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{$item->nama}}</h5>
                                        <p class="card-text">{{$item->body_text}}
                                        </p>
                                        <a href="kegiatan/{!!$item->slug!!}" class="">Baca selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- Col Kedua -->
                    <div class="col-lg-2">
                        <h2 class="fs-4 mb-3">Arsip</h2>
                        <div class="list-group">
                            <!-- Post 1 -->
                            <a href="#" class="list-group-item list-group-item-action">
                                <h6 class="mb-0 fs-6">Lyric Mars HMJSI</h6>
                            </a>

                            <!-- Post 2 -->
                            <a href="#" class="list-group-item list-group-item-action">
                                <h6 class="mb-0 fs-6">Prestasi</h6>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">
                                <h6 class="mb-0 fs-6">gbho</h6>
                            </a>

                            <!-- Tambahkan list-item untuk post lainnya sesuai kebutuhan -->
                        </div>

                    </div>


                </div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div id="mobileContent" class="content">
                <div class="container mt-5 p-5">
                    <div class="row">
                        @foreach ($kegiatan as $item)
                        <!-- Kegiatan 1 -->
                        <div class="col-md-4">
                            <div class="card mb-4 shadow-sm">
                                <img src="https://source.unsplash.com/368x207?together" class="card-img-top"
                                    alt="Kegiatan 1">
                                <div class="card-body">
                                    <h5 class="card-title">Judul Kegiatan 1</h5>
                                    <p class="card-text">Ini adalah cuplikan kegiatan 1. Deskripsi singkat kegiatan
                                        berlangsung.</p>
                                    <p class="card-text"><small class="text-muted">Tanggal: 01 Januari 2023</small></p>
                                    <p class="card-text"><small class="text-muted">Divisi: Keslog</small></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="container  p-5">
                    <div class="col-lg-2">
                        <h2 class="fs-6 mb-3 text-center">Recent Posts</h2>
                        <div class="list-group">
                            <!-- Post 1 -->
                            <a href="#" class="list-group-item list-group-item-action">
                                <h6 class="mb-0 fs-6">Judul Post 1</h6>
                            </a>

                            <!-- Post 2 -->
                            <a href="#" class="list-group-item list-group-item-action">
                                <h6 class="mb-0 fs-6">Judul Post 2</h6>
                            </a>

                            <!-- Tambahkan list-item untuk post lainnya sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="my-3 text-center text-lg-start">Artikel</h1>


            <div class="row  ">
                <div class="col-lg-3 col mb-4 animated-element">
                    <div class="container d-flex justify-content-center align-items-center ">
                        <div class="card shadow hover-scale overflow-hidden " style="width: 18rem;">
                            <div class="overflow-hidden" style="width: 100%;">
                                <img class="object-fit-cover img-fluid " src="https://source.unsplash.com/300x158?white"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body overflow-hidden ">
                                <a href="" class="badge bg-secondary text-white  fw-light">kaderisasi</a>
                                <h5 class="card-title fs-6 my-2">
                                    <a href="" class="text-black">
                                        Kenapa Diki Beku
                                    </a>
                                </h5>
                                <p class="card-text">Ajang Pemukulan Buang buang waktu

                                <h6 class="card-subtitle mb-2 text-muted fw-light fs-6">2 jam yang lalu </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col mb-4 animated-element">
                    <div class="container d-flex justify-content-center align-items-center ">
                        <div class="card shadow hover-scale overflow-hidden " style="width: 18rem;">
                            <div class="overflow-hidden" style="width: 100%;">
                                <img class="object-fit-cover img-fluid " src="https://source.unsplash.com/300x158?white"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body overflow-hidden ">
                                <a href="" class="badge bg-secondary text-white  fw-light">kaderisasi</a>
                                <h5 class="card-title fs-6 my-2">
                                    <a href="" class="text-black">
                                        Kenapa Diki Beku
                                    </a>
                                </h5>
                                <p class="card-text">Ajang Pemukulan Buang buang waktu

                                <h6 class="card-subtitle mb-2 text-muted fw-light fs-6">2 jam yang lalu </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col mb-4 animated-element">
                    <div class="container d-flex justify-content-center align-items-center ">
                        <div class="card shadow hover-scale overflow-hidden " style="width: 18rem;">
                            <div class="overflow-hidden" style="width: 100%;">
                                <img class="object-fit-cover img-fluid " src="https://source.unsplash.com/300x158?white"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body overflow-hidden ">
                                <a href="" class="badge bg-secondary text-white  fw-light">kaderisasi</a>
                                <h5 class="card-title fs-6 my-2">
                                    <a href="" class="text-black">
                                        Kenapa Diki Beku
                                    </a>
                                </h5>
                                <p class="card-text">Ajang Pemukulan Buang buang waktu

                                <h6 class="card-subtitle mb-2 text-muted fw-light fs-6">2 jam yang lalu </h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col mb-4 animated-element">
                    <div class="container d-flex justify-content-center align-items-center ">
                        <div class="card shadow hover-scale overflow-hidden " style="width: 18rem;">
                            <div class="overflow-hidden" style="width: 100%;">
                                <img class="object-fit-cover img-fluid " src="https://source.unsplash.com/300x158?white"
                                    alt="Card image cap">
                            </div>
                            <div class="card-body overflow-hidden ">
                                <a href="" class="badge bg-secondary text-white  fw-light">kaderisasi</a>
                                <h5 class="card-title fs-6 my-2">
                                    <a href="" class="text-black">
                                        Kenapa Diki Beku
                                    </a>
                                </h5>
                                <p class="card-text">Ajang Pemukulan Buang buang waktu

                                <h6 class="card-subtitle mb-2 text-muted fw-light fs-6">2 jam yang lalu </h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </section>
    <script>
        // Fungsi untuk mendeteksi ukuran layar
        function checkScreenSize() {
            // Mendapatkan lebar layar
            var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

            // Mendapatkan elemen konten
            var mobileContent = document.getElementById('mobileContent');
            var desktopContent = document.getElementById('desktopContent');

            // Menentukan apakah harus menampilkan atau menyembunyikan konten berdasarkan ukuran layar
            if (screenWidth <= 992) { // Ganti angka 768 dengan nilai ambang batas ukuran layar mobile yang diinginkan
                mobileContent.style.display = 'block';
                desktopContent.style.display = 'none';
            } else {
                mobileContent.style.display = 'none';
                desktopContent.style.display = 'block';
            }
        }

        // Menjalankan fungsi saat halaman dimuat dan saat ukuran layar berubah
        window.onload = checkScreenSize;
        window.onresize = checkScreenSize;
    </script>
@endsection
