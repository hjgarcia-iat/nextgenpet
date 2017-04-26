<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

@if(env('APP_ENV') == 'local')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@else
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
@endif

@yield('styles')