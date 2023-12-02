
@extends('layout.main')

@section('container')
<section>
    <div class="container p-5 animated-element mt-5">
        <div class="row">
            <div class="col-lg-4 ">
                <img src="img/!koin.gif" class="img-fluid mx-auto rounded-circle" alt="">
            </div>
            <div
                class="col-lg-5 offset-lg-3 d-flex flex-column justify-content-center align-items-start  mt-5 ">
                <h1 class="display-5  fw-bold mx-auto mx-lg-0 text-lg-start text-center">Himpunan Mahasiswa
                    Jurusan Sistem Informasi</h1>
                <p class="fs-6 text-sm-center md-5">Himpunan Mahasiswa Jurusan Sistem Informasi adalah suatu
                    wadah yang menampung mahasiswa Sistem Informasi yang mengatur jalannya roda organisasi yang
                    dihimpun dalam anggaran dasar dan anggaran rumah tangga untuk menciptakan suasanan kehidupan
                    organisasi yang kondusif dan dinamis
                </p>

            </div>
        </div>
    </div>
</section>
<section class="bg-body-tertiary d-flex align-items-center justify-content-center">
    <div class="container px-4 py-5 d-flex align-items-center justify-content-center" id="hanging-icons">
        <div class="row g-4 py-5">
            <div class="col-lg-4  offset-lg-2 d-flex align-items-start">
                <div class="icon-square d-lg-block d-none bg-light text-dark flex-shrink-0 me-3">
                    <svg width="30" height="30" viewBox="0 0 211 210" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M172.28 5.69407C171.96 4.40451 171.303 3.22309 170.377 2.27067C169.45 1.31825 168.288 0.629019 167.007 0.273492C165.727 -0.082034 164.376 -0.0910939 163.091 0.247239C161.806 0.585573 160.634 1.25915 159.695 2.19907L129.695 32.1991C128.78 33.1159 128.118 34.2541 127.774 35.5027C127.429 36.7513 127.414 38.0679 127.73 39.3241L133.13 60.9841C133.059 61.0531 132.989 61.1231 132.92 61.1941L97.0548 97.0591C95.0676 99.1917 93.9858 102.012 94.0372 104.927C94.0886 107.841 95.2693 110.622 97.3305 112.683C99.3917 114.745 102.172 115.925 105.087 115.977C108.002 116.028 110.822 114.946 112.955 112.959L148.85 77.1091C148.921 77.035 148.991 76.96 149.06 76.8841L170.705 82.2991C171.961 82.6147 173.278 82.5995 174.526 82.2552C175.775 81.9108 176.913 81.249 177.83 80.3341L207.83 50.3341C208.774 49.3954 209.451 48.2224 209.791 46.9356C210.132 45.6487 210.124 44.2944 209.768 43.0117C209.412 41.729 208.722 40.5641 207.767 39.6366C206.812 38.7091 205.627 38.0525 204.335 37.7341L178.7 31.3441L172.295 5.69407H172.28ZM109.76 11.3941C109.966 14.3696 108.982 17.3052 107.024 19.5555C105.066 21.8057 102.295 23.1864 99.3198 23.3941C83.6478 24.4802 68.617 30.0425 56.0134 39.4203C43.4098 48.798 33.7633 61.5968 28.22 76.296C22.6768 90.9952 21.4699 106.977 24.7428 122.342C28.0157 137.707 35.6307 151.809 46.683 162.973C57.7353 174.137 71.7603 181.894 87.0915 185.321C102.423 188.749 118.416 187.703 133.17 182.308C147.924 176.913 160.819 167.396 170.323 154.887C179.828 142.378 185.541 127.404 186.785 111.744C187.022 108.768 188.431 106.009 190.702 104.072C192.974 102.135 195.922 101.18 198.897 101.417C201.873 101.653 204.633 103.062 206.57 105.334C208.506 107.605 209.462 110.553 209.225 113.529C207.637 133.482 200.356 152.561 188.245 168.497C176.133 184.434 159.702 196.559 140.903 203.431C122.103 210.304 101.726 211.636 82.1921 207.269C62.658 202.901 44.7883 193.018 30.7059 178.794C16.6234 164.569 6.92029 146.601 2.74926 127.024C-1.42178 107.447 0.114613 87.0844 7.1759 68.355C14.2372 49.6256 26.5265 33.3168 42.5839 21.3664C58.6413 9.41588 77.7916 2.326 97.7598 0.939071C100.735 0.732991 103.671 1.71698 105.921 3.6747C108.171 5.63243 109.552 8.41863 109.76 11.3941ZM99.6798 60.8791C100.219 62.255 100.482 63.7236 100.453 65.201C100.424 66.6785 100.105 68.1358 99.5127 69.4897C98.9207 70.8437 98.0678 72.0677 97.0026 73.092C95.9375 74.1162 94.6809 74.9206 93.3048 75.4591C88.3855 77.3887 84.0246 80.5139 80.6162 84.552C77.2078 88.5902 74.8595 93.414 73.7835 98.5876C72.7074 103.761 72.9376 109.121 74.4532 114.184C75.9688 119.246 78.722 123.851 82.464 127.582C86.206 131.313 90.8188 134.053 95.8854 135.553C100.952 137.054 106.313 137.269 111.483 136.178C116.654 135.087 121.471 132.724 125.499 129.304C129.527 125.884 132.64 121.514 134.555 116.589C135.091 115.212 135.892 113.954 136.914 112.887C137.936 111.82 139.158 110.965 140.511 110.37C141.863 109.775 143.32 109.453 144.797 109.421C146.274 109.389 147.743 109.648 149.12 110.184C150.497 110.72 151.755 111.522 152.822 112.544C153.889 113.565 154.744 114.788 155.339 116.14C155.934 117.493 156.256 118.949 156.288 120.426C156.32 121.903 156.061 123.372 155.525 124.749C152.253 133.159 146.937 140.622 140.058 146.461C133.178 152.301 124.951 156.334 116.121 158.196C107.291 160.058 98.1363 159.689 89.4844 157.124C80.8325 154.559 72.9563 149.878 66.5678 143.505C60.1793 137.131 55.48 129.266 52.8947 120.62C50.3094 111.974 49.9196 102.821 51.7606 93.9862C53.6016 85.1519 57.6154 76.9157 63.4389 70.0222C69.2625 63.1287 76.7123 57.7953 85.1148 54.5041C87.8918 53.4201 90.9855 53.4827 93.7164 54.678C96.4473 55.8733 98.5921 58.1036 99.6798 60.8791Z"
                            fill="black" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-center text-lg-start">Visi </h2>
                    <p class="text-center text-lg-start">Mewujudkan HMJ-SI yang adaptif, atraktif dan solutif,
                        serta mampu menjadi wadah pemersatu, penampung aspirasi dan pengembangan diri mahasiswa
                        Sistem Informasi yang berlandaskan kekeluargaan.</p>

                </div>
            </div>
            <div class="col-lg-5  d-flex align-items-start">
                <div class="icon-square d-lg-block d-none bg-light text-dark flex-shrink-0 me-3">
                    <svg width="30" height="30" viewBox="0 0 230 230" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 41.5278C0 30.5139 4.37523 19.9512 12.1632 12.1632C19.9512 4.37523 30.5139 0 41.5278 0H188.472C199.486 0 210.049 4.37523 217.837 12.1632C225.625 19.9512 230 30.5139 230 41.5278V188.472C230 199.486 225.625 210.049 217.837 217.837C210.049 225.625 199.486 230 188.472 230H41.5278C30.5139 230 19.9512 225.625 12.1632 217.837C4.37523 210.049 0 199.486 0 188.472V41.5278ZM121.389 79.8611C121.389 85.1511 125.682 89.4444 130.972 89.4444H175.694C178.236 89.4444 180.674 88.4348 182.471 86.6375C184.268 84.8403 185.278 82.4028 185.278 79.8611C185.278 77.3194 184.268 74.8819 182.471 73.0847C180.674 71.2875 178.236 70.2778 175.694 70.2778H130.972C128.431 70.2778 125.993 71.2875 124.196 73.0847C122.399 74.8819 121.389 77.3194 121.389 79.8611ZM130.972 140.556C128.431 140.556 125.993 141.565 124.196 143.362C122.399 145.16 121.389 147.597 121.389 150.139C121.389 152.681 122.399 155.118 124.196 156.915C125.993 158.713 128.431 159.722 130.972 159.722H175.694C178.236 159.722 180.674 158.713 182.471 156.915C184.268 155.118 185.278 152.681 185.278 150.139C185.278 147.597 184.268 145.16 182.471 143.362C180.674 141.565 178.236 140.556 175.694 140.556H130.972ZM99.4111 73.8556C100.353 72.9782 101.108 71.9202 101.632 70.7447C102.155 69.5691 102.437 68.3001 102.46 67.0133C102.482 65.7266 102.246 64.4484 101.764 63.2551C101.282 62.0618 100.564 60.9779 99.6544 60.0678C98.7444 59.1578 97.6604 58.4404 96.4671 57.9584C95.2738 57.4764 93.9956 57.2397 92.7089 57.2624C91.4221 57.2851 90.1531 57.5668 88.9776 58.0906C87.802 58.6144 86.744 59.3696 85.8667 60.3111L67.0833 79.0944L61.0778 73.0889C59.2611 71.3961 56.8583 70.4745 54.3755 70.5183C51.8928 70.5621 49.524 71.5679 47.7682 73.3237C46.0123 75.0796 45.0066 77.4484 44.9628 79.9311C44.919 82.4138 45.8405 84.8167 47.5333 86.6333L60.3111 99.4111C62.108 101.206 64.5437 102.214 67.0833 102.214C69.6229 102.214 72.0587 101.206 73.8556 99.4111L99.4111 73.8556ZM99.4111 130.589C97.6142 128.794 95.1785 127.786 92.6389 127.786C90.0993 127.786 87.6635 128.794 85.8667 130.589L67.0833 149.372L61.0778 143.367C59.2611 141.674 56.8583 140.752 54.3755 140.796C51.8928 140.84 49.524 141.846 47.7682 143.602C46.0123 145.357 45.0066 147.726 44.9628 150.209C44.919 152.692 45.8405 155.094 47.5333 156.911L60.3111 169.689C62.108 171.484 64.5437 172.492 67.0833 172.492C69.6229 172.492 72.0587 171.484 73.8556 169.689L99.4111 144.133C101.206 142.336 102.214 139.901 102.214 137.361C102.214 134.822 101.206 132.386 99.4111 130.589Z"
                            fill="black" />
                    </svg>

                </div>
                <div>
                    <h2 class="text-center text-lg-start">Misi</h2>
                    <ul class="">
                        <li>Menumbuhkan rasa kekeluargaan dan solidaritas yang tinggi di dalam internal HMJ-SI.
                        </li>
                        <li>Mewujudkan anggota HMJ-SI yang aktif, inspiratif dan bertanggung jawab terhadap roda
                            kepengurusan.</li>
                        <li>Menjalin hubungan dan kerjasama atas dasar kekeluargaan dengan organisasi di dalam
                            atau di luar HMJ-SI.</li>
                        <li>Menjunjung tinggi profesionalitas demi terciptanya ruang kreativitas yang nyaman.
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<section style="min-height: 190px;">
    <div class="container p-5 animated-element mt-5">
        <div class="row">
            <div
                class="col-lg-5 order-lg-5 offset-lg-3 d-flex flex-column justify-content-center align-items-start  mt-5 md-5">
                <h1 class="display-5  fw-bold mx-auto mx-lg-0">Sejarah</h1>
                <p class="fs-6 text-sm-center ">Himpunan Mahasiswa Jurusan Sistem Informasi adalah suatu
                    wadah yang menampung mahasiswa Sistem Informasi yang mengatur jalannya roda organisasi yang
                    dihimpun dalam anggaran dasar dan anggaran rumah tangga untuk menciptakan suasanan kehidupan
                    organisasi yang kondusif dan dinamis
                </p>
            </div>
            <div class="col-lg-4 order-lg-1  d-flex justify-content-center align-items-center">
                <img src="img/Group 2157.png" class="img-fluid mx-auto " alt="">
            </div>
        </div>
    </div>
