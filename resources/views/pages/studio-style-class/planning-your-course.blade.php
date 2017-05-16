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
        <h3>Planning Your Studio-Style Course</h3>
        <p>The full set of Next Gen PET materials consists of five modules, each with two units, along with a set of
            optional teaching and learning materials. The materials are published in modular form by <em>It’s
                About Time</em>, and you can order from one to five modules, depending on the duration of your course
            and how you want to organize it.
        </p>
        <p>For a one-semester (15 week) course, with approximately 75 hours of instructional time, you can plan to cover
            five or six units. For a one-quarter (10 weeks) course, with about 60 hours of instructional time, you can
            plan to cover four to six units. Although you need to order the materials at the module level, you can
            decide to teach an entire module or just one of the two units within the module. Also, the Matter and
            Interactions module is much longer than the other modules, so if you are teaching a physical science course
            including both physics and chemistry, you will probably only be able to cover fewer units than if you were
            teaching a course just with physics content.
        </p>
        <p>Following are examples of various ways you can organize your course around a set of units. These represent
            actual implementations by faculty who used the pre-publication version of the curriculum for either
            semester-long or quarter-long physics or physical science (physics and chemistry) courses.
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
            <li>M, EM, FM, CF, WS, L</li>
            <li>M, EM, PEF, FM, CF</li>
            <li>SE, EM, PEF, FM, CF, WS</li>
            <li>M, SE, EM, FM, CF, L</li>
            <li>M, EM, PEF, FM, CF, L</li>
            <li>EM, PEF, FM, CF, M, SE, WS (part), L (part)</li>
        </ul>
        <p>Quarter-length implementation for a physics course:
        </p>
        <ul class="list-unstyled">
            <li>M, EM, PEF and FM</li>
            <li>M, SE, EM, PEF, FM, CF</li>
        </ul>
        <p>Semester-length implementation for a physical science course:</p>
        <ul class="list-unstyled">
            <li>EM, PEF, FM, CF, WS, L, PC, CR (part)</li>
        </ul>
        <p>Quarter-length implementation for a physical science course:</p>
        <ul class="list-unstyled">
            <li>WS, L, PC, CR</li>
        </ul>
        
        <p>
            You may also wish to include some commentary in your course syllabus or as a stand-alone document about the
            Next Gen PET course and its pedagogy.
            <a href="">Here</a> is some text you can edit.
        </p>
    </section>

@stop