@extends('layouts.auth')
@section('pageTitle','Register')
@section('content')
    


    <form class="form-horizontal "
          role="form"
          method="POST"
          action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('first_name') ? 'has-danger' : '' }}">
            <label for="first_name"
                   class="form-control-label">First Name
            </label>
            <input type="text"
                   class="form-control {{ $errors->has('first_name') ? 'form-control-danger' : '' }}"
                   id="first_name"
                   name="first_name"
                   value="{{ old('first_name') }}">
            {!! $errors->first('first_name','<div class="form-control-feedback">:message</div>') !!}
        </div>
    
        <div class="form-group {{ $errors->has('last_name') ? 'has-danger' : '' }}">
            <label for="last_name"
                   class="form-control-label">Last Name
            </label>
            <input type="text"
                   class="form-control {{ $errors->has('last_name') ? 'form-control-danger' : '' }}"
                   id="last_name"
                   name="last_name"
                   value="{{ old('last_name') }}">
            {!! $errors->first('last_name','<div class="form-control-feedback">:message</div>') !!}
        </div>
    
        <div class="form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
            <label for="email"
                   class="form-control-label">Email Address
            </label>
            <input type="text"
                   class="form-control {{ $errors->has('email') ? 'form-control-danger' : '' }}"
                   id="email"
                   name="email"
                   value="{{ old('email') }}">
            {!! $errors->first('email','<div class="form-control-feedback">:message</div>') !!}
        </div>
    
        <div class="form-group {{ $errors->has('institution') ? 'has-danger' : '' }}">
            <label for="institution"
                   class="form-control-label">Institution Name
            </label>
            <input type="text"
                   class="form-control {{ $errors->has('institution') ? 'form-control-danger' : '' }}"
                   id="institution"
                   name="institution"
                   value="{{ old('institution') }}">
            {!! $errors->first('institution','<div class="form-control-feedback">:message</div>') !!}
        </div>
    
        <div class="form-group {{ $errors->has('zip') ? 'has-danger' : '' }}">
            <label for="zip"
                   class="form-control-label">Zipcode
            </label>
            <input type="text"
                   class="form-control {{ $errors->has('zip') ? 'form-control-danger' : '' }}"
                   id="zip"
                   name="zip"
                   value="{{ old('zip') }}">
            {!! $errors->first('zip','<div class="form-control-feedback">:message</div>') !!}
        </div>
        <div class="form-group text-center">
            <button type="submit"
                    class="btn btn-primary btn-block mx-auto mb-sm-2 mb-md-0 w-50">
                Register
            </button>
            <a href="{{ url('login') }}"
               class="btn btn-default btn-block w-50 mx-auto">
                Back to login
            </a>
            <a href=""
               class="mt-2 d-block">
                Recover Password?
            </a>
        </div>
    </form>


@endsection
