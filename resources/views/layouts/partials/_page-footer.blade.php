@if(request()->path() != 'my-account')
    @include('layouts.partials._page-footer-logos')
@endif
@include('layouts.partials._page-footer-form')