@extends('layouts.two-column')

@section('pageTitle','Lecture Style Class')

@section('sidebar')
    @include('pages.lecture-style-class._sidebar')
@stop

@section('banner')
    @include('pages.lecture-style-class._banner')
@stop

@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Classroom Videos</h3>
        <p>We have video clips available of student discussions in lecture-style classrooms for most Next Gen PET
            lessons (LC). In these video clips, students conduct simple chair top experiments in small groups or watch
            movies of experiments; have small group discussions about the experiments or questions posed to them by the
            workbook (text) or the instructor; and engage in whole-class discussions. The video clips range from less
            than a minute in duration to a few minutes long.</p>
        <p>
            The video clips are intended to illustrate what actual classroom discourse may look like, so instructors can
            be prepared for student discussions in their own classrooms. Many video clips also illustrate the common
            ideas that students have about physical science phenomena before instruction. The clips can also be used for
            professional development purposes, for use in a course that addresses science learning, or for researchers
            interested in studying student learning. </p>

        <p>
            The video clips are organized by module (linked below), unit, and lesson. Each lesson page has all the video
            clips for that activity. </p>
        <ul class="fa-ul">
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a href="http://nextgenpetstudent.activatelearning.com//videos/index_lc_mse.html" target="_blank">Magnetism and Static
                    Electricity Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a href="http://nextgenpetstudent.activatelearning.com//videos/index_lc_ie.html" target="_blank">Interactions and Energy
                    Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a href="http://nextgenpetstudent.activatelearning.com//videos/index_lc_if.html" target="_blank">Interactions and Force
                    Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a href="http://nextgenpetstudent.activatelearning.com//videos/index_lc_wsl.html" target="_blank">Waves, Sound, and Light
                    Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a href="http://nextgenpetstudent.activatelearning.com//videos/index_lc_mi.html" target="_blank"> Matter and Interactions
                    Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//videos/index_tl.html ">Teaching and Learning </a>
            </li>
        </ul>
        <p>
            <a href="http://nextgenpetstudent.activatelearning.com/videos/index.html" class="btn btn-primary" target="_blank">Classroom Videos Portal</a>
        </p>
    </section>
@stop

