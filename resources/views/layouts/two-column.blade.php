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
                <h2>@yield('pageTitle')</h2>
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
