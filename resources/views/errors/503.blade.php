@extends('layouts.errors')

@section('pageTitle','Down For Maintenance')

@section('content')
    <div class="well well-error">
        <p class="text-center">
            <img class="img-fluid" width="280" src="{{ asset('img/logo.png') }}"
                 alt="It's About Time">
        </p>
        <h2 class="text-center">Be right back!</h2>
        <p class="lead text-center">We are making changes to the website</p>
    </div>
@stop