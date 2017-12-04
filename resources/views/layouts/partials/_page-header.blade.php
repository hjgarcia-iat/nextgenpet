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

<header class="site-header">
    <div class="container d-md-flex mt-4 mb-4">
        <section class="text-sm-center text-xs-center mr-auto">
            <a href="{{ url('/') }}" class="mx-auto">
                <img src="{{ asset('img/logo.png') }}"
                     alt="It's About Time">
            </a>
        </section>
    </div>
    
    @include('layouts.partials._mobile_nav')
    @include('layouts.partials._page-header-desktop-nav')
</header>