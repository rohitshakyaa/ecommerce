@php
    $recentComments = [
        [
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tortor arcu, consectetur eleifend commodo at,',
            'author' => 'SOFIA',
            'date' => 'MAY 23, 2025'
        ],
        [
            'text' => 'Phasellus vitae imperdiet felis. Nam non condimentum erat. Lorem ipsum dolor sit amet, consectetur adipiscing',
            'author' => 'JOHN DOE',
            'date' => 'MAY 18, 2025'
        ],
        [
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tortor arcu, consectetur eleifend commodo at,',
            'author' => 'JOHN HENNRY',
            'date' => 'MAY 12, 2025'
        ]
    ];

    $tags = [
        ['name' => 'AirPods', 'count' => 2],
        ['name' => 'Camera', 'count' => 2],
        ['name' => 'Electronic', 'count' => 11],
        ['name' => 'Game', 'count' => 3],
        ['name' => 'Gaming Headsets', 'count' => 3],
        ['name' => 'iwatch', 'count' => 3],
        ['name' => 'Laptop', 'count' => 3],
        ['name' => 'Samsung Galaxy', 'count' => 1],
        ['name' => 'Smartphone', 'count' => 2],
        ['name' => 'Speaker', 'count' => 2],
    ];
@endphp

<aside>
    {{-- Search Widget --}}
    <div class="sidebar-widget search-widget">
        <div class="sidebar-widget-content">
            <div class="search-wrapper">
                <input type="text" class="sidebar-search" placeholder="Search for products...">
                <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <path d="m21 21-4.35-4.35"></path>
                </svg>
            </div>
        </div>
    </div>

    {{-- Categories Widget --}}
    <div class="sidebar-widget">
        <div class="sidebar-widget-title">Categories</div>
        <div class="sidebar-widget-content">
            <h3 class="sidebar-title">Categories</h3>
            <ul class="sidebar-list">
                @foreach (collect($blogs)->groupBy('category') as $category => $items)
                    <li>
                        {{ $category }}
                        <span>({{ $items->count() }})</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- Recent Posts Widget --}}
    <div class="sidebar-widget">
        <div class="sidebar-widget-title">Recent Posts</div>
        <div class="sidebar-widget-content">
            <h3 class="sidebar-title">Recent Posts</h3>

            <div class="recent-posts">
                @foreach (collect($blogs)->take(3) as $blog)
                    <div class="recent-post-item">
                        @if (!empty($blog['images'][0]))
                            <img 
                                src="{{ $blog['images'][0] }}" 
                                alt="{{ $blog['title'] }}"
                            >
                        @endif

                        <a href="{{ $blog['url'] ?? '#' }}">
                            {{ $blog['title'] }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Recent Comments Widget --}}
    <div class="sidebar-widget">
        <div class="sidebar-widget-title">Recent Comments</div>
        <div class="sidebar-widget-content">
            <h3 class="sidebar-title">Recent Comments</h3>

            <div class="recent-comments">
                @foreach ($recentComments as $comment)
                    <div class="recent-comment-item">
                        <p>{{ $comment['text'] }}</p>
                        <div class="recent-comment-meta">
                            <span>BY</span>
                            <span class="recent-comment-author">{{ $comment['author'] }}</span>
                            <span>-</span>
                            <span class="recent-comment-date">{{ $comment['date'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Tags Widget --}}
    <div class="sidebar-widget">
        <div class="sidebar-widget-title">Tags Post</div>
        <div class="sidebar-widget-content">
            <h3 class="sidebar-title">Tags Post</h3>

            <div class="tags-container">
                @foreach ($tags as $tag)
                    <a href="#" class="tag-item">
                        {{ $tag['name'] }}
                        <span class="tag-count">({{ $tag['count'] }})</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</aside>

<script>
// Accordion functionality - activates when sidebar is stacked below content
function initAccordion() {
    const container = document.querySelector('.blog-page__container');
    const mainContent = document.querySelector('.main-content');
    const sidebar = document.querySelector('.right-sidebar');
    const widgets = document.querySelectorAll('.sidebar-widget:not(.search-widget)');
    
    if (!container || !mainContent || !sidebar) return;
    
    // Check if sidebar is below main content (stacked layout)
    const mainRect = mainContent.getBoundingClientRect();
    const sidebarRect = sidebar.getBoundingClientRect();
    const isStacked = sidebarRect.top > mainRect.top + 50; // 50px threshold
    
    if (isStacked) {
        // Accordion mode - sidebar is below content
        widgets.forEach(widget => {
            const title = widget.querySelector('.sidebar-widget-title');
            
            // Remove existing listeners to prevent duplicates
            const newTitle = title.cloneNode(true);
            title.parentNode.replaceChild(newTitle, title);
            
            newTitle.addEventListener('click', function() {
                // Toggle current widget
                widget.classList.toggle('active');
            });
        });
    } else {
        // Side-by-side mode - remove accordion
        widgets.forEach(widget => {
            widget.classList.remove('active');
        });
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    initAccordion();
    // Small delay to ensure layout is complete
    setTimeout(initAccordion, 100);
});

// Re-initialize on window resize
let resizeTimer;
window.addEventListener('resize', function() {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(initAccordion, 100);
});
</script>