@extends('layouts.two-column')

@section('pageTitle')
    Demonstration Movies &amp; Simulations
@stop
@section('sidebar')
    @include('pages.lecture-style-class._sidebar')
@stop
@section('banner')
    @include('pages.lecture-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Demonstration Movies &amp; Simulations</h3>
        <p>
            <em>Next Gen PET</em> lessons and activities include movies shown to students during class. These are all
            short videos of demonstrations, experiments, or simulations that students are not able to carry out in class
            themselves. Since the Lecture-Style Class version of the curriculum contains far fewer opportunities for
            hands-on experiments for students (all of which are optional), it has far more demonstration movies than the
            Studio-Style Class version. Nearly every lesson has at least one movie, and most have several. In addition,
            in many lessons on-line simulations are used or referenced. </p>
        <p>
            The demonstration movies are available online to students and instructors. Links for each module are listed
            below. Each lesson in the module is listed on that page and has a link to a separate page with all the
            movies for that lesson embedded in the page, provided the lesson has at least one movie. All movies are
            shown here, including those you may not show in class (for example, demonstration movies of experiments that
            students actually conduct in class). There are separate links to any simulators used or referenced in the
            lesson. The student portal for the demonstration movies and extensions (which is the link you should give to
            your students) is also listed below. </p>

        <ul class="fa-ul">
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpet.sdsu.edu/movies/index_lc_mse.html">Magnetism and Static
                    Electricity Module </a>
            </li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpet.sdsu.edu/movies/index_lc_ie.html">Interactions and Energy
                    Module </a>
            </li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpet.sdsu.edu/movies/index_lc_if.html">Interactions and Forces
                    Module </a>
            </li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpet.sdsu.edu/movies/index_lc_wsl.html">Waves, Sound and Light
                    Module </a>
            </li>
            <li><i class="fa-li fa fa-html5"></i>
                <a href="http://nextgenpet.sdsu.edu/movies/index_lc_mi.html " target="_blank"> Matter and Interactions
                    Module </a>
            </li>
        </ul>
        <p>
            <a href="http://nextgenpet.sdsu.edu/lc/index.html" class="btn btn-primary" target="_blank">Student
                Portal</a>
        </p>
    </section>

@stop