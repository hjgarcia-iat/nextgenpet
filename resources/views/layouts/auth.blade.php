<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        @include('layouts.partials._page-header-meta')
        @include('layouts.partials._page-header-styles')
    </head>
    <body class="h-100">
        @include('layouts.partials._page-message')
        <div class="page-wrapper h-100 d-flex flex-column">
            <div class="site-header-wrapper">
                @include('layouts.partials._page-header')
            </div>
            <div class="page-content-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 push-md-3 well">@yield('content')</div>
                    </div>
                </div>
            </div>

            <div class="page-footer-wrapper mt-auto">
                @include('layouts.partials._page-footer-form')
            </div>
        </div>
        @include('layouts.partials._page-footerscripts')
    </body>
</html>
