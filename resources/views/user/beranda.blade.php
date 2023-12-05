@extends('layout.main')
@section('container')
    <section id="header-hero-1">
        <div class="container my-5 text-cuy animated-element">
            <div class="row  align-items-center g-5 py-5 text-sm-center fw-normal text-sm-center "
                style=" padding-top: 250px !important; padding-bottom : 250px !important ">
                <div class="col-lg-7">
                    <h1 class="display-8 fs-3 fs ">Selamat datang di website</h1>
                    <h1 class="display-4 fw-bold w-100  lh-1 mb -3 ">HMJ-Sistem Informasi</h1>
                    <p class="lead text-start text-sm-center fs-6"> Temukan informasi terbaru, termasuk berita dan
                        kegiatan yang diadakan oleh Himpunan Mahasiswa Jurusan Sistem Informasi. Lihat perkembangan
                        terkini, serta konten-konten menarik di sini.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Apa Itu HMJ SI -->
    <!-- <div class="container"> <div class="row"> <div class=" col d-flex align-items-center"> <div class="container rounded" style="width: 100%;height: 5px; background-color: #1245ba;"></div> </div> <div class="col-1 d-flex align-items-center justify-content-center"> <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg"> <circle cx="17" cy="17" r="14.2955" fill="#FEFCFB" stroke="#1245ba" stroke-width="5.40909"/> </svg> </div> <div class="col d-flex align-items-center"> <div class="container rounded" style="width: 100%; height: 5px; background-color: 1245ba;"></div> </div> </div> </div> -->
    <section>
        <div class="container p-5 animated-element">
            <div class="row">
                <div class="col-lg-4  p-5 ">
                    <img src="img/LOGO SI.png" class="img-fluid mx-auto rounded-circle"
                        alt="">
                </div>
                <div
                    class="col-lg-5 offset-lg-3 d-flex flex-column justify-content-center align-items-start  mt-5 ">
                    <h1 class="display-5  fw-bold mx-auto mx-lg-0">Apa Itu HMJ-SI?</h1>
                    <p class="fs-6 text-sm-center md-5">Himpunan Mahasiswa Jurusan Sistem Informasi adalah suatu
                        wadah yang menampung mahasiswa Sistem Informasi yang mengatur jalannya roda organisasi yang
                        dihimpun dalam anggaran dasar dan anggaran rumah tangga untuk menciptakan suasanan kehidupan
                        organisasi yang kondusif dan dinamis
                    </p>
                    <div class="d-flex justify-content-start mx-auto mx-lg-0">
                        <a href="/tentang" class="btn btn-outline-primary d-inline-flex " type="button">
                            Kenali Kami Lebih lanjut
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid animated-element">
            <div class="text-center bg-body-tertiary rounded-3">
                <div class="container">
                    <div class="row">
                        <div
                            class="col-lg-6 d-flex flex-column align-items-center justify-content-center order-lg-5  my-5 rounded ">
                            <div class="container overflow-hidden " style="height: 400px;">
                                <img src="https://source.unsplash.com/1920x1080?white"
                                    class="img-fluid h-100 object-fit-cover rounded-5" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center my-5">
                            <h1 class="text-body-emphasis fw-bold">VSGA X HMJ</h1>
                            <p class="col-lg-8 mx-auto fs-5 text-muted">
                                This is a custom jumbotron featuring an SVG image at the top, some longer text that
                                wraps
                                early thanks to a responsive class, and a customized call to action.
                            </p>
                            <div class="d-inline-flex gap-2 ">
                                <button
                                    class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill fs-6"
                                    type="button">
                                    Segara Daftarkan dirimu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- ;lates blog -->
<section>
    <div class="container px-5 ">
        <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Kegiatan Terkini</h3>

        <div class="row ">
            @foreach ($post as $item)
            <div class="col-lg-3 col mb-4 animated-element" >
                <div class="container d-flex justify-content-center align-items-center ">
                    <div class="card shadow overflow-hidden " style="width: 18rem; ">
                        <div class="overflow-hidden" style="width: 100%;">
                            <img class="object-fit-cover img-fluid " src="https://source.unsplash.com/300x158?white"
                                alt="Card image cap">
                        </div>
                        <div class="card-body overflow-hidden ">
                            <a href="" class="badge bg-secondary text-white  fw-light">{{$item->divisi->nama}}</a>
                            <h5 class="card-title fs-6 my-2">
                                <a href="/kegiatan/{{$item->slug}}" class="text-black">
                                    {{$item->batasi($item->nama)}}
                                </a>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted fw-light fs-6">{{$item->created_at->diffForHumans()}} </h6>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="container d-flex justify-content-center align-items-center">
                <button type="" class="mx-auto btn btn-outline-primary"> Lihat lebih lengkap</button>
            </div>
        </div>
    </div>
