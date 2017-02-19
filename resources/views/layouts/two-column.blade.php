<!DOCTYPE html>
<html lang="en"
      class="h-100">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body class="h-100">
        <div class="page-wrapper h-100 d-flex flex-column">
            <div class="site-header-wrapper">
                @include('layouts.partials.header')
                @include('layouts.partials.title')
                @yield('banner')
                @include('layouts.partials._page_title')
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
            
            
            <div class="page-footer-wrapper mt-auto">
                @include('layouts.partials.footer')
            </div>
            
        </div>
        @include('layouts.partials.scripts')
        @include('sweet::alert')
    </body>
</html>
