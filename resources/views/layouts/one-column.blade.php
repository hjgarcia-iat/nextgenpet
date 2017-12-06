<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials._page-header-meta')
        @include('layouts.partials._page-header-styles')
    </head>
    <body>
        @include('layouts.partials._page-header')
        @include('layouts.partials._page-site-title')
        @yield('banner')
        <section class="page-title">
            <div class="container">
                <h2>@yield('pageTitle')</h2>
            </div>
        </section>
        <section class="page-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.partials._page-footer')
        @include('layouts.partials._page-footerscripts')
    </body>
</html>
