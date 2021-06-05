<header>
    <a href="/" class="brand">
        <img class="logo" src="{{ asset('images/icon.png') }}" alt="">
    </a>
    <nav>
        <a href="{{ route('home') }}" class="nav-link @if (Route::is('home')) active @endif">
            <span>@lang('nav.home')</span>
            <i class="fa fa-home"></i>
        </a>
        <a href="{{ route('products.index') }}" class="nav-link @if (Route::is('products.*')) active @endif">
            <span>@lang('nav.products')</span>
            <i class="fas fa-list-alt"></i>
        </a>

        @auth
            <a href="{{ route('admin.dashboard') }}" class="nav-link @if (Route::is('admin.*')) active @endif">
                <span>@lang('nav.admin')</span>
                <i class="fa fa-user-secret"></i>
            </a>
        @endif
    </nav>

    @guest
        <a class="secret-nav" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
        </a>
    @else
        <a class="secret-nav" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <i class="fas fa-sign-out-alt"></i>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </a>
    @endif
</header>
