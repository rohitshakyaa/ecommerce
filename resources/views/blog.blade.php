@php
    $blogs = [
        [
            'id' => 7125,
            'title' => 'What Is a Smartphone? A Mobile Phone and Computer In One Device',
            'slug' => 'what-is-a-smartphone-a-mobile-phone-and-computer-in-one-device',
            'url' => 'https://demo.theme-sky.com/ecomall/what-is-a-smartphone-a-mobile-phone-and-computer-in-one-device/',
            'category' => 'Smartphone',
            'author' => 'Andrew',
            'published_at' => '2025-04-30',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis …',
            'images' => [
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1-300x167.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1-768x427.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1-1000x556.jpg',
            ],
            'format' => 'standard',
        ],
        [
            'id' => 7135,
            'title' => 'Can the Apple Watch Series 7 Work On Its Own Without an iPhone?',
            'slug' => 'can-the-apple-watch-series-7-work-on-its-own-without-an-iphone',
            'url' => 'https://demo.theme-sky.com/ecomall/can-the-apple-watch-series-7-work-on-its-own-without-an-iphone/',
            'category' => 'Smartwatches',
            'author' => 'Andrew',
            'published_at' => '2025-04-24',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis …',
            'images' => [
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-2.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-11.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-7.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-8.jpg',
            ],
            'format' => 'gallery',
        ],
        [
            'id' => 7134,
            'title' => 'Bluetooth gamepad for Windows and Android',
            'slug' => 'bluetooth-gamepad-for-windows-and-android',
            'url' => 'https://demo.theme-sky.com/ecomall/bluetooth-gamepad-for-windows-and-android/',
            'category' => 'Games',
            'author' => 'Andrew',
            'published_at' => '2025-04-18',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis …',
            'images' => [
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-3.jpg',
            ],
            'format' => 'standard',
        ],
        [
            'id' => 7130,
            'title' => 'Mobile Devices Usage Statistics',
            'slug' => 'mobile-devices-usage-statistics',
            'url' => null,
            'category' => 'Computer',
            'author' => 'Andrew',
            'published_at' => '2025-04-12',
            'description' => 'It\'s estimated that more than 5 billion people have mobile devices, which represents approximately 94% of the population of advanced economies and 83% of emerging economies, according to Pew Research Center.',
            'images' => [],
            'format' => 'quote',
        ],
        [
            'id' => 7129,
            'title' => 'New or Refurbished Computer? It\'s a Matter of Dollars and Sense',
            'slug' => 'new-or-refurbished-computer-its-a-matter-of-dollars-and-sense',
            'url' => 'https://demo.theme-sky.com/ecomall/new-or-refurbished-computer-its-a-matter-of-dollars-and-sense/',
            'category' => 'Computer',
            'author' => 'Andrew',
            'published_at' => '2025-04-06',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis …',
            'images' => [
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-4.jpg',
            ],
            'format' => 'standard',
        ],
    ];

    $currentPage = 1;
    $totalPages = 3;
@endphp

<x-layout>
    <div class="container">
        <h1 class="page-title">Blog</h1>
        <div class="blog-page__container">
            {{-- Main content --}}
            <div class="main-content">
                <div class="blog-list">
                    @foreach ($blogs as $blog)
                        @include('components.blog-card', ['blog' => $blog])
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="blog-pagination">
                    <a href="#" class="pagination-link {{ $currentPage == 1 ? 'disabled' : '' }}">
                        &lsaquo;
                    </a>

                    @for ($i = 1; $i <= $totalPages; $i++)
                        <a href="#" class="pagination-link {{ $i == $currentPage ? 'active' : '' }}">
                            {{ $i }}
                        </a>
                    @endfor

                    <a href="#" class="pagination-link {{ $currentPage == $totalPages ? 'disabled' : '' }}">
                        &rsaquo;
                    </a>
                </div>

            </div>
            {{-- Sidebar --}}
            <div class="right-sidebar">
                <aside class="blog-sidebar">
                    @include('components.blog-sidebar', ['blogs' => $blogs])
                </aside>
            </div>
        </div>
    </div>
</x-layout>