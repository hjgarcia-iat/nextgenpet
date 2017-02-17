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
            </div>
    
            <div class="page-content-wrapper">
                <div class="well well-error text-center mx-auto w-25">
                    <h3>We can't seem to find the page you're looking for...</h3>
                    <p>
                        <span class="text-muted">
                            Error Code: 404
                        </span>
                    </p>
        
                    <p>
                        <a class="btn btn-primary"
                           href="/">Back to Home Page
                        </a>
                    </p>
                </div>
            </div>
            <div class="page-footer-wrapper mt-auto">
                @include('layouts.partials.footer')
            </div>
        </div>
        @include('layouts.partials.scripts')
    </body>
</html>
