<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.mobile_nav')
        @include('layouts.partials.header')
        
        @include('layouts.partials.title')
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Questions? Comments?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>
                        We'd love to hear from you
                    </h4>
                    
                    {{ Form::open(['class' => 'form']) }}
                    
                    <div class="form-group{{ ($errors->first('name') ? ' has-error' : '') }}">
                        <label for="name">Name</label> <input type="text" class="form-control" id="name"
                                                              placeholder="Name" name="name"
                                                              value="{{ old('name') }}">
                        {{ $errors->first('name','<span class="help-block"></span>') }}
                    </div>
                    
                    <div class="form-group{{ ($errors->first('email') ? ' has-error' : '') }}">
                        <label for="email">Email Address</label> <input type="email" class="form-control" id="email"
                                                                        placeholder="Email" name="email"
                                                                        value="{{ old('email') }}">
                        {{ $errors->first('name','<span class="help-block"></span>') }}
                    </div>
                    
                    <div class="form-group{{ ($errors->first('subject') ? ' has-error' : '') }}">
                        <label for="subject">Subject</label> <input type="text" class="form-control" id="subject"
                                                                    placeholder="Subject" name="subject"
                                                                    value="{{ old('subject') }}">
                        {{ $errors->first('subject','<span class="help-block"></span>') }}
                    </div>
                    
                    <div class="form-group{{ ($errors->first('message') ? ' has-error' : '') }}">
                        <label for="message">Subject</label>
                        <textarea name="message" id="message" class="form-control" placeholder="Message" cols="30" rows="10"></textarea>
                        
                        {{ $errors->first('message','<span class="help-block"></span>') }}
                    </div>
                    
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    
                    {{ Form::close() }}
                </div>
            </div>
            
            <hr>
            
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <h4>Contact Us</h4>
                    <p>
                    It's About Time<sup>&reg;</sup> <br> 333 North Bedford Road Suite 110 <br> Mount Kisco, N.Y. 10549
                    </p>
                    <p>
                    Toll Free: 1-888-698-TIME <br> Office: 914-273-2233 <br> Fax: 914-206-6444
                    </p>
                </div>
                <div class="col-md-7 visible-md visible-lg">
                    <img src="{{ asset('img/contact-us.jpg') }}" class="img-responsive img-thumbnail" alt="">
                </div>
            </div>
        
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
