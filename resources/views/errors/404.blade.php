@extends('layouts.errors')

@section('pageTitle','404')

@section('content')
    <div class="well well-error w-25 h-25 align-self-md-center">
        <h2 class="text-center">Oops!</h2>
        <p class="lead text-center">We can't seem to find the page you're looking for...
            <br>
            <span class="text-muted">
                <small>Error Code: 404</small>
            </span>
        </p>
        
        <p class="text-center">
            <a class="btn btn-primary btn-lg"
               href="/">Back to Home Page
            </a>
        </p>
    </div>
@stop
