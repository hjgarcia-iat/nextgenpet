<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.meta')
    @include('layouts.partials.styles')
</head>
<body>
@if(!App::isDownForMaintenance())
    @include('layouts.partials.header')
@endif


<section class="page-content-wrapper d-md-flex justify-content-md-center">
    <div class="well-wrapper w-md-25 align-self-md-center">
        @yield('content')
    </div>
</section>


@if(!App::isDownForMaintenance())
    @include('layouts.partials._footer_form')
@endif
</body>
</html>
