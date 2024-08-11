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
