@extends('layouts.auth')
@section('pageTitle','Register')
@section('content')
    {!! Form::open(['url' => route('register.create'),'class' => 'form-horizontal']) !!}
    {!! Honeypot::generate('my_name', 'my_time') !!}
    <div class="form-group {{ $errors->has('first_name') ? 'has-danger' : '' }}">
        <label class="form-control-label"
               for="first_name">
            First Name
        </label>
        <input class="form-control {{ $errors->has('first_name') ? 'form-control-danger' : '' }}"
               id="first_name"
               name="first_name"
               required="required"
               type="text"
               value="{{ old('first_name') }}" />
        {!! $errors->first('first_name','
        <div class="form-control-feedback">
            :message
        </div>
        ') !!}
    </div>
    <div class="form-group {{ $errors->has('last_name') ? 'has-danger' : '' }}">
        <label class="form-control-label"
               for="last_name">
            Last Name
        </label>
        <input class="form-control {{ $errors->has('last_name') ? 'form-control-danger' : '' }}"
               id="last_name"
               name="last_name"
               required="required"
               type="text"
               value="{{ old('last_name') }}" />
        {!! $errors->first('last_name','
        <div class="form-control-feedback">
            :message
        </div>
        ') !!}
    </div>
    <div class="form-group {{ $errors->has('register_email') ? 'has-danger' : '' }}">
        <label class="form-control-label"
               for="register_email">
            Email Address
        </label>
        <input class="form-control {{ $errors->has('register_email') ? 'form-control-danger' : '' }}"
               id="register_email"
               name="register_email"
               required="required"
               type="email"
               value="{{ old('register_email') }}" />
        {!! $errors->first('register_email','
        <div class="form-control-feedback">
            :message
        </div>
        ') !!}
    </div>
    <div class="form-group {{ $errors->has('institution') ? 'has-danger' : '' }}">
        <label class="form-control-label"
               for="institution">
            Institution Name
        </label>
        <input class="form-control {{ $errors->has('institution') ? 'form-control-danger' : '' }}"
               id="institution"
               name="institution"
               required="required"
               type="text"
               value="{{ old('institution') }}" />
        {!! $errors->first('institution','
        <div class="form-control-feedback">
            :message
        </div>
        ') !!}
    </div>
    <div class="form-group {{ $errors->has('zip') ? 'has-danger' : '' }}">
        <label class="form-control-label"
               for="zip">
            Zipcode
        </label>
        <input class="form-control {{ $errors->has('zip') ? 'form-control-danger' : '' }}"
               id="zip"
               name="zip"
               required="required"
               type="text"
               value="{{ old('zip') }}" />
        {!! $errors->first('zip','
        <div class="form-control-feedback">
            :message
        </div>
        ') !!}
    </div>
    <div class="form-group text-center">
        <button class="btn btn-primary btn-block mx-auto mb-sm-2 mb-md-0 w-50"
                type="submit">
            Register
        </button>
        <a class="btn btn-default btn-block w-50 mx-auto"
           href="{{ url('login') }}">
            Back to login
        </a>
        <a class="mt-2 d-block"
           href="{{ route('password.create') }}">
            Recover Password?
        </a>
    </div>
    {!! Form::close() !!}
@endsection
