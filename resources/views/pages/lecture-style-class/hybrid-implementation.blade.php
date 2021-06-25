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
        <h3>Hybrid Lecture/Lab Implementation</h3>
        <p>Many universities have lab science classes that include two or three lectures per week along with a separate
            lab session. If your course follows this structure, you may wish to use a hybrid implementation that uses
            both Studio-style and Lecture-style class materials.
        </p>
        <p>Since the materials are modular, they can be used in a variety of course structures. The best mix for your
            course will depend on your structure. With pedagogical thinking built into the design of the materials,
            using it can help prompt instructional behavior that is research-based, assisting any course reform.
        </p>
        <p>Depending on your Hybrid implementation choice, it may make sense for students to use Studio materials,
            Lecture materials, or a combination (some units studio, some lecture). For example, if one individual is
            teaching both the lecture and lab, it may be possible to move through the content in sequence, alternating
            between settings and using the next activity for a topic. In this case, the best materials may be the studio
            materials supplemented by the use of instructor lecture slides when in a lecture setting. A hybrid
            implementation like this works, although at your site you may find ways to customize or improve the schedule
            or the delivery as you gain familiarity with the materials.
        </p>
        <p>A less intuitive way to do a hybrid implementation is to schedule <em>different</em> content in the lecture
            and the lab. While this is an unusual approach, it solves the difficulty in coordinating lecture and lab
            schedules. This approach has been tested and works well. It also highlights connections in scientific <em>practices</em>
            in each setting, a dimension of the NGSS on equal footing with content (&ldquo;disciplinary core ideas.&rdquo;)
            The schedule below is based on this implementation.
        </p>
        <p>The full set of Next Gen PET materials consists of ten units, organized into five modules, along with a set
            of optional teaching and learning materials and optional planning and conducting investigations materials.
            The materials are published as separate units by Activate Learning, and you can order any number and
            sequence of units you wish, depending on the duration of your course and how you want to organize it.&nbsp;
        </p>
        <p>For a one-semester (15 week) or quarter (10 week), with 36-40 hours of instructional time, you can plan to
            fully cover four or five units. In choosing which units to use from the five modules, keep the following
            information in mind:
        </p>
        <ul>
            <li>For the&nbsp;<em>Developing Models for Magnetism and Static Electricity Module</em>, either Unit M or
                Unit SE can be implemented by itself, independent of the other unit.
            </li>
            <li>For the&nbsp;<em>Interactions and Energy Module</em>, Unit EM can be implemented by itself, but it is a
                pre-requisite for Unit PEF.
            </li>
            <li>For the&nbsp;<em>Interactions and Forces Module</em>, Unit FM is a pre-requisite for Unit CF. Both units
                are usually implemented together.
            </li>
            <li>For the&nbsp;<em>Waves, Sound and Light Module</em>, either Unit WS or Unit L can be implemented by
                itself, independent of the other unit.
            </li>
            <li>For the&nbsp;<em>Matter and Interactions Module</em>, Unit PC can be implemented by itself, but it is a
                pre-requisite for Unit CR. Also, these two units are longer than the other units in the curriculum, so
                if you are teaching a physical science course you can include two or maybe three other units in addition
                to these two.
            </li>
        </ul>
        <p>Example hybrid implementation: A semester-length physics course that includes both two 75-min lectures and
            one 110-min lab per week. The instructor orders both lecture-style and studio-style units from the
            publisher.
        </p>
        <ul>
            <li>In lecture part, all lecture-style units: M, EM, FM, CF, WS</li>
        </ul>
        <ul>
            <li>In laboratory part, all studio-style units: SE, L</li>
        </ul>
        <p><a href="https://nextgenpet.s3.amazonaws.com/web-docs/planning-your-course/lecture-style/SampleHybridCourse.pdf" target="_blank">Sample Schedule</a></p>
    </section>

@stop