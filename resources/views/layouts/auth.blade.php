<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        <div class="page-wrapper">
            <div class="site-header-wrapper">
                @include('layouts.partials.header')
                @include('layouts.partials._page_title')
            </div>
        
            <div class="page-content-wrapper d-flex justify-content-center align-items-center">
                <div class="container">
                    @include('layouts.partials.message')
                    <div class="row">
                        <div class="col-md-6 push-md-3 well">@yield('content')</div>
                    </div>
                </div>
            </div>
            
            <div class="page-footer-wrapper">
                @include('layouts.partials.footer')
            </div>
        </div>
        @include('layouts.partials.scripts')
    </body>
</html>
