<div class="mobile-nav">
    <nav>
        <a href="{{ route('home') }}"><div class="{{ Route::currentRouteName() === 'home' ? 'current' : '' }}">home</div></a>
        <a href="{{ route('works') }}"><div class="{{ Route::currentRouteName() === 'works' ? 'current' : '' }}">works</div></a>
        <a href="{{ route('contact') }}"><div class="{{ Route::currentRouteName() === 'contact' ? 'current' : '' }}">contact</div></a>
    </nav>
</div>
<header>
    <a href="{{ route('home') }}"><div class="logo">seungchan</div></a>
    <div class="menu-group">
        <nav>
            <a href="{{ route('home') }}"><div class="{{ Route::currentRouteName() === 'home' ? 'current' : '' }}">home</div></a>
            <a href="{{ route('works') }}"><div class="{{ Route::currentRouteName() === 'works' ? 'current' : '' }}">works</div></a>
            <a href="{{ route('contact') }}"><div class="{{ Route::currentRouteName() === 'contact' ? 'current' : '' }}">contact</div></a>
        </nav>
        <div class="page-control">
            <div class="change-theme">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 11C1 16.5228 5.47715 21 11 21V1C5.47715 1 1 5.47715 1 11Z" fill="black"/>
                    <path d="M11 21C5.47715 21 1 16.5228 1 11C1 5.47715 5.47715 1 11 1M11 21C16.5228 21 21 16.5228 21 11C21 5.47715 16.5228 1 11 1M11 21V1" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="change-language">
                <div class="drop-menu">
                    <div class="menu">English</div>
                    <div class="border"></div>
                    <div class="menu">Korean</div>
                </div>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 11C21 16.5228 16.5228 21 11 21M21 11C21 5.47715 16.5228 1 11 1M21 11H1M11 21C5.47715 21 1 16.5228 1 11M11 21C13.5013 18.2616 14.9228 14.708 15 11C14.9228 7.29203 13.5013 3.73835 11 1M11 21C8.49872 18.2616 7.07725 14.708 7 11C7.07725 7.29203 8.49872 3.73835 11 1M1 11C1 5.47715 5.47715 1 11 1" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="menu-control">
                <svg width="20" height="10" viewBox="0 0 22 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 1H20M0 9H10H20" stroke="black"/>
                </svg>
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 21L21 1.00012M1 1.00012L21 20.9999" stroke="black"/>
                </svg>
            </div>
        </div>
    </div>
</header>