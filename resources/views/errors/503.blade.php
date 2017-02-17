<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body class="h-100">
        <div class="page-wrapper d-flex flex-column h-100">
            <div class="site-header-wrapper">
                @include('layouts.partials._logo_area')
            </div>
    
            <div class="page-content-wrapper">
    
                <section class="error w-25 mx-auto">
                    <div class="well well-error">
                        <h2 class="text-center">Be right back!</h2>
                        <p class="lead text-center">We are making changes to the website</p>
                    </div>
                </section>

            </div>
            
            <div class="page-footer-wrapper mt-auto">
                @include('layouts.partials.footer')
            </div>
            
           
        </div>
        @include('layouts.partials.scripts')
    </body>
</html>
