@php
    $blogs = [
        [
            'id' => 7125,
            'title' => 'What Is a Smartphone? A Mobile Phone and Computer In One Device',
            'slug' => 'what-is-a-smartphone-a-mobile-phone-and-computer-in-one-device',
            'url' =>
                'https://demo.theme-sky.com/ecomall/what-is-a-smartphone-a-mobile-phone-and-computer-in-one-device/',
            'category' => 'Smartphone',
            'author' => 'Andrew',
            'published_at' => '2025-04-30',
            'images' => [
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1-300x167.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1-768x427.jpg',
                'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1-1000x556.jpg',
            ],
            'format' => 'gallery',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus sit amet. Proin tempor purus ac suscipit sagittis …',
            'blocks' => [
                [
                    'type' => 'gallery',
                    'images' => [
                        'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1.jpg',
                        'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1-300x167.jpg',
                    ],
                ],
                [
                    'type' => 'article',
                    'title' => 'Understanding the Smartphone',
                    'content' => 'Lorem ipsum dolor sit amet...',
                ],
                [
                    'type' => 'quote',
                    'content' => 'Smartphones changed the way humans communicate.',
                    'description' =>
                        'It\'s estimated that more than 5 billion people have mobile devices, which represents approximately 94% of the population of advanced economies and 83% of emerging economies, according to Pew Research Center.',
                ],
                [
                    'type' => 'article',
                    'content' => 'More article content here...',
                ],
            ],
        ],
    ];

    $related_posts = [
        [
            'title' => 'Apple Watch Adds Carbon Neutral Options & Spec Upgrades',
            'category' => 'Smartwatches',
            'author' => 'Andrew',
            'date' => '2025-03-21',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus vit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-1.jpg',
            'url' => '#',
        ],
        [
            'title' => 'Getting Started & Setting Up Your Smart Watch',
            'category' => 'Smartwatches',
            'author' => 'Andrew',
            'date' => '2025-03-02',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus vit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-3.jpg',
            'url' => '#',
        ],
        [
            'title' => 'New Smartwatch Features in iOS 18',
            'category' => 'Smartwatches',
            'author' => 'Andrew',
            'date' => '2025-02-15',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus vit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-4.jpg',
            'url' => '#',
        ],
        [
            'title' => 'Best Smartwatches for Fitness Tracking 2025',
            'category' => 'Smartwatches',
            'author' => 'Andrew',
            'date' => '2025-01-28',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque pretium mollis ex, vel interdum augue faucibus vit amet. Proin tempor purus ac suscipit sagittis ...',
            'image' => 'https://demo.theme-sky.com/ecomall/wp-content/uploads/2023/12/blog-5.jpg',
            'url' => '#',
        ],
    ];

    $older_post = [
        'title' => 'What Is a Smartphone? A Mobile Phone and Computer In One Device',
        'url' => '#',
    ];

    $newer_post = [
        'title' => 'Bluetooth gamepad for Windows and Android',
        'url' => '#',
    ];
    $categories = ['Smartphone', 'Smartwatches', 'Computer', 'Gaming'];

    // Tags
    $tags = ['Apple Watch', 'iPhone', 'Smartwatch', 'Technology', 'Mobile', 'Wearables'];
@endphp

