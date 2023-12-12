@extends('layout.main')
@section('container')
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
   background-image: url('https://cdn.discordapp.com/attachments/1152085105641279519/1184042275064528917/ornament.png?ex=658a884c&is=6578134c&hm=1871738f3b6459f4608acd6e5cf5b0f27e906533cec126f26e2ddab21a173810&');
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
      <h1 class="my-3 text-center text-lg-start" id="head">Daftar Kegiatan</h1>
      <!-- //daftar Postingan -->
      <!-- Di halamaman Desktop -->
      @if (session()->has('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
  @endif
      <form action="/kegiatan">
         <div class="input-group mb-3">
            @if (request('divisi'))
            <input type="hidden" name="divisi" value="{{request('divisi')}}">
            @endif
            <input type="text" class="form-control" placeholder="cari kegiatan"
               aria-label="Cari" aria-describedby="basic-addon2" name="search"
               autocomplete="off" value="{{ request('search') }}">
            <div class="input-group-append">
               <button class="btn btn-outline-secondary  rounded-0 rounded-end-5" name="search" type="button">Cari</button>
            </div>
         </div>
      </form>
      <div class="nav-scroller py-1 mb-3 border-bottom">
         <nav class="nav nav-underline justify-content-between">
            <a class="nav-item nav-link {{request('divisi') === 'kaderisasi' ? 'active':''}} " href="{{request('divisi') === 'kaderisasi' ? '/kegiatan':'/kegiatan?divisi=kaderisasi'}}#head">Kaderisasi</a>
            <a class="nav-item nav-link {{request('divisi') === 'kominfo' ? 'active':''}} " href="{{request('divisi') === 'kominfo' ? '/kegiatan':'/kegiatan?divisi=kominfo'}}#head">Kominfo</a>
            <a class="nav-item nav-link {{request('divisi') === 'keilmuan' ? 'active':''}}" href="{{request('divisi') === 'keilmuan' ? '/kegiatan':'/kegiatan?divisi=keilmuan'}}#head">Keilmuan</a>
            <a class="nav-item nav-link {{request('divisi') === 'humas' ? 'active':''}}" href="{{request('divisi') === 'humas' ? '/kegiatan':'/kegiatan?divisi=humas'}}#head">Humas</a>
            <a class="nav-item nav-link {{request('divisi') === 'keslog' ? 'active':''}}" href="{{request('divisi') === 'keslog' ? '/kegiatan':'/kegiatan?divisi=keslog'}}#head">Keslog</a>
         </nav>
      </div>
      @if ($kegiatan->count())
      <div id="desktopContent" class="content">
         <div class="row mb-2">
            <div class="col-lg-10">
               <div class="row my-4">
                  <div class="col offset-1">
                     <div class="col-1">
                     </div>
                  </div>
               </div>
               @foreach ($kegiatan as $item)
               <div class="row mb-2 " style="min-height: 300px;">
                  <div class="col-lg-1 container fs-7 text-nowrap px-4 p-lg-0 mb-1">
                     {{ $item->tanggal($item->tanggal) }}
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
                        <div style="width: 318px;height: 218px;" class="overflow-hidden d-flex justify-content-center align-items-start rounded rounded-4">
                        @if ($item->isImageURL($item->gambar))
                            <img src="{{ $item->gambar }}" class="w-100 object-fit-cover rounded rounded-4" alt="">
                        @else
                            <img src="{{ asset('storage/'.$item->gambar) }}" class="w-100 object-fit-cover rounded rounded-4" alt="">
                        @endif
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 mb-1">
                     <div class="card">
                        <div class="card-header">
                           <a href="/kegiatan?divisi={{ $item->divisi->slug }}">
                           {{ $item->divisi->nama }}
                           </a>
                        </div>
                        <div class="card-body">
                           <a href="kegiatan/{{$item->slug}}">
                              <h5 class="card-title">{{ $item->nama }}</h5>
                           </a>
                           <p class="card-text">{{  $item->excerpt }}
                           </p>
                           <a href="kegiatan/{!! $item->slug !!}" class="">Baca
                           selengkapnya</a>
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
         <!-- Blade template for pagination -->

      </div>
      <div id="mobileContent" class="content">
         <div class="container mt-5 p-5">
            <div class="row">
               @foreach ($kegiatan as $item)
               <!-- Kegiatan 1 -->
               <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                    @if ($item->isImageURL($item->gambar))
                    <img src="{{ $item->gambar }}" class="card-img-top" alt="">
                @else
                    <img src="{{ asset('storage/'.$item->gambar) }}" class="card-img-top" alt="">
                @endif

                     <div class="card-body">
                        <p class="card-text"><small class="text-muted">  <a href="/kegiatan?divisi={{ $item->divisi->slug }}#head">
                            {{ $item->divisi->nama }}
                            </a></small></p>
                        <a href="kegiatan/{{$item->slug}}">
                            <h5 class="card-title">{{ $item->nama }}</h5>
                         </a>
                         <p class="card-text">{{ $item->excerpt }}
                        </p>
                        <p class="card-text"><small class="text-muted">{{ $item->tanggal($item->tanggal) }}</small></p>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>

         </div>

      </div>
      <nav aria-label="Page navigation example" id="paginate">
        <ul class="pagination justify-content-center">
           <!-- Previous Page Link -->
           @if ($kegiatan->onFirstPage())
           <li class="page-item disabled">
              <span class="page-link">Previous</span>
           </li>
           @else
           <li class="page-item">
              <a class="page-link" href="{{ $kegiatan->previousPageUrl() }}#head" rel="prev">Previous</a>
           </li>
           @endif
           <!-- Pagination Elements -->
           @for ($i = 1; $i <= $kegiatan->lastPage(); $i++)
           <li class="page-item {{ ($kegiatan->currentPage() == $i) ? 'active' : '' }}">
              <a class="page-link" href="{{ $kegiatan->url($i) }} #head">{{ $i }}</a>
           </li>
           @endfor
           <!-- Next Page Link -->
           @if ($kegiatan->hasMorePages())
           <li class="page-item">
              <a class="page-link" href="{{ $kegiatan->nextPageUrl() }}#head" rel="next">Next</a>
           </li>
           @else
           <li class="page-item disabled">
              <span class="page-link">Next</span>
           </li>
           @endif
        </ul>
     </nav>

      @else
      <h3 class="my-3 text-center mt-5 ">tidak ada data</h3>
      @endif
      {{-- <h1 class="my-3 text-center text-lg-start">Artikel</h1>
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
      </div> --}}
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
