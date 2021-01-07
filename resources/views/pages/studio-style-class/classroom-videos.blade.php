@extends('layouts.two-column')

@section('pageTitle','Studio Style Class')

@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop

@section('banner')
    @include('pages.studio-style-class._banner')
@stop

@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Classroom Videos</h3>
        <p>We have video clips available of student discussions in studio-style classrooms for many Next Gen PET
            activities (SC). In these video clips, students conduct experiments or run computer simulations in small
            groups; have small group discussions about the experiments or questions posed to them by the workbook (text)
            or the instructor; and present their ideas on whiteboards to the whole class. The video clips range from
            less than a minute in duration to a few minutes long.</p>
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
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//videos/index_sc_mse.html">Magnetism and Static
                    Electricity Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//videos/index_sc_ie.html">Interactions and Energy
                    Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//videos/index_sc_if.html">Interactions and Force
                    Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//videos/index_sc_wsl.html">Waves, Sound, and Light
                    Module </a>
            </li>
            <li>
                <i class="fa-li fa fa-video-camera"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//videos/index_sc_mi.html">Matter and Interactions
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

