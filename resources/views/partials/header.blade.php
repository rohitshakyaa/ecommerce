@php
    $shopCategories = [
        [
            'id' => 'smartphone',
            'name' => 'Smartphone',
            'icon' => 'bi-phone',
            'subcategories' => [
                [
                    'title' => 'Computers & Tablets',
                    'items' => ['Laptops & Desktops', 'Tablets', 'Monitors', 'Laptops', 'Accessories']
                ],
                [
                    'title' => 'Cell Phone',
                    'items' => ['Smartphone', 'AT&T', 'iPhone', 'Prepaid Phones', 'Samsung Galaxy', 'Unlocked Phones']
                ]
            ]
        ],
        [
            'id' => 'laptops',
            'name' => 'Laptops',
            'icon' => 'bi-laptop',
            'subcategories' => [
                [
                    'title' => 'Computers & Tablets',
                    'items' => ['Laptops & Desktops', 'Tablets', 'Monitors', 'Laptops', 'Accessories', 'Drones']
                ]
            ]
        ],
        [
            'id' => 'camera',
            'name' => 'Camera',
            'icon' => 'bi-camera',
            'subcategories' => [
                [
                    'title' => 'Camera',
                    'items' => ['Camera', 'Accessories', 'Camera & Lenses', 'Drones']
                ],
                [
                    'title' => 'TV & Home Theater',
                    'items' => ['Television', '55" TVs', '65" TVs', 'OLED TVs']
                ]
            ]
        ],
        [
            'id' => 'pc-gaming',
            'name' => 'PC Gaming',
            'icon' => 'bi-controller',
            'subcategories' => [
                [
                    'title' => 'Video Games',
                    'items' => ['Xbox Series', 'Playstation 4', 'Playstation 5', 'Gaming Headsets', 'Accessories']
                ]
            ]
        ],
        [
            'id' => 'tablets',
            'name' => 'Tablets',
            'icon' => 'bi-tablet',
            'subcategories' => []
        ],
        [
            'id' => 'television',
            'name' => 'Television',
            'icon' => 'bi-tv',
            'subcategories' => []
        ],
        [
            'id' => 'smartwatches',
            'name' => 'Smartwatches',
            'icon' => 'bi-smartwatch',
            'subcategories' => []
        ],
        [
            'id' => 'speakers',
            'name' => 'Speakers',
            'icon' => 'bi-speaker',
            'subcategories' => []
        ],
        [
            'id' => 'kid-electronics',
            'name' => 'Kid Electronics',
            'icon' => 'bi-emoji-smile',
            'subcategories' => []
        ],
        [
            'id' => 'tech-gifts',
            'name' => 'Tech Gifts',
            'icon' => 'bi-gift',
            'subcategories' => []
        ],
    ];
@endphp