<x-layout>
    <div class="container">
        <!-- Breadcrumbs -->
        <nav class="breadcrumbs">
            <a href="{{ url('/') }}">Home</a>
            <span class="separator">/</span>
            <a href="{{ url('/blog') }}">Blog</a>
            <span class="separator">/</span>
            <span class="current">{{ $blogs[0]['title'] }}</span>
        </nav>

        <!-- Article Page Layout -->
        <div class="article-page__container">
            <div class="blog-page__container">
                {{-- Main content --}}
                <div class="main-content">
                    <div class="blog-list">
                        @foreach ($blogs as $blog)
                            @include('components.blog-article', ['blog' => $blog])
                        @endforeach
                    </div>
                    <hr>
                    <div class="categories-section">
                        <div class="categories-container">
                            <!-- Categories Cards -->
                            <div class="categories-cards">
                                @foreach ($categories as $category)
                                    <a href="#" class="category-card">
                                        <span class="category-name">{{ $category }}</span>
                                    </a>
                                @endforeach

                                <!-- Social Media Icon Card -->
                                <a href="https://linkedin.com" target="_blank" class="social-media-card">
                                    <div class="social-media-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="#0077B5">
                                            <path
                                                d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <!-- Post Navigation -->
                    <nav class="post-navigation">
                        @if (!empty($older_post))
                            <a href="{{ $older_post['url'] }}" class="nav-link prev">
                                <div class="nav-icon prev"></div>
                                <div class="nav-text">
                                    <span class="nav-label">Older Post</span>
                                    <span class="nav-title">{{ $older_post['title'] }}</span>
                                </div>
                            </a>
                        @endif

                        @if (!empty($newer_post))
                            <a href="{{ $newer_post['url'] }}" class="nav-link next">
                                <div class="nav-icon next"></div>
                                <div class="nav-text">
                                    <span class="nav-label">Newer Post</span>
                                    <span class="nav-title">{{ $newer_post['title'] }}</span>
                                </div>
                            </a>
                        @endif
                    </nav>

                    <section class="related-posts-section">
                        <div class="section-header">
                            <h2 class="section-title">Related posts</h2>
                            <div class="swiper-buttons">
                                <button class="related-nav prev">‹</button>
                                <button class="related-nav next">›</button>
                            </div>
                        </div>

                        <div class="related-swiper-container">
                            <div class="related-posts-swiper swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($related_posts as $post)
                                        <div class="swiper-slide">
                                            <article class="related-post-card">
                                                @if (!empty($post['image']))
                                                    <div class="related-post-image">
                                                        <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}"
                                                            loading="lazy">
                                                    </div>
                                                @endif
                                                <div class="related-post-content">
                                                    <span class="related-post-category">{{ $post['category'] }}</span>
                                                    <h3 class="related-post-title">
                                                        <a href="{{ $post['url'] }}">{{ $post['title'] }}</a>
                                                    </h3>
                                                    <p class="related-post-excerpt">{{ $post['description'] }}</p>
                                                    <div class="related-post-meta">
                                                        <span class="related-post-author">BY
                                                            {{ $post['author'] }}</span>
                                                        <span>·</span>
                                                        <span
                                                            class="related-post-date">{{ \Carbon\Carbon::parse($post['date'])->format('M d, Y') }}</span>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Comments Section -->
                    <section class="comments-section">
                        <h2 class="comments-title">Leave a Comment</h2>

                        <div class="comment-form">
                            <h3 class="form-title">Your email address will not be published. Required fields are marked
                                *</h3>

                            <form>
                                <div class="form-group">
                                    <label class="form-label">Comment*</label>
                                    <textarea class="form-textarea" placeholder="Your comment..." required></textarea>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label class="form-label">Name*</label>
                                        <input type="text" class="form-input" placeholder="Your name" required>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Email*</label>
                                        <input type="email" class="form-input" placeholder="Your email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Website</label>
                                    <input type="url" class="form-input" placeholder="Your website">
                                </div>

                                <div class="form-checkbox">
                                    <input type="checkbox" id="save-info">
                                    <label for="save-info">
                                        <span>Save my name, email, and website in this browser for the next time I
                                            comment.</span>
                                    </label>
                                </div>

                                <button type="submit" class="submit-btn">Post Comment</button>
                            </form>
                        </div>
                    </section>
                </div>
                <div class="right-sidebar">
                    <aside class="blog-sidebar">
                        @include('components.blog-sidebar', ['blogs' => $blogs])
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize related posts swiper
            const relatedSwiper = new Swiper('.related-posts-swiper', {
                slidesPerView: 2,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.related-nav.next',
                    prevEl: '.related-nav.prev',
                },
                breakpoints: {
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 20
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 25
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 30
                    }
                }
            });
        });
    </script>
</x-layout>
