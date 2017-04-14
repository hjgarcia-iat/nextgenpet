@extends('layouts.auth')
@section('pageTitle','Recover Password')
@section('content')
    <h3>Recover your password</h3>
    {!! Form::open(['url' => route('password.store'),'class' => 'form-horizontal']) !!}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email"
               class="form-control-label">E-Mail Address
        </label>
        <input id="email"
               type="email"
               class="form-control"
               name="email"
               value="{{ old('email') }}"
               required>
        
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    
    </div>
    <div class="form-group text-center">
        <button type="submit"
                class="btn btn-primary btn-block mx-auto mb-sm-2 mb-md-0 w-50">
            Send Reset Link
        </button>
        <a href="{{ route('login.create') }}" class="btn btn-default btn-block mx-auto mb-sm-2 mb-md-0 w-50">
            Back to Login
        </a>
    </div>
    {!! Form::close() !!}
@endsection
