<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.header')
        
        <section class="page-content-wrapper d-md-flex justify-content-md-center">
            <div class="well-wrapper w-25 align-self-md-center">
                @yield('content')
            </div>
        </section>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
