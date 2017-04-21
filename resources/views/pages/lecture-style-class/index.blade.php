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
        <h3>Introduction</h3>

        <p>The Lecture-style class (LC) version is appropriate if:</p>
        <ul>
            <li>Students sit in desks and do not have large tables where they can perform experiments (individual,
                movable desks are preferred to auditorium-style seating)
            </li>
            <li>
                Enrollment is greater than 35 students (but lower enrollments are also suitable, for instance if the
                room and meeting time requirements preclude using the SC version)
            </li>
            <li>
                The class meets approximately 45 hours/semester, typically in 50- or 75-minute sessions
            </li>
        </ul>
        <p>
            During each period the instructor uses PowerPoint slides to guide and pace the classroom activity. Students
            work with nearest neighbors as they watch movies of experiments or simulations, perhaps perform simple
            desktop experiments, respond to clicker questions, and use worksheets to record their answers to questions
            involving predictions, observations, making sense of data, and drawing conclusions. </p>
        <p>
            You can use the links to the left to find out about many aspects of the lecture-style version of the
            curriculum, including many of the materials for instructors. A full set of instructor materials, including
            answer keys, test banks, etc. is available from the login (password-protected) portion of this site. </p>
        <p>
            <strong>Pedagogy</strong> provides a description of the structure of each lesson and provides a detailed
            example. </p>
        <p>
            <strong>Equipment and Materials</strong> provides a list of optional materials that you can distribute to
            groups of students during some of the curriculum lessons so they can perform simple experiments on their
            chair tops. However, if this is not logistically feasible, there are demonstration movies that can be shown.
        </p>
        <p>
            <strong> Table of Contents with Time Estimates </strong> lists all the lessons in the curriculum (organized
            by module and unit), along with an estimate of how much time each lesson might be expected to take. </p>
        <p>
            <strong>Content Modules</strong> has a drop-down menu with links to each of the five content modules in the
            curriculum. Choosing a module takes you to a page showing graphic displays of the sequence of lessons and
            homework extensions for each unit in the module. Clicking on any of the lessons or extensions in these
            graphics opens a pop-up window that provides a brief description and links to relevant information and
            instructor materials. </p>
        <p>
            <strong>Student Materials</strong> is a viewable-only version of the entire set of student curriculum
            materials for the ten content units. To order materials for your class, you need to click on the link at the
            top of the page. (Because of its size [47 MB], this PDF file will take some time to load.) </p>
        <p>
            <strong>Teaching and Learning</strong> takes you to a page where you can download any of the teaching and
            learning lessons and homework extensions to copy for your students. [Unlike the content modules, the
            teaching and learning materials are free to use as you like.] </p>
        <p>
            <strong>Extension Index</strong> takes you to a page where you can link to the homework extensions for each
            module and unit in the curriculum. Students work through each extension online and then (usually) go to
            their institutions learning management system to take a quiz. </p>
        <p>
            <strong>Demonstration Movies and Simulations</strong> takes you to a page where you can link to the movies
            that instructors show during each lesson, or link to simulations used during some lessons. Students watch
            these movies during class and use them as a source of evidence to support their emerging ideas. The movies
            are organized by module, unit, and lesson; each lesson page contains all the movies for that lesson. </p>
        <p>
            <strong>Classroom Videos</strong> takes you to a page where you can link to the large number of classroom
            video clips showing students engaged in both small group and whole class discussion. These clips are
            organized by module, unit, and by lesson; each lesson page contains all the video clips for that lesson </p>
    </section>

@stop