@extends('layouts.two-column')

@section('pageTitle','Overview of Teaching &amp; Learning Materials')
@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')


    <p>Teaching and Learning activities help
        <em>Next Gen PET</em>
       students make explicit connections between their own learning; the learning and teaching of children in elementary school; and the core ideas, science and engineering practices, and crosscutting concepts of the NGSS. Each content module has a cluster of Teaching and Learning activities (both in-class and out-of-class extensions) aligned with the module’s content, that students can do after they have completed a small suite of general, introductory Teaching and Learning activities. (An additional cohort of general activities examines crosscutting concepts; these may be assigned at any time.)
    </p>
    <p>
        The content clusters are sets of coherent in-class and out-of-class extension activities. Each cluster includes video analysis of teachers engaging children in NGSS-aligned instruction related to the corresponding content module; focused exploration of one or more practices; and an extended out-of-class activity to interview children about their ideas about the content area or lead them through a small learning activity. (We assume that each student can interview a child who is a relative, child of a friend, or participant at a school or after school site.)
    </p>
    <p>
        The Teaching and Learning activities can be used in university science courses for future teachers, science methods courses, or workshops for in-service teachers. A university science course could include the Teaching and Learning activities throughout the course in conjunction with the content modules. In education courses for future teachers or workshops for in-service teachers, the Teaching and Learning activities can be used alone or in conjunction with a subset of the content activities.
    </p>
    <p>
        For information on the specific Teaching and Learning activities available in
        <em>Next Gen PET</em>
        , see the
        <a href="/studio-style-class">Studio-style Class</a>
        or
        <a href="/lecture-style-class">Lecture-style Class</a>
        pages, under "Teaching and Learning Materials Descriptions" on the left-side menu. For more information on using Teaching and Learning activities, click on "Learn More" below.
    </p>

    <p>
        <a href=""
           class="btn btn-primary btn-reveal">
            Learn More&hellip;
        </a>
    </p>

    <div class="reveal">
        <p>
            <em>Next Gen PET</em> Teaching and Learning in-class activities and shorter extensions challenge students to identify how children are engaging in scientific practices through watching videos of children during science and engineering lessons. The longer extensions provide opportunities for students to practice identifying children's’ productive science ideas through interviews, and engaging children in the science and engineering practices. These longer extensions are further scaffolded so that undergraduates’ experiences become more complex over time. For example, in the Magnetism and Static Electricity Module, the long extension is a guided interview about magnetism. Students are guided to elicit children’s ideas about magnetism through provided questions. Later in the curriculum, during the Interactions and Forces Module, an extended out-of-class activity guides undergraduates through the teaching of a small investigation related to forces, giving them experience with facilitating instruction through the practices of the NGSS.
        </p>
        <p>
            <em>Options for Using Teaching and Learning Activities</em>
        </p>
        <p>
            As stated earlier, Teaching and Learning activities may be used throughout a
            <em>Next Gen PET</em>
            course in conjunction with the content units. In professional development workshops or education courses, they may also be used by themselves or in conjunction with a subset of the content lessons. As an example of the latter, suppose an instructor wants to engage his or her students in focused deep learning of a specific content area as part of a methods course, allowing his or her students to experience learning in the way expected by the NGSS. In that case, the instructor could choose one of the content units or modules (e.g., the Magnetism unit) and do all of the content activities and the associated Teaching and Learning activities, along with the introductory cohort of activities.
        </p>
        <p>
            Instructors could also opt to complete only the Teaching and Learning activities across multiple units. Because the cluster of Teaching and Learning activities associated with each content module focuses on specific practices, this latter option would give pre-service and in-service teachers targeted learning experiences with multiple practices. While the Teaching and Learning activities build on the same physical science content as the content modules, they do not depend on having done the content activities. Faculty using the Teaching and Learning activities without the associated content units might want to review the physical science content.
        </p>
    </div>
@stop

@section('scripts')
    <script>
        $(function () {
            $('.btn-reveal').on('click', function (e) {
                e.preventDefault();
                $('.reveal').slideToggle();
            })
        })
    </script>
@stop
