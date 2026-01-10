@php
    $products = [
        [
            'id' => 6927,
            'title' => 'Wired Controller for Xbox Series',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/53-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/wired-controller-for-xbox-series/',
            'category' => [
                'name' => 'Xbox Series',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/games/xbox-series/',
            ],
            'initial_price' => 109.0,
            'discounted_price' => 78.89,
            'hot' => false,
            'discount_percent' => 28,
            'rating' => 5.0,
        ],
        [
            'id' => 6963,
            'title' => 'Apple iPhone 11 Pro Max Triple Camera',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/111-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/apple-iphone-11-pro-max-triple-camera/',
            'category' => [
                'name' => 'iPhone',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/smartphone/iphone/',
            ],
            'initial_price' => 609.0,
            'discounted_price' => 425.0,
            'hot' => false,
            'discount_percent' => 0,
            'rating' => 4.7,
        ],
        [
            'id' => 6772,
            'title' => 'Samsung Galaxy S23 Ultra, Factory Unlocked, 512GB',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/119-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/samsung-galaxy-s23-ultra-factory-unlocked-512gb/',
            'category' => [
                'name' => 'Samsung Galaxy',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/smartphone/samsung-galaxy/',
            ],
            'initial_price' => 949.99,
            'discounted_price' => 699.99,
            'hot' => false,
            'discount_percent' => 26,
            'rating' => 4.5,
        ],
        [
            'id' => 6927,
            'title' => 'Wired Controller for Xbox Series',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/53-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/wired-controller-for-xbox-series/',
            'category' => [
                'name' => 'Xbox Series',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/games/xbox-series/',
            ],
            'initial_price' => 109.0,
            'discounted_price' => 78.89,
            'hot' => false,
            'discount_percent' => 28,
            'rating' => 5.0,
        ],
        [
            'id' => 6963,
            'title' => 'Apple iPhone 11 Pro Max Triple Camera',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/111-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/apple-iphone-11-pro-max-triple-camera/',
            'category' => [
                'name' => 'iPhone',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/smartphone/iphone/',
            ],
            'initial_price' => 609.0,
            'discounted_price' => 425.0,
            'hot' => false,
            'discount_percent' => 0,
            'rating' => 4.7,
        ],
        [
            'id' => 6772,
            'title' => 'Samsung Galaxy S23 Ultra, Factory Unlocked, 512GB',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/119-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/samsung-galaxy-s23-ultra-factory-unlocked-512gb/',
            'category' => [
                'name' => 'Samsung Galaxy',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/smartphone/samsung-galaxy/',
            ],
            'initial_price' => 949.99,
            'discounted_price' => 699.99,
            'hot' => false,
            'discount_percent' => 26,
            'rating' => 4.5,
        ],
        [
            'id' => 6963,
            'title' => 'Apple iPhone 11 Pro Max Triple Camera',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/111-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/apple-iphone-11-pro-max-triple-camera/',
            'category' => [
                'name' => 'iPhone',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/smartphone/iphone/',
            ],
            'initial_price' => 609.0,
            'discounted_price' => 425.0,
            'hot' => false,
            'discount_percent' => 0,
            'rating' => 4.7,
        ],
        [
            'id' => 6772,
            'title' => 'Samsung Galaxy S23 Ultra, Factory Unlocked, 512GB',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/119-400x400.jpg',
            'url' => 'https://demo.theme-sky.com/ecomall/shop/samsung-galaxy-s23-ultra-factory-unlocked-512gb/',
            'category' => [
                'name' => 'Samsung Galaxy',
                'url' => 'https://demo.theme-sky.com/ecomall/product-category/smartphone/samsung-galaxy/',
            ],
            'initial_price' => 949.99,
            'discounted_price' => 699.99,
            'hot' => false,
            'discount_percent' => 26,
            'rating' => 4.5,
        ],
    ];
@endphp

<section class="container products mb-5 section">
    <div class="products__banner products__banner-smartphone">
        <span class="products__banner-widget">MONTH DEALS</span>
        <h2 class="products__banner-title">Now $150 Off</h2>
        <p class="products__banner-subtitle">Today's Supper Offer</p>
    </div>
    <div class="products__section">
        <h3 class="section-title">Smartphones and Tablets</h3>
        <div>
            <div class="product-swiper-2">
                <div class="swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="swiper-slide">
                            <x-product-card :product="$product" :horizontal="false" />
                        </div>
                    @endforeach
                </div>
                <div class="swiper-custom-pagination"></div>
            </div>
        </div>
    </div>
</section>
