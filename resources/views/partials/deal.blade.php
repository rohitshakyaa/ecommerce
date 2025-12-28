@php
    $product1 = [
        'id' => 6978,
        'title' => 'MacBook Pro 13.3" 16GB/512GB Silver',
        'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/01-400x400.jpg',
        'url' => 'https://demo.theme-sky.com/ecomall/shop/macbook-pro-13-3-16gb-512gb-silver/',
        'category' => [
            'name' => 'Laptops',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/laptops-desktops/laptops/',
        ],
        'initial_price' => 1795.0,
        'discounted_price' => 1527.0,
        'hot' => true,
        'discount_percent' => 15,
        'rating' => 4.5,
    ];

    $product2 = [
        'id' => 6978,
        'title' => 'MacBook Pro 13.3" 16GB/512GB Silver',
        'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/03/01-400x400.jpg',
        'url' => 'https://demo.theme-sky.com/ecomall/shop/macbook-pro-13-3-16gb-512gb-silver/',
        'category' => [
            'name' => 'Laptops',
            'url' => 'https://demo.theme-sky.com/ecomall/product-category/laptops-desktops/laptops/',
        ],
        'initial_price' => 1795.0,
        'discounted_price' => 1527.0,
        'hot' => true,
        'discount_percent' => 15,
        'rating' => 4.5,
    ];
@endphp

<section class="deal container">
    <h3 class="section-title deal__title">Deal Of The Week</h3>
    <div class="deal__body">
        <div class="deal__product deal__product-1">
            <x-product-card :product="$product1" :badge-on-top="false" />
        </div>
        <div class="deal__best-deal">
            <p class="subtitle">Best Deals this week</p>
            <h3 class="title">50% OFF</h3>
            <p class="description">Deal of the Week for deals on consumer electronics.</p>
            <div class="countdown" id="countdown" data-ends-at="2026-01-01 12:00:00"></div>
        </div>
        <div class="deal__product deal__product-2">
            <x-product-card :product="$product1" :badge-on-top="false" />
        </div>
    </div>
</section>
