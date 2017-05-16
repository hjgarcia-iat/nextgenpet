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
        <h3>Planning Your Lecture-Style Course</h3>
        <p>
            The full set of Next Gen PET materials consists of five modules, each with two units, along with a set of
            optional teaching and learning materials. The materials are published in modular form by <em>It’s About Time</em>,
            and you can order from one to five modules, depending on the duration of your course and how you want to
            organize it.
        </p>
        <p>For a one-semester (15 week) course, with 37-40 hours of instructional time, you can plan to fully cover four
            or five units, or part of more. Although you need to order the materials at the module level, you can decide
            to teach an entire module or just one of the two units within the module.
        </p>
        <p>Following are examples of various ways you can organize your course around a set of units. These represent
            actual implementations by faculty who used the pre-publication version of the curriculum for semester-long,
            lecture-style, physics or physical science (physics and chemistry) courses. These courses tend to meet for
            seventy-five minutes twice a week.
        </p>
        <p>There are also links to the daily schedule of activities for some of these implementations. You can use these
            for guidance in planning your own course.
        </p>
        
        <ul class="list-unstyled">
            <li>M = Magnetism; SE = Static Electricity</li>
            <li>EM = Energy Model of Interactions; PEF = Potential Energy and Fields</li>
            <li>FM = Force Model of Interactions; CF = Combinations of Forces</li>
            <li>WS = Waves and Sound; L = Light and Color</li>
            <li>PC = Physical Changes; CR = Chemical Reactions</li>
        </ul>
        <p>Semester-length implementation for a physics course:</p>
        <ul class="list-unstyled">
            <li>SE, EM, PEF, FM, CF</li>
            <li>M, SE, EM, FM (part), CF (part), WS (part), L</li>
            <li>M, EM, FM, CF, WS, L</li>
            <li>EM, PEF, FM, CF</li>
        </ul>
        <p>Semester-length implementation for a physical science course:</p>
        <ul class="list-unstyled">
            <li>EM, FM CF, PC, CR
            </li>
        </ul>
        <p>
            Here is an example of a physics course taught in a lecture-lab setting. The class met twice a week for
            seventy-five minutes in a lecture-style setting and once a week for 110 minutes in a lab (studio-style)
            setting. The student materials used were a mix of lecture-style lessons (L) and studio-style activities (A),
            as indicated in the schedule linked below.
        </p>
        <ul class="list-unstyled">
            <li>M, SE, EM, PEF, FM, CF, WS, L</li>
        </ul>
        <p>
            Note that if you choose a mixture of lecture-style and studio-style materials as done here, you would need
            to order the modules of each version separately. For example, this instructor used the lecture-style version
            of Unit M and the studio-style version of Unit SE. To do the same in your course, you would need to order
            both the lecture-style and studio-style versions of the Magnetism and Static Electricity Module, which
            contains these two units.

        </p>
        <p>You may also wish to include some commentary in your course syllabus or as a stand-alone document about the
            Next Gen PET course and its pedagogy.
            <a href="">Here</a> is some text you can edit.
        </p>
    </section>

@stop