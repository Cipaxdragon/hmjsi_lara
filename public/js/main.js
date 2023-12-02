// Jalankan fungsi setelah dokumen selesai dimuat
document.addEventListener("DOMContentLoaded", function () {
    // Dapatkan elemen carousel
    var myCarousel = document.getElementById("carouselExampleInterval");

    // Tambahkan event listener untuk mendeteksi perubahan slide
    myCarousel.addEventListener("slid.bs.carousel", function () {
        // Dapatkan elemen aktif
        var activeItem = myCarousel.querySelector(".carousel-item.active");

        // Atur opasitas item aktif ke 1 untuk efek fade
        activeItem.style.opacity = 1;
    });

    // Tambahkan event listener untuk mendeteksi sebelum slide berubah
    myCarousel.addEventListener("slide.bs.carousel", function () {
        // Dapatkan elemen aktif
        var activeItem = myCarousel.querySelector(".carousel-item.active");

        // Atur opasitas item aktif menjadi 0.5 saat slide berubah
        activeItem.style.opacity = 0.5;
    });
});


document.addEventListener('DOMContentLoaded', function() {
    var animatedElements = document.querySelectorAll('.animated-element');

    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    function handleScroll() {
        animatedElements.forEach(function(el) {
            if (isElementInViewport(el)) {
                el.classList.add('animated');
            }
        });
    }

    window.addEventListener('scroll', handleScroll);

    // Initial check
    handleScroll();
});