</section>
<section class="bg-body-tertiary">
    <div class="container p-5 ">
        <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Pengurus Himpunan Periode 2023-2024</h3>
        <div class="row " style="color: #1245ba;">
            <div class="col-lg-4 rounded order-lg-1 mb-5  animated-element">
                <div
                    class="position-relative rounded overflow-hidden d-flex flex-column justify-content-center align-items-center">
                    <div
                        class="position-absolute bottom-0 p-3 bg-opacity-50 d-flex flex-column justify-content-center align-items-center">
                        <h1
                            class="fs-4 fw-bold text-center bg-white rounded-5 p-1 px-3 border-bottom border-primary border-3">
                            Ketua Himpunan
                        </h1>
                        <h5
                            class="fs-6 text-center bg-white rounded-5 p-1 px-3 border-bottom border-primary border-3 fw-bold">
                            Fajratul Ikhsan
                        </h5>
                    </div>
                    <div style="height: 400px; ">
                        <img src="img/Group 1970.png" class="img-fluid object-fit-cover w-100 h-100 rounded-5 "
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1 mb-5 animated-element">
                <div
                    class="position-relative rounded overflow-hidden d-flex justify-content-center d-flex flex-column justify-content-center align-items-center">
                    <div
                        class="position-absolute bottom-0 p-3 bg-opacity-50 d-flex flex-column justify-content-center align-items-center">
                        <h1
                            class="fs-4 fw-bold text-center bg-white rounded-5 p-1 px-3 border-bottom border-primary border-3">
                            Sekretaris
                        </h1>
                        <h5
                            class="fs-6 text-center bg-white rounded-5 p-1 px-3 border-bottom border-primary border-3 fw-bold">
                            Nur Farid Mufid
                        </h5>
                    </div>
                    <div class="d-flex justify-content-center" style="height: 400px;">
                        <img src="img/k_farid.png" class="img-fluid object-fit-cover mx-auto w-100 h-100 rounded-2"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 rounded over overflow-hidden mb-5 order-lg-5 animated-element">
                <div class="position-relative rounded d-flex flex-column justify-content-center align-items-center">
                    <div
                        class="position-absolute bottom-0 p-3 bg-opacity-50 d-flex flex-column justify-content-center align-items-center">
                        <h1
                            class="fs-4 fw-bold text-center bg-white rounded-5 p-1 px-3 border-bottom border-primary border-3">
                            Bendahara
                        </h1>
                        <h5
                            class="fs-6 fw-bold text-center bg-white rounded-5 p-1 px-3 border-bottom border-primary border-2">
                            Irma Suryiani
                        </h5>
                    </div>
                    <div style="height: 400px;">
                        <img src="img/kak_irma_1.png" class="img-fluid object-fit-cover w-100 h-100 rounded-2"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container d-flex justify-content-center align-items-center">
                <a href="/pengurus" class="mx-auto btn btn-outline-primary">Lihat selengkapnya</a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5">
        <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Galery</h3>

        <div class="gallery-container">
            <div class="gallery-item col-md-4 rounded ">
                <div class="overflow-hidden " style="width: 411px; height: 411px; ">
                    <img src="https://cdn.discordapp.com/attachments/1152085105641279519/1180512142340923513/DSC09925.JPG?ex=657db09b&is=656b3b9b&hm=80317ca7f5e87b3c3e8429e38307e602ed99f917f3578fbbd3812f4d14182b95&" class="object-fit-cover h-100" alt="Image 1">
                </div>
            </div>
            <div class="gallery-item col-md-4">
                <img src="https://source.unsplash.com/500x500?white" alt="Image 2">
            </div>
            <div class="gallery-item col-md-4">
                <img src="https://source.unsplash.com/500x500?white" alt="Image 3">
            </div>
            <div class="gallery-item col-md-4">
                <img src="https://source.unsplash.com/500x500?white" alt="Image 3">
            </div>
            <div class="gallery-item col-md-4">
                <img src="https://source.unsplash.com/500x500?white" alt="Image 3">
            </div>
            <div class="gallery-item col-md-4">
                <img src="https://source.unsplash.com/500x500?white" alt="Image 3">
            </div>
            <!-- Tambahkan item galeri sesuai kebutuhan -->
        </div>
        <div class="row mt-5">
            <div class="container d-flex justify-content-center align-items-center">
                <button type="" class="mx-auto btn btn-outline-primary"> Lihat lebih lengkap</button>
            </div>
        </div>
    </div>
