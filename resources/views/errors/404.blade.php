<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.header')
        <div class="container" style="height: 100%;">
            <div class="row justify-content-center"
                 style="height: 100%">
                <div class="col-md-8" style="align-self: center">
                    <div class="well well-error">
                        <h2 class="text-center">Oops!</h2>
                        <p class="lead text-center">We can't seem to find the page you're looking for... <br><span class="text-muted"><small>Error Code: 404</small></span></p>

                        <p class="text-center">
                        <a class="btn btn-primary btn-lg" href="/">Back to Home Page</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>

        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
