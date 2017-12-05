<section class="top-bar">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 d-none d-md-flex justify-content-md-end align-items-md-center">
                <nav class="top-bar-navigation">
                    <ul class="list-unstyled list-inline d-flex">
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a target="_blank" href="http://shop.iat.com">Shop</a></li>
                        <li>
                            <a href="tel:646-502-5231">646-502-5231</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<header class="site-header pt-4 pb-4">
    <div class="container">
        <div class="row align-items-center just-content-end">
            <div class="col-12 col-md-4">
                <section class="page-logo text-center text-md-left">
                    <a href="{{ url('/') }}" class="mx-auto">
                        <img src="{{ asset('img/logo.png') }}"
                             alt="Activate Learning">
                    </a>
                </section>
            </div>
            <div class="col-md-8 d-flex justify-content-end">
                @include('layouts.partials._page-header-desktop-nav')
            </div>
        </div>
    </div>

    @include('layouts.partials._mobile_nav')
</header>