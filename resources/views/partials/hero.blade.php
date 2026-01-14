@php
    $items = [
        [
            'tag' => 'Big Sale',
            'title' => 'The Best Deals On MacBooks',
            'subtitle' => 'About Rs.25000 Off',
            'price' => '250000',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/11/slide2-laptop.jpg',
        ],
        [
            'tag' => 'Big Sale',
            'title' => 'The Best Deals On MacBooks',
            'subtitle' => 'About Rs.25000 Off',
            'price' => '250000',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/11/slide2-headphone.jpg',
        ],
    ];
@endphp

<div class="swiper hero-swiper">
    <div class="swiper-wrapper">
        @foreach ($items as $item)
            <div class="swiper-slide hero-swiper__slide">
                {{-- Image layer --}}
                <div class="hero-swiper__media" aria-hidden="true">
                    <img src="{{ $item['image'] }}" alt="">
                </div>

                {{-- Content layer --}}
                <div class="container hero-swiper__content">
                    <div class="hero-swiper__detail">
                        <span class="product-badge">{{ $item['tag'] }}</span>

                        <h1 class="hero-swiper__title mt-3 mb-3">
                            {{ $item['title'] }}
                        </h1>

                        <div class="text-uppercase hero-swiper__subtitle text-dark-emphasis mb-3">
                            {{ $item['subtitle'] }}
                        </div>

                        <div class="d-flex align-items-baseline gap-3 mb-4 hero-swiper__priceRow">
                            <div class="text-dark-emphasis">From</div>
                            <div class="hero-swiper__price wobble">{{ $item['price'] }}</div>
                        </div>

                        <a href="#" class="btn btn-dark hero-swiper__btn">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- IMPORTANT: pagination should be outside swiper-wrapper --}}
    <div class="swiper-hero-pagination swiper-custom-pagination"></div>
</div>
