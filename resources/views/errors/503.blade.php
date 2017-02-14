<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        
        @include('layouts.partials.header')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="well well-error">
                        <h2 class="text-center">Be right back!</h2>
                        <p class="lead text-center">We are making changes to the website</p>
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
