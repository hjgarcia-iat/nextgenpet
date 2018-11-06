@if(!Request::is('my-account') and !Request::is('login') and !Request::is('register') and !Request::is('recover/password') and !Request::is('password/reset/*'))
    @include('layouts.partials._page-footer-logos')
@endif

<footer class="page-footer">
    <div class="container">
        <div class="page-footer-content">
            @include('layouts.partials._page-footer-by-line')
            @include('layouts.partials._page-footer-nav-bar')
            @include('layouts.partials._page-header-social-icons')
            @include('layouts.partials._page-footer-form')
        </div>
    </div>
</footer>


