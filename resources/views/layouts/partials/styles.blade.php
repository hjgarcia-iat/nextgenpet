<link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,700i|Rasa:300,400,500,700"
      rel="stylesheet">

@if(env('APP_ENV') == 'local')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@else
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
@endif

