<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        <div class="page-wrapper">
            <div class="site-header-wrapper">
                @include('layouts.partials._logo_area')
            </div>
    
            <div class="page-content-wrapper justify-content-center align-items-center">
    
                <section class="error">
                    <div class="well well-error">
                        <h2 class="text-center">Be right back!</h2>
                        <p class="lead text-center">We are making changes to the website</p>
                    </div>
                </section>

            </div>
            
            <div class="page-footer-wrapper">
                @include('layouts.partials.footer')
            </div>
            
            @include('layouts.partials.scripts')
        </div>
    </body>
</html>
