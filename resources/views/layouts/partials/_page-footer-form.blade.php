<div class="row">
    <div class="col-md-12">

        <form action="{{ route('help.post') }}"
              method="post"
              class="form mt-4"
              id="contact">
            {{ csrf_field() }}

            {!! Honeypot::generate('my_name', 'my_time') !!}


            <h3 class="text-center display-5">Get in Touch With Us.</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ ($errors->first('name') ? ' has-danger' : '') }}">
                                <label for="name"
                                       class="sr-only">Name </label>

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
                                       class="sr-only">Email Address </label>

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
                               class="sr-only">Subject </label>

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
                               class="sr-only">Message </label>

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
        </form>
    </div>
</div>