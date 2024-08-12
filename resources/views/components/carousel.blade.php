@php
    $slides = [
        'cover.png',
        'img-2.png',
        'img-3.png',
        'cover.png',
        'img-2.png',
    ];
@endphp

<div class="swiper-container mt-5">
    <div class="swiper-wrapper">
        @foreach($slides as $slide)
            <div class="swiper-slide -ml-5 cursor-pointer">
                <img src="{{ asset('images/' . $slide) }}" alt="Slide {{ $loop->iteration }}">
            </div>
        @endforeach
    </div>
</div>

<script>
    const swiper = new Swiper('.swiper-container', {
    slidesPerView: 3,  // Display 3 slides at once
    spaceBetween: 20,  // Space between s4lides (adjust as needed)
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 3000,  // Waktu delay dalam milidetik (3000 ms = 3 detik)
        disableOnInteraction: false,  // Biarkan autoplay berlanjut setelah interaksi pengguna
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
          slidesPerView: 4,
          spaceBetween: 10
        },
        // when window width is >= 480px
        480: {
          slidesPerView: 4,
          spaceBetween: 10
        },
        // when window width is >= 640px
      }
});
</script>
