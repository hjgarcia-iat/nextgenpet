@extends('layouts.two-column')

@section('pageTitle','Flexibility')
@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')

    <p>
        <strong>Next Gen PET’s flexibility</strong> provides many options. In any implementation, instructors can choose
        which modules to include, whether or not to include Engineering Design activities, whether or not to include
        Teaching and Learning activities, and which instructional format to use. This allows instructors to tailor their
        course to match their content focus, meeting time, classroom setting, and students’ interests.
    </p>
    <p>
        <strong>The Studio Style Class (SC) version</strong> is best suited for lower enrollment courses that meet ~5
        hours/week and take place in a lab or workroom where students can work in groups around tables and perform
        experiments. In the SC version, students spend the majority of their time with their group of 3-4 peers making
        predictions, performing experiments, drawing conclusions, answering questions in a workbook, and discussing
        their ideas both within their group and with the class.
    </p>
    <p>
        Select modules from the SC version would also be ideal for science methods classes for credential students or
        professional learning workshops for in-service teachers. In either case the pre-service or in-service elementary
        teachers could work through a single unit (e.g. magnetism or forces), and then work through the associated
        engineering design activities and teaching and learning activities. Then they could build on their own learning
        experiences to talk about their roles as teachers and plan (or begin to plan) how they would help their students
        learn the NGSS.
    </p>
    <p>
        <strong>The Lecture Style Class (LC) version</strong> is best suited for courses that meet ~3 hours/week in
        lecture-style classrooms where students have desktops on which they can work. The LC version is suitable for
        courses with large enrollments, or in courses with smaller enrollments with limited meeting time and facilities.
        The content and pedagogical approach is similar to the SC version, but in the LC version: (1) students do
        experiments requiring simple materials on their desktops, but for more extensive experiments, they watch videos;
        (2) students respond to questions (using handheld response devices [e.g., “clickers”] or smart phones) to share
        ideas with the whole class; and (3) the instructor manages the class time through a set of PowerPoint slides
        that align with the student materials.
    </p>

    <p><strong>A Hybrid Implementation using both the SC and LC versions is also possible</strong>. If your course
        combines lecture and lab sessions in one course, we have also tested hybrid implementations of studio and
        lecture materials. This implementation takes advantage of the flexible, modular structure of the materials to
        fit this traditional course format.
    </p>

    <p>
        Learn how <em>Next Gen PET</em> is Research-Based, <a class="btn-link" href="{{ url('about/research-based') }}">click
            here</a>
    </p>
    <p>
        Get back to main page, <a class="btn-link" href="{{ url('/') }}">click here</a>
    </p>
@stop