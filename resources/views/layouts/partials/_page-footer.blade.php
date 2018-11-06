@if(!Request::is('my-account') and !Request::is('login') and !Request::is('register') and !Request::is('recover/password') and !Request::is('password/reset/*'))
    @include('layouts.partials._page-footer-logos')
@endif

@include('layouts.partials._page-footer-form')