</section>

<!-- ;lates blog -->

<section class="bg-body-tertiary">
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
                        <img src="img/k_farid.png"
                            class="img-fluid object-fit-cover mx-auto w-100 h-100 rounded-2" alt="">
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
            <div class="gallery-item col-md-4">
                <img src="https://source.unsplash.com/500x500?white" alt="Image 1">
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
<section class="bg-body-tertiary">
    <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h2>Follow Us on Social Media HMJ-SI</h2>
                <p>Stay connected with us on our social media platforms for the latest updates.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center ">
                        <h5 class="card-title">Instagram</h5>
                        <img src="img/Group.png" width="100px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Follow us on Instagram <br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Facebook</h5>
                        <img src="img/pngwing.com.png" width="100px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Follow us on Facebook<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Youtube</h5>
                        <img src="img/icons8-youtube-96.png" width="130px" alt="Instagram Image"
                            class="img-fluid p-3">
                        <br><br>
                        <p class="card-text">Subscribe Juga Channel Youtube kami<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Subcribe
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">X</h5>
                        <img src="img/logo-black.png" width="100px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Follow us on X(Twitter)<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Spotify</h5>
                        <img src="img/Spotify_logo_without_text.svg.png" width="80px" alt="Instagram Image"
                            class="img-fluid ">
                        <br><br>
                        <p class="card-text">Ikuti Kami Juga di Spotify untuk mendengarkan SIPODCAST
                            <br>@HMJSI.UINAM
                        </p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">TIKTOK</h5>
                        <img src="img/tik-tok-logo-33078.png" width="80px" alt="Instagram Image"
                            class="img-fluid ">
                        <br><br>
                        <p class="card-text">Ikuti Kami di tiktok untuk konten<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
        </div>

