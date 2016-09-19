<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        
        @include('layouts.partials.mobile_nav')
        
        @include('layouts.partials.header')
        
        @include('layouts.partials.title')
        
        
        @include('home._slider')
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Overview</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 visible-md visible-lg">
                    @yield('sidebar')
                </div>
                <div class="col-md-8">
                    <section class="html-content">
                        @yield('content')
                    </section>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
