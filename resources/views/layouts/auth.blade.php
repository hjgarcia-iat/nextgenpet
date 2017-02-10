<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.header')
        <section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>@yield('pageTitle')</h2>
                    </div>
                </div>
            </div>
        </section>
    
        @yield('content')
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
