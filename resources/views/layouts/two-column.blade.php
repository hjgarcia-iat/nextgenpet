<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials._page-header-meta')
    @include('layouts.partials._page-header-styles')
</head>
<body>
<div class="site-wrapper">
    <div class="site-canvas">
        <div class="site-menu">
            @include('layouts.partials._mobile_nav')
        </div>
        <div class="site-content">
            @include('layouts.partials._page-header')
            @include('layouts.partials._page-site-title')
            <section class="page-banner d-none d-md-block">
                @yield('banner')
            </section>

            <section class="page-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-md-flex flex-md-row align-items-md-center">
                            <h2 class="mb-md-0">@yield('pageTitle')</h2>
                            @if(auth()->check())
                                <div class="ml-md-auto">
                                    <p class="text-muted mb-0">
                                        <small>Logged in as:
                                            <a href="{{ route('my-account') }}">{{ auth()->user()->name }}</a>
                                        </small>
                                    </p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
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
        </div>
    </div>
</div>

@include('layouts.partials._page-footerscripts')
</body>
</html>
