<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials._page-header-meta')
    @include('layouts.partials._page-header-styles')
</head>
<body>

<section class="page-content-wrapper d-md-flex justify-content-md-center">
    <div class="well-wrapper w-md-25 align-self-md-center">
        @yield('content')
    </div>
</section>
</body>
</html>