</section>
<section class="bg-body-tertiary" style="min-height: 100px;">
    <div class="container p-5 ">
        <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Hubungi Kami</h3>
        <div class="row">
            <div class="col-lg-5  mb-4">
                <div class="row">
                    <div class="card h-100 shadow ">
                        <div class="card-body px-1 py-3" style="height: 175px;">
                            <div class="row">
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <div class="container  d-inline-block rounded-circle display-5">
                                        <i class="bi bi-whatsapp text-primary"></i>
                                    </div>
                                </div>
                                <div class="col rounded-1">
                                    <h5 class="card-title text-primary fw-bold">Via Whatsapp</h5>
                                    <p class="card-text fs-6 lh-lg"><i
                                            class="bi bi-person-fill text-primary"></i>Nur
                                        Farid Mufid <br><i class="bi bi-telephone-fill text-primary"></i> 0859 6429
                                        6474 <br>
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col offset-2">
                                    <a href="https://api.whatsapp.com/send/?phone=6285964296474&text&type=phone_number&app_absent=0"
                                        class="btn btn-primary">Hubungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 offset-lg-2 mb-4">
                <div class="row">
                    <div class="card h-100 shadow" style="height: 175px;">
                        <div class="card-body px-1 py-3 d-flex flex-column justify-content-between"
                            style="height: 175px;">
                            <div class="row">
                                <div class="col-2 d-flex align-items-center justify-content-center">
                                    <div class="container  d-inline-block rounded-circle display-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0,0,256,256">
                                            <g fill="#0c296f" fill-rule="nonzero" stroke="none" stroke-width="1"
                                                stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                                stroke-dasharray="" stroke-dashoffset="0" font-family="none"
                                                font-weight="none" font-size="none" text-anchor="none"
                                                style="mix-blend-mode: normal">
                                                <g transform="scale(5.12,5.12)">
                                                    <path
                                                        d="M12,23.403v-0.013v-13.001l-0.12,-0.089h-0.01l-2.73,-2.02c-1.67,-1.24 -4.05,-1.18 -5.53,0.28c-0.99,0.98 -1.61,2.34 -1.61,3.85v3.602zM38,23.39v0.013l10,-7.391v-3.602c0,-1.49 -0.6,-2.85 -1.58,-3.83c-1.46,-1.457 -3.765,-1.628 -5.424,-0.403l-2.876,2.123l-0.12,0.089zM14,24.868l10.406,7.692c0.353,0.261 0.836,0.261 1.189,0l10.405,-7.692v-13.001l-11,8.133l-11,-8.133zM38,25.889v15.111c0,0.552 0.448,1 1,1h6.5c1.381,0 2.5,-1.119 2.5,-2.5v-21.003zM12,25.889l-10,-7.392v21.003c0,1.381 1.119,2.5 2.5,2.5h6.5c0.552,0 1,-0.448 1,-1z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                                <div class="col">
                                    <h5 class="card-title">Via Email</h5>
                                    <p class="card-text fs-6 lh-lg">
                                        <i class="bi bi-inbox-fill text-primary"></i>
                                        hmj.si@uin-alauddin.ac.id
                                    </p>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col offset-2">
                                    <a href="mailto:hmj.si@uin-alauddin.ac.id" class="btn btn-primary">Hubungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section class="mb-0">
    <div class="container mt-5 px-5">
        <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Berikan Kritik dan Saran</h3>
        <div class="row">
            <div class="col-lg-6  offset-lg-3">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" autocomplete="off" class="form-control" id="nama" name="nama" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" autocomplete="off" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="kritik" class="form-label">Kritik atau Saran:</label>
                        <textarea autocomplete="off" class="form-control" id="kritik" name="kritik" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>

    </div>
</section>
@endsection
