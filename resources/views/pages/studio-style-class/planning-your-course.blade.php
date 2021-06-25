@extends('layouts.two-column')@section('pageTitle','Studio Style Class')
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
        <p>The full set of Next Gen PET materials consists of ten units, organized into five modules, along with a set of optional teaching and learning materials and optional planning and conducting investigations materials. The materials are published as separate units by Activate Learning, depending on the duration of your course and how you want to organize it.</p>

        <p>For a one-semester (15 week) course, with approximately 75 hours of instructional time, you can plan to cover five or six units. For a one-quarter (10 weeks) course, with about 60 hours of instructional time, you can plan to cover four to six units. In choosing which units to use from the five modules, keep the following information in mind:
        </p>

        <ul>
            <li>
                For the
                <em>Developing Models for Magnetism and Static Electricity Module</em>, either Unit M or Unit SE can be implemented by itself, independent of the other unit.
            </li>
            <li>
                For the
                <em>Interactions and Energy Module</em>, Unit EM can be implemented by itself, but it is a pre-requisite for Unit PEF.
            </li>
            <li>
                For the
                <em>Interactions and Forces Module</em>, Unit FM is a pre-requisite for Unit CF. Both units are usually implemented together.
            </li>
            <li>
                For the
                <em>Waves, Sound and Light Module</em>, either Unit WS or Unit L can be implemented by itself, independent of the other unit.
            </li>
            <li>
                For the
                <em>Matter and Interactions Module</em>, Unit PC can be implemented by itself, but it is a pre-requisite for Unit CR. Also, these two units are longer than the other units in the curriculum, so if you are teaching a physical science course you can include two or maybe three other units in addition to these two.
            </li>
        </ul>

        <p>Following are examples of various ways you can organize your course around a set of units. These represent actual implementations by faculty who are teaching either semester-long or quarter-long physics or physical science (physics and chemistry) courses. We also provide an example for a hybrid implementation, where the class meets for large-enrollment lectures and a small-enrollment lab each week.</p>

        <p>There are also links to the daily schedule of activities for some of these implementations. You can use these for guidance in planning your own course.
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
            <li>M, EM, FM, CF, WS, L
                <a href="https://s3.amazonaws.com/nextgenpet/web-docs/planning-your-course/studio-style/tamara-schedule.pdf"
                   class="btn-link" target="_blank">(Schedule)
                </a>
            </li>
            <li>M, EM, PEF, FM, CF</li>
            <li>SE, EM, PEF, FM, CF, WS
                <a href="https://s3.amazonaws.com/nextgenpet/web-docs/planning-your-course/studio-style/steve-r-schedule.pdf"
                   class="btn-link" target="_blank">(Schedule)
                </a>
            </li>
            <li>M, SE, EM, Part of PEF, F, CF, Parts of WS and L</li>
            <li>M, SE, EM, FM, CF, L</li>
            <li>M, EM, PEF, FM, CF, L</li>
        </ul>
        <p>Quarter-length implementation for a physics course:
        </p>
        <ul class="list-unstyled">
            <li>M, EM, PEF and FM</li>
            <li>M, SE, EM, PEF, FM, CF
                <a href="https://s3.amazonaws.com/nextgenpet/web-docs/planning-your-course/studio-style/david-schedule-physics.pdf"
                   class="btn-link" target="_blank">(Schedule)
                </a>
            </li>
        </ul>
        <p>Semester-length implementation for a physical science course:</p>
        <ul class="list-unstyled">
            <li>EM, PEF, FM, CF, Parts of WS and L, PC, CR
                <a href="https://s3.amazonaws.com/nextgenpet/web-docs/planning-your-course/studio-style/larry-schedule-psci.pdf"
                   class="btn-link" target="_blank">(Schedule)
                </a>
            </li>
        </ul>
        <p>Quarter-length implementation for a physical science course:</p>
        <ul class="list-unstyled">
            <li>WS, L, PC, CR
                <a href="https://s3.amazonaws.com/nextgenpet/web-docs/planning-your-course/studio-style/david-schedule-psci.pdf"
                   class="btn-link" target="_blank">(Schedule)
                </a>
            </li>
        </ul>

        <p>Hybrid implementation:  Semester-length physics course that includes both 2 75-min lectures and one 110-min lab per week.  The instructor orders both lecture-style and studio-style units from the publisher.</p>

        <p>
            <a href="https://nextgenpet.s3.amazonaws.com/web-docs/planning-your-course/studio-style/SampleHybridCourse.pdf"
                    target="_blank">Sample Schedule</a></p>

        <p>See <a href="{{ url('studio-style-class/hybrid-implementation') }}">Hybrid Implementation</a> for more about this kind of implementation.</p>

        <ul>
            <li>In lecture part, all lecture-style units: M, EM, FM, CF, WS</li>
            <li>In laboratory part, all studio-style units: SE, L</li>
        </ul>

        <p>
            You may also wish to include some commentary in your course syllabus or as a stand-alone document about the Next Gen PET course and its pedagogy.
            <a href="https://s3.amazonaws.com/nextgenpet/web-docs/planning-your-course/studio-style/to-students-studio.docx"
               target="_blank">Here
            </a>
            is some text you can edit.
        </p>
    </section>

@stop