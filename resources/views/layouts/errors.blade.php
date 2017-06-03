<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials._page-header-meta')
    @include('layouts.partials._page-header-styles')
</head>
<body>
@if(!App::isDownForMaintenance())
    @include('layouts.partials._page-header')
@endif


<section class="page-content-wrapper d-md-flex justify-content-md-center">
    <div class="well-wrapper w-md-25 align-self-md-center">
        @yield('content')
    </div>
</section>


@if(!App::isDownForMaintenance())
    @include('layouts.partials._page-footer-form')
@endif
</body>
</html>
