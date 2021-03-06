@extends('layouts.two-column')

@section('pageTitle','Research-Based')

@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')
    <p>
        The development of <em>Next Gen PET</em> and its predecessor curricula was guided by five design principles
        based on research on learning. The following table shows how the design principles are put into action in <em>Next
            Gen PET</em> . </p>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>Design Principles</th>
                <th>Studio-style class (SC)</th>
                <th>Lecture-style class (LC)</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <strong>1. Learning builds on prior knowledge.</strong>
                </td>
                <td>Questions within activities are designed to elicit and build on students’ initial ideas.</td>
                <td>Similar to SC.</td>
            </tr>
            <tr>
                <td>
                    <strong>2. Learning is a complex process.</strong>
                </td>
                <td>Big ideas/science practices developed within & across units. A variety of question types guide
                    students’ thinking. Extensions (HW) are computer-based tutorials that include online quizzes.
                </td>
                <td>Similar to SC, except students do not write their own explanations; instead they evaluate carefully
                    crafted explanations for accuracy. Extensions are the same as SC
                </td>
            </tr>
            <tr>
                <td>
                    <strong>3. Learning is facilitated through interaction with tools.</strong>
                </td>
                <td>Students use hands-on materials, data acquisition tools and simulations, and answer questions on
                    activity sheets.
                </td>
                <td>Students watch videos of experiments, demos and simulations, answer questions with ‘clickers’ and on
                    lesson sheets.
                </td>
            </tr>
            <tr>
                <td>
                    <strong>4. Learning is facilitated through interactions with others</strong>
                </td>
                <td>Students engage in small group and whole class discussions.</td>
                <td>Students discuss thinking with neighbors, limited sharing with whole class.</td>
            </tr>
            <tr>
                <td>
                    <strong>5. Learning is facilitated through establishment of certain specific behavioral practices
                        and expectations.</strong>
                </td>
                <td>Written prompts/instructor comments support expectations of providing evidence, active
                    participation, and responsibility for learning.
                </td>
                <td>Similar to SC except the degree of participation is less and students are expected to reach
                    consensus at end of each lesson.
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <p>
        To learn more about <em>Next Gen PET</em> 's Flexibility, <a class="btn-link" href="{{ url('about/flexibility') }}">click
            here</a>
    </p>
    <p>
        Get back to main page, <a class="btn-link" href="{{ url('/') }}">click here</a>
    </p>


@stop