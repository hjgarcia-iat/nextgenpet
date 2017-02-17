<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"
      content="IE=edge">
<meta name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="canonical"
      href="http://{{ URL::current() }}">
<meta name="csrf-token"
      content="{{ csrf_token() }}">
<meta name="description"
      content="IAT provides the resources and technology to support the implementation of successful Science, Technology, Engineering, and Mathematics (STEM) curricula.">

@if(isset($appError))
    <title>Next Gen PET | {{ $statusCode }}</title>
@else
    <title>Next Gen PET | @yield('pageTitle')</title>
@endif

