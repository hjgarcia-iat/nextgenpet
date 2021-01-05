@extends('layouts.one-column')
@section('pageTitle','My Account')
@section('content')
    
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form class="form-horizontal well"
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
                    <p class="text-muted mt-2">You password should be at least 6 characters long and include at
                        least one digit, one lowercase letter and one uppercase letter.
                    </p>
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
                
                <div class="form-group text-center">
                    <button type="submit"
                            class="btn btn-primary btn-block mx-auto mb-sm-2 mb-md-0 w-50">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>


@endsection
