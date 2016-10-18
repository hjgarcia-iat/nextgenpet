@extends('layouts.two-column')

@section('pageTitle')
    Faculty Online Learning Community for NGP
@stop

@section('sidebar')
    @include('home._sidebar')
@stop

@section('banner')
    @include('home._slider')
@stop

@section('content')
    <p>
    Join <em>Next Gen PET</em> FOLC, an online community of faculty engaged in course transformation and continued professional development in the context of the Next Generation Physical Science and Everyday Thinking (Next Gen PET) curricular materials.
    </p>
    
    <p>
    <strong><em>Who is behind this effort?</em></strong>
    </p>
    <p>
    With funding from NSF, the NGP community includes a leadership team and plus ten founding faculty. Together we have extensive experience with teaching PET/PSET/LPS, curriculum and professional development, instructional technology, assessment, research on teaching and learning, and dissemination / faculty change.
    </p>
    
    <p>
    The leadership team includes:
    </p>
    <p>
    Edward Price, Cal State San Marcos <br> Fred Goldberg, San Diego State University <br> Steve Robinson, Tennessee Tech
    <br> Chandra Turpen, University of Maryland, College Park <br>Paula Engelhardt, Tennessee Tech <br>Melissa Dancy, University of Colorado, Boulder
    </p>
    

    <p><strong><em>What will the faculty community do?</em></strong></p>
    <p>Lead faculty will mentor clusters of 4-5 faculty. Together, the faculty community will document implementation strategies, challenges, and lessons learned. Each cluster will engage in its own action research projects, meet regularly via videoconference, communicate and collaborate using online tools, and meet in person at conferences and workshops. </p>

    <p><strong><em>Who should consider participating?</em></strong></p>
    <p>Faculty who regularly teach a physics or physical science course for pre-service elementary teachers (in either lecture or studio format); are committed to student-centered, active learning pedagogy; and can commit to actively participating in the community.</p>


    <p><strong><em>What is expected of participating faculty?</em></strong></p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Faculty participants will commit to</th>
                <th>Benefits include</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td>Attending a 2.5 day workshop in summer 2016</td>
              <td>Support for implementing a research-based curriculum</td>
            </tr>
            <tr>
                <td>Teaching Next Gen PET at least four times between fall '17 and spring '21</td>
                <td>Opportunities for professional development and leadership</td>
            </tr>
            <tr>
                <td>Teaching Next Gen PET at least four times between fall '17 and spring '21</td>
                <td>Opportunities for professional development and leadership</td>
            </tr>
            <tr>
                <td>Working with a community of fellow implementers for mutual support</td>
                <td>Data on their students' outcomes</td>
            </tr>
            <tr>
                <td>Contributing to collaborative action research project(s)</td>
                <td>$500/year honorarium</td>
            </tr>
            <tr>
                <td>Collecting assessment data to be evaluated by project staff</td>
                <td></td>
            </tr>
        </tbody>
    </table>
    
    <p>
    <strong><em>Do you want to participate?</em></strong>
    </p>
    <p>
    If you are interested participating in Next Gen PET FOLC,
    <a href="#" data-toggle="modal" data-target="#messageModal">
        Click Here <i class="fa fa-angle-double-right"></i>
    </a>
    </p>


    <!-- Button trigger modal -->
    

    <!-- Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {{ Form::open(['class' => 'form','id' => 'message-form','url' => '/online-learning']) }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                </div>
                <div class="modal-body">
                    
    
                    <div class="form-group{{ ($errors->first('name') ? ' has-error' : '') }}">
                        <label class="control-label" for="name">Name</label>
                        <input type="text" class="form-control"
                               id="name"
                               placeholder="Name" name="name"
                               value="{{ old('name') }}">
                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                    </div>
    
                    <div class="form-group{{ ($errors->first('email') ? ' has-error' : '') }}">
                        <label class="control-label" for="email">Email Address</label>
                        <input type="email"
                               class="form-control"
                               id="email"
                               placeholder="Email"
                               name="email"
                               value="{{ old('email') }}">
                        {!! $errors->first('name','<span class="help-block">:message</span>') !!}
                    </div>
    
                    <div class="form-group{{ ($errors->first('comment') ? ' has-error' : '') }}">
                        <label class="control-label" for="comment">Message</label>
                        <textarea name="comment" id="comment"
                                  class="form-control"
                                  placeholder="Message"
                                  cols="30"
                                  rows="10"></textarea>
        
                        {!! $errors->first('comment','<span class="help-block">:message</span>') !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
    
@stop
