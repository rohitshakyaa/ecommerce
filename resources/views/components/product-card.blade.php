@props(['product', 'horizontal' => true, 'badgeOnTop' => true, 'height' => 'auto', 'borderOnHover' => false])

<div class="product-card @if ($horizontal) product-card__horizontal @endif @if($borderOnHover) product-card__hover @endif"
    style="height: {{ $height }}">
    <a href="{{ $product['url'] }}" class="product-card__img-container">
        <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}">

        {{-- Top Left Section --}}
        @if ($badgeOnTop)
            <div class="product-card__badges">
                @if ($product['discount_percent'])
                    <span class="product-card__badge product-card__discount">-{{ $product['discount_percent'] }}%</span>
                @endif
                @if ($product['hot'])
                    <span class="product-card__badge product-card__hot">Hot</span>
                @endif
            </div>
        @endif

        <nav class="product-card__actions" aria-label="Product actions">
            <button type="button" class="product-card__action" aria-label="Add to wishlist" title="Wishlist"
                data-toggle="tooltip" data-placement="top">
                <i class="bi bi-heart" aria-hidden="true"></i>
            </button>

            <button type="button" class="product-card__action" aria-label="Quick view" title="Search">
                <i class="bi bi-search" aria-hidden="true"></i>
            </button>

            <button type="button" class="product-card__action" aria-label="Compare" title="Compare">
                <i class="bi bi-stack" aria-hidden="true"></i>
            </button>

            <button type="button" class="product-card__action product-card__action--primary" aria-label="Add to cart"
                title="Add to cart">
                <i class="bi bi-cart" aria-hidden="true"></i>
            </button>
        </nav>
    </a>
    <section class="product-card__body" aria-label="Product details">
        @if (!$badgeOnTop)
            <div class="product-card__badges-bottom">
                @if ($product['discount_percent'])
                    <span class="product-card__badge product-card__discount">-{{ $product['discount_percent'] }}%</span>
                @endif
                @if ($product['hot'])
                    <span class="product-card__badge product-card__hot">Hot</span>
                @endif
            </div>
        @endif
        @if (!empty($product['category']['name']))
            <p class="product-card__category">
                <a class="product-card__category-link" href="{{ $product['category']['url'] ?? '#' }}">
                    {{ $product['category']['name'] }}
                </a>
            </p>
        @endif

        <h3 class="product-card__title">
            <a class="product-card__title-link" href="{{ $product['url'] }}">
                {{ $product['title'] }}
            </a>
        </h3>

        <div class="product-card__rating star-rating" role="img"
            aria-label="Rated {{ $product['rating'] }} out of 5" data-rating="{{ $product['rating'] }}"></div>

        <div class="product-card__price">
            @if ($product['discount_percent'])
                <span class="product-card__price-current">${{ $product['discounted_price'] }}</span>
                <span class="product-card__price-original">${{ $product['initial_price'] }}</span>
            @else
                <span class="product-card__price-current">${{ $product['initial_price'] }}</span>
            @endif
        </div>
    </section>
</div>
