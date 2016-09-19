@if(env('APP_ENV') == 'local')
    <script src="{{ asset('js/all.js') }}"></script>
@else
    <script src="{{ elixir('js/all.js') }}"></script>
@endif

@yield('scripts')