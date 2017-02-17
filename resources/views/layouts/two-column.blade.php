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
            </div>
    
            
            <div class="page-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 hidden-sm-down">
                            @yield('sidebar')
                        </div>
                        <div class="col-md-8">
                            <section class="html-content">
                                @yield('content')
                            </section>
                        </div>
                    </div>
                </div>
            </div>
    
            
            <div class="partner-logo-wrapper">
                @include('layouts.partials._partners')
            </div>
            
            
            <div class="page-footer-wrapper">
                @include('layouts.partials.footer')
            </div>
            
        </div>
        @include('layouts.partials.scripts')
    </body>
</html>
