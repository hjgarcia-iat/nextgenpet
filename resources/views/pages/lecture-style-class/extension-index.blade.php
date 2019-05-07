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
        <h3>Extension Index</h3>
        <p>
            <em>Next Gen PET</em> includes extensions (homework) to support the in-class activities and lessons.
            Extensions are computer-based and include narrative text and questions of various types with feedback. Most
            extensions include videos of demonstrations, experiments, or simulations; some also incorporate on-line
            simulations. Most extensions provide practice using the ideas introduced in class, while some explore new,
            but related, ideas. Most students will need about 30 minutes to conscientiously work through extensions of
            average length, or around 15-45 minutes generally. </p>
        <p>
            Extensions are available in HTML5 or Adobe Flash. Most students will probably find HTML5 more compatible
            with different types of platforms and browsers (and less problematic to run), but we provide Adobe Flash
            versions as well for those who may prefer them. Though the extensions may be accessed from the links below,
            you may include them directly on the course web page. </p>
        <p>
            Each link below lists all the extensions used in particular module, with links to both HTML5 and Flash
            versions. Note the browser and platform notes at the bottom of each page. The student portal for the
            extensions and demonstration movies (which is the link you should give to your students) is also listed
            below. </p>
        <ul class="fa-ul">
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//extensions/extensions_index_lecture_mse.html">Magnetism
                    and Static Electricity Module</a></li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//extensions/extensions_index_lecture_ie.html">Interactions
                    and Energy Module</a></li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//extensions/extensions_index_lecture_if.html">Interactions
                    and Forces Module</a></li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//extensions/extensions_index_lecture_wsl.html">Waves,
                    Sound and Light Module</a></li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//extensions/extensions_index_lecture_mi.html">Matter
                    and Interactions Module</a>
            </li>
            <li><i class="fa-li fa fa-html5"></i>
                <a target="_blank" href="http://nextgenpetstudent.activatelearning.com//extensions/index_tl.html">Teaching and Learning
                    Extensions</a>
            </li>
        </ul>
        <p>
            <a href="http://nextgenpetstudent.activatelearning.com//lc/index.html" class="btn btn-primary" target="_blank">Student
                Portal</a>
        </p>
        <p>
            <strong>Extension quizzes and extension mock-ups</strong>: Questions within the extensions provide feedback
            to students but they are not graded. Several additional questions (mostly, but not exclusively, multiple
            choice) with feedback are provided for each extension; instructors can use these questions to build an
            online quiz in their learning management systems (LMS). Most LMSs can be set to automatically score, record,
            and give feedback. </p>
        <p>
            These additional questions are provided along with mock-ups of the extensions in Microsoft PowerPoint
            documents available to registered users of this site. The PowerPoint mock-ups provide instructors with an
            opportunity to view the content of the extensions (including videos, which are embedded in the slides)
            without needing to work through the extensions themselves. </p>
        <p>
            <strong>Note on "lettering" of extensions</strong>: Extensions are ordered in each unit using letters rather
            than numbers. Most extensions are used in both the lecture-style and studio-style versions of the Next Gen
            PET curriculum, so in each unit a single lettering system is used for both versions. Some extensions are
            particular to the version type (including most extensions in Module MI). That means, in many units in the
            Lecture-Style Class version of NGP, you will find that some letters are missing in the list of extensions.
            This just means the “missing” extensions are particular to the Studio-Style Class version, not that we have
            failed to list them. </p>
    </section>

@stop