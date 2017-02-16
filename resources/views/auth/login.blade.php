@extends('layouts.auth')
@section('pageTitle','Login')
@section('content')
    
    <div class="container">
        @include('layouts.partials.message')
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
    
                    <div class="form-group text-center">
                        <button type="submit"
                                class="btn btn-primary btn-block mx-auto mb-sm-2 mb-md-0 w-50">
                            Login
                        </button>
                        
                        <a href="{{ url('register') }}"
                           class="btn btn-default btn-block w-50 mx-auto">
                            Register
                        </a>
                        
                        <a href="" class="mt-2 d-block">
                            Recover Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