<div class="main-header">
    <div class="header-content">
        <a href="#" class="logo">
            <span>e</span>comall
        </a>

        <nav class="main-nav">
            <div class="nav-item-wrapper">
                <a href="#" class="nav-item has-dropdown">Home</a>
                <div class="nav-dropdown">
                    <div class="nav-dropdown-content">
                        <div class="nav-dropdown-column">
                            <h4>Shop by Category</h4>
                            <ul>
                                <li><a href="#">All Products</a></li>
                                <li><a href="#">New Arrivals</a></li>
                                <li><a href="#">Best Sellers</a></li>
                                <li><a href="#">Special Offers</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>Quick Links</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Track Order</a></li>
                                <li><a href="#">Help Center</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="#">Shipping Info</a></li>
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Warranty</a></li>
                                <li><a href="#">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-item-wrapper">
                <a href="#" class="nav-item has-dropdown">Laptops</a>
                <div class="nav-dropdown">
                    <div class="nav-dropdown-content">
                        <div class="nav-dropdown-column">
                            <h4>By Brand</h4>
                            <ul>
                                <li><a href="#">Apple MacBook</a></li>
                                <li><a href="#">Dell</a></li>
                                <li><a href="#">HP</a></li>
                                <li><a href="#">Lenovo</a></li>
                                <li><a href="#">ASUS</a></li>
                                <li><a href="#">Acer</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>By Type</h4>
                            <ul>
                                <li><a href="#">Gaming Laptops</a></li>
                                <li><a href="#">Business Laptops</a></li>
                                <li><a href="#">Ultrabooks</a></li>
                                <li><a href="#">2-in-1 Laptops</a></li>
                                <li><a href="#">Chromebooks</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>Accessories</h4>
                            <ul>
                                <li><a href="#">Laptop Bags</a></li>
                                <li><a href="#">Cooling Pads</a></li>
                                <li><a href="#">External Keyboards</a></li>
                                <li><a href="#">Mice & Trackpads</a></li>
                                <li><a href="#">Docking Stations</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-item-wrapper">
                <a href="#" class="nav-item has-dropdown">Smartphone</a>
                <div class="nav-dropdown">
                    <div class="nav-dropdown-content">
                        <div class="nav-dropdown-column">
                            <h4>Popular Brands</h4>
                            <ul>
                                <li><a href="#">Apple iPhone</a></li>
                                <li><a href="#">Samsung Galaxy</a></li>
                                <li><a href="#">Google Pixel</a></li>
                                <li><a href="#">OnePlus</a></li>
                                <li><a href="#">Xiaomi</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>By Price Range</h4>
                            <ul>
                                <li><a href="#">Under $300</a></li>
                                <li><a href="#">$300 - $600</a></li>
                                <li><a href="#">$600 - $1000</a></li>
                                <li><a href="#">Premium ($1000+)</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>Accessories</h4>
                            <ul>
                                <li><a href="#">Phone Cases</a></li>
                                <li><a href="#">Screen Protectors</a></li>
                                <li><a href="#">Chargers & Cables</a></li>
                                <li><a href="#">Power Banks</a></li>
                                <li><a href="#">Car Mounts</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav-item-wrapper">
                <a href="#" class="nav-item has-dropdown">Headphones</a>
                <div class="nav-dropdown">
                    <div class="nav-dropdown-content">
                        <div class="nav-dropdown-column">
                            <h4>By Type</h4>
                            <ul>
                                <li><a href="#">Over-Ear</a></li>
                                <li><a href="#">On-Ear</a></li>
                                <li><a href="#">In-Ear</a></li>
                                <li><a href="#">Wireless Earbuds</a></li>
                                <li><a href="#">Gaming Headsets</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>Features</h4>
                            <ul>
                                <li><a href="#">Noise Cancelling</a></li>
                                <li><a href="#">Bluetooth</a></li>
                                <li><a href="#">Wired</a></li>
                                <li><a href="#">Sports & Fitness</a></li>
                                <li><a href="#">Studio Quality</a></li>
                            </ul>
                        </div>
                        <div class="nav-dropdown-column">
                            <h4>Top Brands</h4>
                            <ul>
                                <li><a href="#">Apple AirPods</a></li>
                                <li><a href="#">Sony</a></li>
                                <li><a href="#">Bose</a></li>
                                <li><a href="#">Sennheiser</a></li>
                                <li><a href="#">JBL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="nav-item">Camera</a>
        </nav>

        <div class="header-right">
            <a href="#" class="header-icon">
                <i class="bi bi-heart"></i>
                <span class="badge">0</span>
            </a>
            <div class="header-icon login-trigger">
                <i class="bi bi-person"></i>
                <div>
                    <span class="label">My Account</span>
                    <span class="value">Login</span>
                </div>
                <div class="login-dropdown">
                    <h4>Sign In</h4>
                    <label>Username or email address *</label>
                    <input type="text" placeholder="Username or email">
                    <label>Password *</label>
                    <input type="password" placeholder="Password">
                    <div class="remember-me">
                        <input type="checkbox" id="rememberMe">
                        <label for="rememberMe">Remember Me</label>
                    </div>
                    <button type="button">SIGN IN</button>
                    <div class="create-account">
                        I'm new client. <a href="#">Create an account</a>
                    </div>
                </div>
            </div>
            <a href="#" class="header-icon cart-icon">
                <i class="bi bi-cart3"></i>
                <span class="badge">0</span>
                <div>
                    <span class="label">My Cart</span>
                    <span class="price">$0.00</span>
                </div>
                <div class="cart-hover-dropdown">
                    <div class="cart-empty-message">
                        <i class="bi bi-cart-x"></i>
                        <p>Your cart is empty</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="search-section">
        <div class="search-content">
            <div class="categories-btn-wrapper">
                <button class="categories-btn" id="categoriesBtn">
                    <i class="bi bi-list"></i>
                    Shop Categories
                    <i class="bi bi-chevron-down"></i>
                </button>
                <div class="categories-mega-menu" id="categoriesMegaMenu">
                    <div class="categories-mega-content">
                        <!-- Left Panel - Main Categories -->
                        <div class="categories-main-list">
                            <ul>
                                @foreach($shopCategories as $category)
                                    <li class="category-item" data-category="{{ $category['id'] }}"
                                        data-has-subcategories="{{ !empty($category['subcategories']) ? 'true' : 'false' }}">
                                        <i class="bi {{ $category['icon'] }}"></i>
                                        <span>{{ $category['name'] }}</span>
                                        @if(!empty($category['subcategories']))
                                            <i class="bi bi-chevron-right"></i>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                            
                        </div>

                        <!-- Right Panel - Subcategories -->
                        <div class="categories-sub-panel">
                            @foreach($shopCategories as $category)
                                @if(!empty($category['subcategories']))
                                    <div class="subcategory-content" data-subcategory="{{ $category['id'] }}">
                                        @foreach($category['subcategories'] as $subgroup)
                                            <div class="subcategory-group">
                                                <h4>{{ $subgroup['title'] }}</h4>
                                                <ul>
                                                    @foreach($subgroup['items'] as $item)
                                                        <li><a href="#">{{ $item }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="search-form-wrapper">
                <div class="category-dropdown">
                    <button type="button" class="category-dropdown-btn" id="categoryDropdownBtn">
                        <span>All Categories</span>
                        <i class="bi bi-chevron-down"></i>
                    </button>
                    <div class="category-dropdown-menu" id="categoryDropdown">
                        <ul>
                            <li><a href="#">All Categories</a></li>
                            <li><a href="#">Smartphone</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Camera</a></li>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">PC Gaming</a></li>
                            <li><a href="#">Tablets</a></li>
                            <li><a href="#">Television</a></li>
                            <li><a href="#">Smartwatches</a></li>
                            <li><a href="#">Speakers</a></li>
                            <li><a href="#">Kid Electronics</a></li>
                            <li><a href="#">Tech Gifts</a></li>
                        </ul>
                    </div>
                </div>
                <form class="search-form">
                    <input class="search-input" type="text" placeholder="Search for products" name="search">
                    <button type="submit">SEARCH</button>
                </form>
            </div>

            <div class="contact-info">
                <i class="bi bi-headset"></i>
                <span>+08 9229 8228</span>
            </div>
        </div>
    </div>
</div>
