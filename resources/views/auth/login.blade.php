@extends('layouts.auth')
@section('pageTitle','Login')
@section('content')
    <form action="{{ route('login.create') }}"
          method="post"
          class="form-horizontal">
        {{ csrf_field() }}
        {!! Honeypot::generate('my_name', 'my_time') !!}

        <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
            <label class="form-control-label"
                   for="email"> Email Address </label>
            <input class="form-control {{ $errors->has('email') ? 'form-control-danger' : '' }}"
                   id="email"
                   name="email"
                   type="text"
                   value="{{ old('email') }}"/>
            {!! $errors->first('email','<div class="invalid-feedback d-block">:message</div>') !!}
        </div>
        <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
            <label class="form-control-label"
                   for="password"> Password </label>
            <input class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}"
                   id="password"
                   name="password"
                   type="password"/>
            {!! $errors->first('password','<div class="invalid-feedback d-block">:message</div>') !!}
        </div>
        <div class="form-group text-center">
            <button class="btn btn-primary btn-block mx-auto mb-sm-2 mb-md-0 w-50"
                    type="submit">
                Login
            </button>
            <a class="btn btn-default btn-block w-50 mx-auto"
               href="{{ url('register') }}"> Register </a>

            <a class="mt-2 d-block"
               href="{{ route('password.create') }}"> Recover Password? </a>
        </div>
    </form>
@endsection
