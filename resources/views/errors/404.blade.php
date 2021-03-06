@extends('layouts.errors')

@section('pageTitle','404')

@section('content')
    <div class="well well-error">
        <p class="text-center">
            <img class="img-fluid" width="280" src="{{ asset('img/logo.png') }}"
                 alt="It's About Time">
        </p>
        <h2 class="text-center">Oops!</h2>
        <p class="lead text-center">We can't seem to find the page you're looking for...
        </p>
        
        <p class="text-center">
            <a class="btn btn-primary"
               href="/">Back to Home Page
            </a>
        </p>
        
    </div>
@stop
