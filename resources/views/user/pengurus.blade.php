@extends('layout.main')
@section('container')
<section class="mt-5">
   <div class="container p-5 ">
      <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Pengurus Himpunan Periode 2023-2024</h3>
      <div class="row " style="color: #1245ba;">
         <div class="col-lg-4 rounded order-lg-1 mb-5  animated-element">
            <div
               class="position-relative hover-scale rounded overflow-hidden d-flex flex-column justify-content-center align-items-center">
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
               class="position-relative hover-scale rounded overflow-hidden d-flex justify-content-center d-flex flex-column justify-content-center align-items-center">
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
            <div
               class="position-relative hover-scale rounded d-flex flex-column justify-content-center align-items-center">
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
   </div>
</section>
@foreach ($pengurus as $item)
<section class=" {{ $item->id % 2 === 1 ? 'bg-body-tertiary' : '' }} p-5">
   <div class="container">
      <div class="row">
         <div
            class="col-lg-3 text-start d-flex justify-content-start align-items-center align-items-lg-start flex-column">
            <h1 class="text-center text-lg-start mb-4 fw-bold text-primary p-0">Divisi {{ $item->nama }}
            </h1>
            <p class="text-center text-lg-start">{{ $item->deksripsi }}
            </p>
         </div>
         <div class="col-lg-9">
            <div class="row p-lg-0 ">
               <div class="col-lg-2"></div>
               @foreach ($item->pengurus->whereBetween('jabatan', [1, 2]) as $ketua)
               <div class="col-lg-4   p-lg-3 p-3 mb-1">
                  <div class="card overflow-hidden shadow position-relative border-bottom border-5 ">
                     <div class="card-img d-flex justify-content-center align-items-center  hover-scale">
                        <img src="{{ $ketua->gambar }}" class="img-fluid h-100" alt="">
                     </div>
                     <div class="card-title position-absolute top-100 start-50  translate-middle d-flex justify-content-center align-items-center flex-column"
                        style="top: 90% !important;">
                        <h5
                           class="card-title text-nowrap text-center rounded bg-white  fw-bold d-block px-3 py-1 text-primary d-inline-block border-bottom border-5 border-secondary ">
                           {{ $ketua->nama }}
                        </h5>
                        <h5
                           class="fs-8 rounded bg-white text-center  text-nowrap  px-2  text-primary d-inline-block border-bottom border-5 border-secondary">
                           {{ $ketua->jabatan === 1 ? 'Ketua Divisi' : 'Wakil Ketua Divisi' }}
                        </h5>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="row p-lg-0 ">
               <h5 class="text-center  mb-4 fw-bold text-primary p-0 mb-5">Anggota</h5>
               @foreach ($item->pengurus->where('jabatan', 3) as $anggota)
               <div class="col-lg-3 col-6 p-0 m-0 p-lg-2  mb-5">
                  <div class="card overflow-hidden shadow position-relative border-bottom border-5 ">
                     <div
                        class="card-img d-flex justify-content-center align-items-center   hover-scale">
                        <img src="{{ $anggota->gambar }}" class="img-fluid h-100" alt="">
                     </div>
                     <div class="card-title position-absolute top-100 start-50  translate-middle"
                        style="top: 90% !important;">
                        <h5
                           class="card-title text-nowrap text-center rounded bg-white fw-bold d-block p-1 text-primary d-inline-block border-bottom border-2 border-secondary fs-7 ">
                           {{ $anggota->nama }}
                        </h5>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</section>
