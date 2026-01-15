@php
    $blogPosts = [
        [
            'id' => 1,
            'title' => 'Bluetooth gamepad for Windows and Android',
            'category' => 'GAMES',
            'excerpt' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1.jpg',
            'author' => 'ANDREW',
            'date' => 'APR 18, 2025',
            'url' => '#',
        ],
        [
            'id' => 2,
            'title' => 'What Is a Smartphone? A Mobile Phone and Computer In One Device',
            'category' => 'SMARTPHONE',
            'excerpt' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-2.jpg',
            'author' => 'ANDREW',
            'date' => 'APR 30, 2025',
            'url' => '#',
        ],
        [
            'id' => 3,
            'title' => 'Can the Apple Watch Series 7 Work On Its Own Without an iPhone?',
            'category' => 'SMARTWATCHES',
            'excerpt' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-3.jpg',
            'author' => 'ANDREW',
            'date' => 'APR 24, 2025',
            'url' => '#',
        ],
        [
            'id' => 4,
            'title' => 'The Best Gaming Laptops for 2025',
            'category' => 'LAPTOPS',
            'excerpt' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1.jpg',
            'author' => 'ANDREW',
            'date' => 'MAR 15, 2025',
            'url' => '#',
        ],
        [
            'id' => 5,
            'title' => 'Top 10 Wireless Headphones for Music Lovers',
            'category' => 'AUDIO',
            'excerpt' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-2.jpg',
            'author' => 'ANDREW',
            'date' => 'FEB 28, 2025',
            'url' => '#',
        ],
    ];
@endphp

<section class="container section">
    <h3 class="section-title">From Our Blog</h3>
    <hr class="blog-section__divider">

    <div class="blog-swiper">
        <div class="swiper-wrapper">
            @foreach ($blogPosts as $post)
                <div class="swiper-slide">
                    <article class="blog-card">
                        <a href="{{ $post['url'] }}" class="blog-card__image">
                            <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
                        </a>
                        <div class="blog-card__content">
                            <span class="blog-card__category">{{ $post['category'] }}</span>
                            <h4 class="blog-card__title">
                                <a href="{{ $post['url'] }}">{{ $post['title'] }}</a>
                            </h4>
                            <p class="blog-card__excerpt">{{ $post['excerpt'] }}</p>
                            <div class="blog-card__meta">
                                <span class="blog-card__author">BY {{ $post['author'] }}</span>
                                <span class="blog-card__date">{{ $post['date'] }}</span>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="blog-swiper-pagination"></div>
    </div>
</section>
