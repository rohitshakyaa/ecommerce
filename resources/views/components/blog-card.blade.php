@props([
    'blog',
    'horizontal' => false,
    'height' => 'auto',
])

<article
    class="blog-card
        {{ $horizontal ? 'blog-card__horizontal' : '' }}
        blog-format-{{ $blog['format'] ?? 'standard' }}"
    style="height: {{ $height }}">

    @if (($blog['format'] ?? 'standard') === 'standard')
        @if (!empty($blog['images']))
        <div class="blog-card__img-container">

            <a href="{{ $blog['url'] ?? '#' }}">
                <img src="{{ $blog['images'][0] }}" alt="{{ $blog['title'] }}">
            </a>
        </div>
        @endif
    @endif

    @if (($blog['format'] ?? '') === 'gallery' && !empty($blog['images']))
        <div class="blog-card__gallery swiper">
            <div class="swiper-wrapper">
                @foreach ($blog['images'] as $image)
                    <div class="swiper-slide">
                        <img src="{{ $image }}" alt="{{ $blog['title'] }}">
                    </div>
                @endforeach
            </div>
            <div class="blog-gallery-swiper-pagination swiper-pagination">

            </div>
        </div>
    @endif

   @if (($blog['format'] ?? '') === 'quote')
    <blockquote class="blog-card__quote">
        <p class="quote-content">
            {{ $blog['description'] }}
        </p>
        <div class="blog-card__meta">
            <span>
                <span>BY</span>
                <a href="{{ $blog['url'] }}" title="Posts by {{ $blog['author'] }}" class="blog-card__author">
                    {{ $blog['author'] }}
                </a>
            </span>
            <span>
                {{ \Carbon\Carbon::parse($blog['published_at'])->format('M d, Y') }}
            </span>
        </div>
    </blockquote>
    @else

    <div class="blog-card__content">
        <div class="blog-card__header">
            <div class="blog-card__category">
                <a href="{{ $blog['url'] }}">
                    {{ $blog['category'] }}
                </a>
            </div>

        </div>
        <header>
            <h3 class="blog-card__title">
                <a href="{{ $blog['url'] ?? '#' }}" class="blog-card__title">
                    {{ $blog['title'] }}
                </a>
            </h3>
        </header>

        <p class="blog-card__excerpt">
            {{ $blog['description'] }}
        </p>
        
        <div class="blog-card__meta">
           <span>
                <span>BY</span>
                <a href="{{ $blog['url'] }}" title="Posts by {{ $blog['author'] }}" class="blog-card__author">
                    {{ $blog['author'] }}
                </a>
            </span>
            <span>
                {{ \Carbon\Carbon::parse($blog['published_at'])->format('M d, Y') }}
            </span>
        </div>
    </div>
    @endif
</article>
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.blog-card__gallery').forEach(swiperContainer => {

        const slidesCount =
            swiperContainer.querySelectorAll('.swiper-slide').length;

        new Swiper(swiperContainer, {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 0,
            grabCursor: true,

            loop: slidesCount > 1,
            loopedSlides: slidesCount,

            pagination: {
                el: swiperContainer.querySelector('.blog-gallery-swiper-pagination'),
                clickable: true,
            },
        });
    });
});

</script>

