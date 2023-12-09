<!DOCTYPE html>
<html lang="ID">

<head>
    <link rel="stylesheet" href="/icon/bootstrap-icons.css">
    <link rel="stylesheet" href="..\css\mobile.css">
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap"
        rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Selamat datang di website resmi Himpunan Mahasiswa Jurusan Sistem Informasi Fakultas Sains dan Teknologi, Universitas Negeri Alauddin Makassar. Kami adalah wadah bagi para mahasiswa yang memiliki minat dan kecintaan terhadap teknologi informasi. Temukan informasi terbaru mengenai kegiatan, acara, dan prestasi kami di sini. Saksikan dedikasi kami dalam mengembangkan potensi mahasiswa serta mendukung pertumbuhan dan inovasi di bidang sistem informasi. Bergabunglah dengan kami untuk merasakan atmosfer kolaboratif dan progresif di komunitas kami. Jelajahi lebih lanjut untuk mengetahui peran kami dalam membentuk generasi penerus yang unggul di dunia teknologi. Terima kasih atas kunjungan Anda!">
    <title>{{{$title}}}</title>
    <link rel="shortcut icon"
        href="https://cdn.discordapp.com/attachments/1152085105641279519/1178314168961597520/LOGO_SI.png?ex=6575b195&amp;is=65633c95&amp;hm=caef25a36e2040c0cee7fb70399dd710c55234541efbc5de523029d0136af56f&amp;"
        type="image/x-icon">
</head>

<body>
    @include('partials.navbar')
    <div class="container-fluid p-0">
        @yield('container')
    </div>
    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
    <script src="..\boostrap\js\bootstrap.bundle.js"></script>

    <script>
document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.querySelector('.navbar');

    // Fungsi untuk menangani perubahan kelas navbar saat menggulir
    function handleScroll() {
        var scrollPosition = window.scrollY;

        // Tentukan nilai batas scroll untuk perubahan kelas
        var scrollThreshold = 300;

        // Tambah atau hapus kelas 'bg-white' dan 'shadow' berdasarkan posisi scroll
        if (scrollPosition > scrollThreshold) {
            navbar.classList.add('bg-white', 'shadow');
        } else {
            navbar.classList.remove('bg-white', 'shadow');
        }
    }

    // Tambahkan event listener untuk peristiwa scroll
    window.addEventListener('scroll', handleScroll);
});

    </script>
</body>

</html>
