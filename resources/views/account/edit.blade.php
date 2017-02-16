@extends('layouts.auth')
@section('pageTitle','My Account')
@section('content')
    
    <div class="container">
        @include('layouts.partials.message')
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 align-self-center">
                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ route('my-account-update') }}">
                    {{ csrf_field() }}
    
                    <div class="form-group {{ $errors->has('first_name') ? 'has-danger' : '' }}">
                        <label for="first_name"
                               class="form-control-label">First Name
                        </label>
                        <input type="text"
                               class="form-control {{ $errors->has('first_name') ? 'form-control-danger' : '' }}"
                               id="first_name"
                               name="first_name"
                               value="{{ old('first_name', $user->account->first_name) }}">
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
                               value="{{ old('last_name', $user->account->last_name) }}">
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
                               value="{{ old('email', $user->email) }}">
                        {!! $errors->first('email','<div class="form-control-feedback">:message</div>') !!}
                    </div>
    
                    <div class="form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                        <label for="password"
                               class="form-control-label">New Password
                        </label>
                        <input type="password"
                               class="form-control {{ $errors->has('password') ? 'form-control-danger' : '' }}"
                               id="password"
                               name="password">
                        {!! $errors->first('password','<div class="form-control-feedback">:message</div>') !!}
                    </div>
    
                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-danger' : '' }}">
                        <label for="password_confirmation"
                               class="form-control-label">New Password Confirmation
                        </label>
                        <input type="password"
                               class="form-control {{ $errors->has('password_confirmation') ? 'form-control-danger' : '' }}"
                               id="password_confirmation"
                               name="password_confirmation">
                        {!! $errors->first('password_confirmation','<div class="form-control-feedback">:message</div>') !!}
                    </div>
                    
                    <div class="form-group">
                        <button type="submit"
                                class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