</section>
<section class="">
    <div class="container mt-5 p-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 text-center">
                <h2>Follow Us untuk Social Media Lainnya</h2>
                <p>Stay connected with us on our social media platforms for the latest updates.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sisfo Store</h5>
                        <img src="img/sisfo_store.png" width="60px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Follow us on X(Twitter)<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sisfo Sport</h5>
                        <img src="img/sisfo_sport.jpg" width="80px" alt="Instagram Image"
                            class="img-fluid  rounded-circle">
                        <br><br>
                        <p class="card-text">Ikuti Kami Juga di Spotify untuk mendengarkan SIPODCAST
                            <br>@HMJSI.UINAM
                        </p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Classroom</h5>
                        <img src="img/clashroom.jpg" width="80px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Ikuti Kami di tiktok untuk konten<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>


        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Kreasi</h5>
                        <img src="img/logo_kreasi.jpg" width="100px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Follow us on X(Twitter)<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sisfo Fair</h5>
                        <img src="img/sisfo_fair._lgjpg.png" width="80px" alt="Instagram Image"
                            class="img-fluid rounded-circle">
                        <br><br>
                        <p class="card-text">Ikuti Kami Juga di Spotify untuk mendengarkan SIPODCAST
                            <br>@HMJSI.UINAM
                        </p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Family Gathering</h5>
                        <img src="img/famget.jpg" width="80px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Ikuti Kami Juga di Spotify untuk mendengarkan SIPODCAST
                            <br>@HMJSI.UINAM
                        </p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card border-bottom border-5 border-primary shadow hover-scale">
                    <div class="card-body text-center">
                        <h5 class="card-title">Sisfo Camp</h5>
                        <img src="img/sisfo_campp.jpg" width="100px" alt="Instagram Image" class="img-fluid ">
                        <br><br>
                        <p class="card-text">Follow us on X(Twitter)<br>@HMJSI.UINAM</p>
                        <a href="https://www.instagram.com/" target="_blank" class="btn btn-outline-primary ">
                            Follow
                        </a>
                    </div>
                </div>
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
                                        Farid Mufid <br><i class="bi bi-telephone-fill text-primary"></i> 0859
                                        6429
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
                                                stroke-linecap="butt" stroke-linejoin="miter"
                                                stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                                font-family="none" font-weight="none" font-size="none"
                                                text-anchor="none" style="mix-blend-mode: normal">
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
                                    <a href="mailto:hmj.si@uin-alauddin.ac.id"
                                        class="btn btn-primary">Hubungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container mt-5 px-5">
        <h3 class=" fw-bold mx-auto text-center mx-lg-0 mb-5">Berikan Kritik dan Saran</h3>
        <div class="row">
            <div class="col-lg-6  offset-lg-3">
                <form>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama:</label>
                        <input type="text" autocomplete="off" class="form-control" id="nama" name="nama"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" autocomplete="off" class="form-control" id="email" name="email"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="kritik" class="form-label">Kritik atau Saran:</label>
                        <textarea autocomplete="off" class="form-control" id="kritik" name="kritik" rows="4"
                            required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>

    </div>
</section>

@endsection
