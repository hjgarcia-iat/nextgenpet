<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        <div class="navmenu navmenu-default navmenu-fixed-left offcanvas-lg" style="">
            <a class="navmenu-brand" href="#">
                <img src="http://www.iat.com/img/main/978/header-logo-slim.png" alt="It's About Time">
            </a>
            <ul class="nav navmenu-nav">
                @include('class-style/_nav_sidebar_links')
            </ul>
        </div>
        @include('layouts.partials.header')
        
        @include('layouts.partials.title')
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Resources</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 visible-lg visible-md">
                    <img src="{{ asset('img/resource-order.jpg') }}" alt="NextGEN PET" class="img-responsive img-thumbnail">
                </div>
                <div class="col-xs-12 col-md-9">
                    <h3>Order Student materials</h3>
                    <p>Here is where you can order all of the necessary materials for your students. </p>
                    <a href="" class="btn btn-primary">Order Now!</a>
                </div>
            </div>
            
            <hr>
    
            <div class="row">
                <div class="col-md-3 visible-lg visible-md">
                    <img src="{{ asset('img/resource-additional-materials.jpg') }}" alt="NextGEN PET" class="img-responsive img-thumbnail">
                </div>
                <div class="col-xs-12 col-md-9">
                    <h3>Additional Instructor Resources</h3>
                    <p>Didn't find what you are looking for? Perhaps it's here! </p>
                    <a href="" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
