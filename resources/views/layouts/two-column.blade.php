<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.header')
        @include('layouts.partials.title')
        @yield('banner')
        
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>@yield('pageTitle')</h2>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4 visible-md visible-lg">
                    @yield('sidebar')
                </div>
                <div class="col-md-8">
                    <section class="html-content">
                        @yield('content')
                    </section>
                </div>
            </div>
        </div>
    
        
        <div class="page-footer-logos mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm hidden-sm-down"></div>
                    <div class="col-sm text-center align-self-center">
                        <img src="{{ asset('img/nsf.png') }}"
                             class="center-block img-responsive"
                             alt="National Science Foundation"
                             width="95">
                    </div>
                    <div class="col-sm text-center align-self-center">
                        <img src="{{ asset('img/chevron.png') }}"
                             class="center-block img-responsive"
                             alt="Chevron"
                             width="95">
                    </div>
                    <div class="col-sm text-center align-self-center">
                        <img src="{{ asset('img/betchel.png') }}"
                             class="center-block img-responsive"
                             alt="S.D. Bechtel, Jr. Foundation"
                             width="150">
                    </div>
                    <div class="col-sm hidden-sm-down"></div>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
