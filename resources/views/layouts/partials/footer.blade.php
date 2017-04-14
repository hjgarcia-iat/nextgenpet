<div class="page-footer-logos">
    <div class="container">
        <div class="row">
            <div class="col-sm hidden-sm-down">
            </div>
            <div class="col-sm text-center align-self-center">
                <img alt="NextGEN PET"
                     class="center-block img-responsive"
                     src="{{ asset('img/nextgenpetlogo.png') }}"
                     width="95">
            </div>
            <div class="col-sm text-center align-self-center">
                <img alt="National Science Foundation"
                     class="center-block img-responsive"
                     src="{{ asset('img/nsf.png') }}"
                     width="95">
            </div>
            <div class="col-sm text-center align-self-center">
                <img alt="Chevron"
                     class="center-block img-responsive"
                     src="{{ asset('img/chevron.png') }}"
                     width="95">
            </div>
            <div class="col-sm text-center align-self-center">
                <img alt="S.D. Bechtel, Jr. Foundation"
                     class="center-block img-responsive"
                     src="{{ asset('img/betchel.png') }}"
                     width="150">
            </div>
            <div class="col-sm hidden-sm-down">
            </div>
        </div>
    </div>
</div>
<footer class="page-footer">
    <div class="container">
        <div class="page-footer-content">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">
                        We'd love to hear from you
                    </h3>
                    {!! Form::open(['url' => route('help.post'), 'class' => 'form mt-4', 'id' => 'contact']) !!}
                    {!! Honeypot::generate('my_name', 'my_time') !!}
                    <div class="row">
                        <div class="col-sm-12 col-md-8 offset-sm-0 offset-md-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ ($errors->first('name') ? ' has-danger' : '') }}">
                                        <label for="name"
                                               class="sr-only">Name
                                        </label>
                                        <input type="text"
                                               class="form-control{{ ($errors->first('name') ? ' form-control-danger' : '') }}"
                                               id="name"
                                               name="name"
                                               required="required"
                                               placeholder="Enter Full Name"
                                               value="{{ old('name') }}">
                                        {!! $errors->first('name','<div class="form-control-feedback">:message</div>') !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ ($errors->first('email') ? ' has-danger' : '') }}">
                                        <label for="email"
                                               class="sr-only">Email Address
                                        </label>
                                        <input type="email"
                                               class="form-control{{ ($errors->first('email') ? ' form-control-danger' : '') }}"
                                               id="email"
                                               name="email"
                                               required="required"
                                               placeholder="Enter Email Address"
                                               value="{{ old('email') }}">
                                        {!! $errors->first('email','<div class="form-control-feedback">:message</div>') !!}
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="form-group{{ ($errors->first('subject') ? ' has-danger' : '') }}">
                                <label for="subject"
                                       class="sr-only">Subject
                                </label>
                                <input type="text"
                                       class="form-control{{ ($errors->first('subject') ? ' form-control-danger' : '') }}"
                                       id="subject"
                                       name="subject"
                                       required="required"
                                       placeholder="Enter Subject"
                                       value="{{ old('subject') }}">
                                {!! $errors->first('subject','<div class="form-control-feedback">:message</div>') !!}
                            </div>
                            <div class="form-group{{ ($errors->first('comment') ? ' has-danger' : '') }}">
                                <label for="comment"
                                       class="sr-only">Message
                                </label>
                                <textarea name="comment"
                                          id="comment"
                                          required="required"
                                          class="form-control{{ ($errors->first('comment') ? ' form-control-danger' : '') }}"
                                          cols="30"
                                          placeholder="Enter Message"
                                          rows="5">{{ old('comment') }}</textarea>
                                
                                {!! $errors->first('comment','<div class="form-control-feedback">:message</div>') !!}
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <div class="form-group">
                                        <input type="submit"
                                               name="submit"
                                               class="btn btn-primary btn-block btn-lg"
                                               value="Submit">
                                    </div>
                                </div>
                            </div>
                        
                        
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <p class="text-center">
                        <sup>
                            &copy;
                        </sup>
                        It's About Time {{ date('Y') }}. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>