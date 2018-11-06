@extends('layouts.auth')
@section('pageTitle','Recover Password')
@section('content')
    {!! Form::open(['url' => route('password.store'),'class' => 'form-horizontal']) !!}
    <div class="form-group{{ $errors->has('reset_email') ? ' has-danger' : '' }}">
        <label for="reset_email"
               id="reset_email"
               class="form-control-label">E-Mail Address
        </label>
        <input id="reset_email"
               type="email"
               class="form-control"
               name="reset_email"
               value="{{ old('reset_email') }}"
               required>
        {!! $errors->first('reset_email','<div class="form-control-feedback">:message</div>') !!}
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
