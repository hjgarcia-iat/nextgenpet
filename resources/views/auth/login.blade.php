@extends('layouts.auth')
@section('pageTitle','Login')
@section('content')
    
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 align-self-center">
                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('/login') }}">
                    {{ csrf_field() }}
    
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
    
                    <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                        <label for="password"
                               class="form-control-label">Password
                        </label>
                        <input type="password"
                               class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}"
                               id="password"
                               name="password">
                        {!! $errors->first('password','<div class="form-control-feedback">:message</div>') !!}
                    </div>
    
                    <div class="form-group">
                        <button type="submit"
                                class="btn btn-primary">
                            Login
                        </button>
                        <a href="{{ url('register') }}"
                           class="btn btn-default">
                            Need an account? Register Here
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
