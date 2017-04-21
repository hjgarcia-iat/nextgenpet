@extends('layouts.two-column')

@section('pageTitle','Faculty Online Learning Community for NGP')

@section('sidebar')
    @include('home._sidebar')
@stop

@section('banner')
    @include('home._slider')
@stop

@section('content')
    <p>
        The Next Gen PET FOLC is a community of faculty improving their instruction, conducting classroom research, and
        studying the development of student thinking in the context of physics or physical science courses for
        preservice elementary teachers using the Next Generation Physical Science and Everyday Thinking curriculum. </p>

    <h3>Why join the Next Gen PET FOLC?</h3>

    <ul>
        <li>If you appreciate the complexity of the learning process, value students’ deep engagement with core
            concepts, and want to explore the development of prospective elementary teachers’ thinking about physical
            science ideas and practices.
        </li>
        <li>If you are committed to actively engaging students, and becoming better instructors of prospective
            elementary teachers
        </li>
        <li>
            If you are interested in the opportunity for research in your own classrooms and those of colleagues in a
            large community of implementers
        </li>
    </ul>
    <p>
        <a href="http://www.ngpfolc.org/" target="_blank"><strong>Learn more</strong></a> about the Next Gen PET FOLC or
        complete an
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSekQdjSrhOoFUwu2hk9uBPnuBTDRiz6-iOcGNuRyQ3xzEmgOA/viewform" target="_blank"><strong>application</strong>
        </a>
    </p>

@stop
