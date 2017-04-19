<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.message')
        @include('layouts.partials.header')
        @include('layouts.partials.title')
        @yield('banner')
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
                    <div class="col-md-4 visible-md visible-lg">
                        @yield('sidebar')
                    </div>
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
