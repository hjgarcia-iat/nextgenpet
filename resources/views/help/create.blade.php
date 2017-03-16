@extends('layouts.one-column')

@section('pageTitle','Questions? Comments')

@section('banner')
    <div class="container carousel-container fill visible-md visible-lg">
        <div id="myCarousel"
             class="carousel slide">
            <div class="carousel-inner">
                <div class="active item">
                    <div class="fill"
                         style="background-image:url('../img/lecture-style-class.jpg');">
                        <div class="container"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('content')
    
    <div class="row">
        <div class="col-md-12">
            
            @include('layouts.partials.message')
            
            <h4>
                We'd love to hear from you
            </h4>
            
            {{ Form::open(['class' => 'form']) }}
            
            <div class="form-group{{ ($errors->first('name') ? ' has-danger' : '') }}">
                <label class="form-control-label"
                       for="name">Name
                </label>
                <input type="text"
                       class="form-control{{ ($errors->first('name') ? ' form-control-danger' : '') }}"
                       id="name"
                       name="name"
                       value="{{ old('name') }}">
                {!! $errors->first('name','<div class="form-control-feedback">:message</div>') !!}
            </div>
            
            <div class="form-group{{ ($errors->first('email') ? ' has-danger' : '') }}">
                <label class="form-control-label"
                       for="email">Email Address
                </label>
                <input type="email"
                       class="form-control{{ ($errors->first('email') ? ' form-control-danger' : '') }}"
                       id="email"
                       name="email"
                       value="{{ old('email') }}">
                {!! $errors->first('name','<div class="form-control-feedback">:message</div>') !!}
            </div>
            
            <div class="form-group{{ ($errors->first('subject') ? ' has-danger' : '') }}">
                <label class="form-control-label"
                       for="subject">Subject
                </label>
                <input type="text"
                       class="form-control{{ ($errors->first('subject') ? ' form-control-danger' : '') }}"
                       id="subject"
                       name="subject"
                       value="{{ old('subject') }}">
                {!! $errors->first('subject','<div class="form-control-feedback">:message</div>') !!}
            </div>
            
            <div class="form-group{{ ($errors->first('comment') ? ' has-danger' : '') }}">
                <label class="form-control-label"
                       for="comment">Message
                </label>
                <textarea name="comment"
                          id="comment"
                          class="form-control{{ ($errors->first('comment') ? ' form-control-danger' : '') }}"
                          cols="30"
                          rows="10"></textarea>
                
                {!! $errors->first('comment','<div class="form-control-feedback">:message</div>') !!}
            </div>
            
            <input type="submit"
                   name="submit"
                   class="btn btn-primary"
                   value="Submit">
            
            {{ Form::close() }}
        </div>
    </div>
    
    <hr>
    
    <div class="row">
        <div class="col-xs-12 col-md-5">
            <h4>Contact Us</h4>
            <p>
                It's About Time
                <sup>&reg;</sup>
                <br>
                333 North Bedford Road Suite 110
                <br>
                Mount Kisco, N.Y. 10549
            </p>
            <p>
                Toll Free: 1-888-698-TIME
                <br>
                Office: 914-273-2233
                <br>
                Fax: 914-206-6444
            </p>
        </div>
        <div class="col-md-7 visible-md visible-lg">
            <img src="{{ asset('img/contact-us.jpg') }}"
                 class="img-responsive img-thumbnail"
                 alt="">
        </div>
    </div>


@stop