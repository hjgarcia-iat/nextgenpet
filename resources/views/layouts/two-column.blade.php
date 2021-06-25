<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials._page-header-meta')
    @include('layouts.partials._page-header-styles')
    @if(config('app.env') === "production")
        @include('layouts.partials._analytics')
    @endif
</head>
<body>
<div class="site-wrapper">
    <div class="site-canvas">
        <aside class="site-menu">
            @include('layouts.partials._mobile_nav')
        </aside>
        <section class="site-content">
            @include('layouts.partials._page-header')
            @include('layouts.partials._page-site-title')
            @include('layouts.partials._page-banner')
            @include('layouts.partials._page-title')
            
            <section class="page-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 d-none d-md-block">
                            @yield('sidebar')
                        </div>
                        <div class="col-md-8">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </section>
            
            @include('layouts.partials._page-footer')
        </section>
    </div>
</div>

@include('layouts.partials._page-footerscripts')
</body>
</html>
