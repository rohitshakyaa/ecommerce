@php
    $languages = [
        'en' => 'English',
        'fr' => 'Français',
    ];

    $currencies = ['USD', 'EUR'];

    $currentLang = session('lang', 'en');
    $currentCurrency = session('currency', 'USD');
@endphp

<div class="topbar">
    <div class="topbar-left">
        <div class="dropdown">
            <span class="topbar-item">
                {{ $languages[$currentLang] }}</span>
            <div class="dropdown-menu">
                @foreach ($languages as $key => $label)
                    <a href="#">{{ $label }}</a>
                @endforeach
            </div>
        </div>

        <div class="dropdown">
            <span class="topbar-item">{{ $currentCurrency }}</span>
            <div class="dropdown-menu">
                @foreach ($currencies as $currency)
                    <a href="£">{{ $currency }}</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="topbar-center">
        Free Shipping On All Orders Over $100
    </div>
    <div class="topbar-right">
        <a href="#" class="topbar-item">Track Order</a>
        <a href="#" class="topbar-item">About</a>
        <a href="#" class="topbar-item">Contact</a>
        <a href="#" class="topbar-item">Blog</a>
    </div>
</div>
