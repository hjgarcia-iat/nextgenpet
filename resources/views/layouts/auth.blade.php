<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body class="h-100">
        <div class="page-wrapper h-100 d-flex flex-column">
            <div class="site-header-wrapper">
                @include('layouts.partials.header')
                @include('layouts.partials._page_title')
            </div>
        
            <div class="page-content-wrapper">
                <div class="container h-100">
                    @include('layouts.partials.message')
                    <div class="row align-items-center h-100">
                        <div class="col-md-6 push-md-3 well">@yield('content')</div>
                    </div>
                </div>
            </div>
            
            <div class="page-footer-wrapper mt-auto">
                @include('layouts.partials.footer')
            </div>
        </div>
        @include('layouts.partials.scripts')
        @include('sweet::alert')
    </body>
</html>