@endforeach
<section>
   <div class="container">
      <h1 class="text-center display-5 mb-4 fw-bold text-primary p-0">Dewan Pertimbangan Organisasi</h1>
      <div class="row p-5">
         <div class="col-lg-3 offset-lg-1 mb-5">
            <div class="card overflow-hidden shadow position-relative border-bottom border-5 border-primary"
               style="height: 300px">
               <div class="card-img d-flex justify-content-center align-items-center  hover-scale">
                  <img src="https://cdn.discordapp.com/attachments/1152085105641279519/1180470386664677466/image.png?ex=657d89b8&is=656b14b8&hm=891b61a7bb4cee329a0efd979611be43ba2d8179eedea1e49e45dee9476e1ab9&"
                     class="img-fluid h-100" alt="">
               </div>
               <div class="card-title position-absolute top-100 start-50  translate-middle d-flex justify-content-center align-items-center flex-column"
                  style="top: 90% !important;">
                  <h5
                     class="card-title text-nowrap text-center rounded bg-white px-3 py-1  fw-bold d-block p-1 text-primary d-inline-block border-bottom border-5 border-secondary">
                     Muhammad Fauzan
                  </h5>
               </div>
            </div>
         </div>
         <div class="col-lg-4  mb-5">
            <div class="card overflow-hidden shadow position-relative border-bottom border-5 border-primary"
               style="height: 400px">
               <div class="card-img d-flex justify-content-center align-items-center  hover-scale">
                  <img src="https://cdn.discordapp.com/attachments/1152085105641279519/1180469312843153468/image.png?ex=657d88b8&is=656b13b8&hm=939232fa8abd92a02f5e26792f7a7b434f37f5fa36b301fe3ee587fc8a9d24a9&"
                     class="img-fluid h-100" alt="">
               </div>
               <div class="card-title position-absolute top-100 start-50  translate-middle d-flex justify-content-center align-items-center flex-column"
                  style="top: 90% !important;">
                  <h5
                     class="card-title text-nowrap text-center rounded bg-white px-3 py-1  fw-bold d-block p-1 text-primary d-inline-block border-bottom border-5 border-secondary">
                     Adly Alqardawi
                  </h5>
               </div>
            </div>
         </div>
         <div class="col-lg-3  mb-5">
            <div class="card overflow-hidden shadow position-relative border-bottom border-5 border-primary"
               style="height: 300px">
               <div class="card-img d-flex justify-content-center align-items-center  hover-scale">
                  <img src="https://cdn.discordapp.com/attachments/1152085105641279519/1180471035552870410/image.png?ex=657d8a52&is=656b1552&hm=be5a1a7beebe90cea747ee3a1b1d26232837bc29275b9ad6bc8b511ad3926ea7&"
                     class="img-fluid h-100" alt="">
               </div>
               <div class="card-title position-absolute top-100 start-50  translate-middle d-flex justify-content-center align-items-center flex-column"
                  style="top: 90% !important;">
                  <h5
                     class="card-title text-nowrap text-center rounded bg-white px-3 py-1  fw-bold d-block p-1 text-primary d-inline-block border-bottom border-5 border-secondary">
                     Andi Tenri Awaru
                  </h5>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
    <div class="container">
       <h1 class="text-center display-5 mb-4 fw-bold text-primary p-0">Demisioner Ketua HMJ-SI</h1>

       <div class="row p-5">
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797251293749328/13.png?ex=6579f01e&is=65677b1e&hm=01d1234054dbb0d0596dc5366c50acfd2cea1bef025b0074ad34929759b49698&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797252237480047/2014.png?ex=6579f01e&is=65677b1e&hm=c941c11f1c57c44e89cf4ff7dbd312fcd16a766b6d3957517d55ec4e6656e8a2&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797253667725363/2015.png?ex=6579f01f&is=65677b1f&hm=cf01e500c6fc604dd208a10f96e8cd4000e5bfbe4b25acafad0cd663bb446e41&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797254821163058/2016.png?ex=6579f01f&is=65677b1f&hm=4bcffbac69009557beba9cf43475046b2c4b7a56fbbc35715e464a4c4ad0df71&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797255962009600/2017.png?ex=6579f01f&is=65677b1f&hm=5f633ffb3aaac51540ca408a1fddc66331543f3a8584b2feb73285a55a856a39&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797256968654908/2018.png?ex=6579f020&is=65677b20&hm=201ac07104499d25550e14c8757f1b02f6e2ad09fb369578c871cc5cedbce4dc&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797258189185064/2019.png?ex=6579f020&is=65677b20&hm=c14501a72600dbe17b3cf57591dd2684971bcb6ee6dd7335c52ef40166ecad0d&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797259309064324/2020.png?ex=6579f020&is=65677b20&hm=ecab3e86b64bc4db0278bacb37c44aa00a7a4ec98c99426485cb63c6494ce9d0&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>

          <div class="col-lg-3 offset-lg-3 mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797260336672858/2021.png?ex=6579f020&is=65677b20&hm=f0ddcc92ee2e85794309216db713adca4cabfaf46b1d59f7622ca0e8eb08b921&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
          <div class="col-lg-3  mb-5">
             <div class="card rounded shadow  overflow-hidden">
                <img
                   src="https://cdn.discordapp.com/attachments/1152085105641279519/1166797261259427900/2022.png?ex=6579f021&is=65677b21&hm=c9146035e90a8d977cbfa4ac5c7bd5a6d5c01f2521f1278f6c4815188956c359&"
                   class="h-100  hover-scale" alt="">
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
