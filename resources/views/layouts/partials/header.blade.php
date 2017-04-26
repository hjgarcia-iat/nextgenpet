<header class="site-header">
    <div class="container d-md-flex mt-4 mb-4">
        <section class="text-sm-center text-xs-center mr-auto">
            <a href="{{ url('/') }}" class="mx-auto">
                <img src="{{ asset('img/logo.png') }}"
                     alt="It's About Time">
            </a>
        </section>
        @include('layouts.partials.social-bar')
    </div>
    
    @include('layouts.partials.mobile_nav')
    @include('layouts.partials.desktop_nav')
</header>