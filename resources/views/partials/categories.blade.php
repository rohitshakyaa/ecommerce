@php
    $categories = [
        [
            'name' => 'Television',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/television/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-television-310x264.png',
        ],
        [
            'name' => 'Speakers',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/speakers/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-speaker-310x264.png',
        ],
        [
            'name' => 'Tablets',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/tablets/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-tablet-310x264.png',
        ],
        [
            'name' => 'Headphones',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/headphones/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-headphone-310x264.png',
        ],
        [
            'name' => 'Iwatch',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/iwatch/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-iwatch-310x264.png',
        ],
        [
            'name' => 'Headphones',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/headphones/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-headphone-310x264.png',
        ],
        [
            'name' => 'Iwatch',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/iwatch/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-iwatch-310x264.png',
        ],
        [
            'name' => 'Smartphone',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/smartphone/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-phone-310x264.png',
        ],
        [
            'name' => 'Games',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/games/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-game-310x264.png',
        ],
        [
            'name' => 'Laptops',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/laptops-desktops/laptops/',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/10/cat-laptop-310x264.png',
        ],
    ];

@endphp

<div class="category-swiper container section">
    <h3 class="section-title border-b">Categories</h3>
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        @foreach ($categories as $category)
            <a class="swiper-slide d-flex flex-column align-items-center">
                <div class="img-container d-flex justify-content-center align-items-center">
                    <img src="{{ $category['image'] }}" alt="{{ $category['name'] }}" />
                    <div class="overlay">
                        <i class="bi bi-link-45deg"></i>
                    </div>
                    <b>{{ $category['name'] }}</b>
                </a>
            @endforeach
        </div>
    </div>
</div>
