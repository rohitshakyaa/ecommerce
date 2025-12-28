@php
    $brandLogos = [
        [
            'title' => 'Panasonic',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/panasonic.png',
            'url' => '#',
        ],
        [
            'title' => 'Sony',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/11/sony-1.png',
            'url' => '#',
        ],
        [
            'title' => 'Asus',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/asus.png',
            'url' => '#',
        ],
        [
            'title' => 'Samsung',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/samsung.png',
            'url' => '#',
        ],
        [
            'title' => 'Sanyo',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/11/sanyo-1.png',
            'url' => '#',
        ],
        [
            'title' => 'Oppo',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2022/11/oppo.png',
            'url' => '#',
        ],
        [
            'title' => 'Dell',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/dell.png',
            'url' => '#',
        ],
        [
            'title' => 'Lenovo',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/lenovo.png',
            'url' => '#',
        ],
        [
            'title' => 'Apple',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/apple-2.png',
            'url' => '#',
        ],
        [
            'title' => 'JBL',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/jbl.png',
            'url' => '#',
        ],
        [
            'title' => 'Canon',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/canon.png',
            'url' => '#',
        ],
        [
            'title' => 'Intel',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/intel-1.png',
            'url' => '#',
        ],
    ];
@endphp

<section class="container">
    <h3 class="section-title">Our Brand</h3>
    <div class="brand__grid">
        @foreach ($brandLogos as $brandLogo)
            <a class="brand__item" href="{{ $brandLogo['url'] }}">
                <img src="{{ $brandLogo['image'] }}" alt="{{ $brandLogo['title'] }}" />
            </a>
        @endforeach
    </div>
</section>
