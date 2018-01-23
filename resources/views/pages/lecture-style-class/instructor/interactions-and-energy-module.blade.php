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
        <h2>Interactions &amp; Energy Module</h2>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/module-ie-test-bank.docx']) }}"
                   target="_blank">Module
                    IE Test Bank</a>
            </li>
        </ul>
        
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#unit-1">Energy-based Model for Interactions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#unit-2">Potential Energy and Fields</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane pt-3 pb-3 active" id="unit-1" role="tabpanel">
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/unit-em-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/Unit_EM_Summary_Ideas_LC.docx']) }}">Summary
                            Ideas</a>
                    </li>
                </ul>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @include('pages.lecture-style-class.partials.instructor.ie.em')
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3" id="unit-2" role="tabpanel">
                
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/2-unit-pef-potential-energy-fields/unit-pef-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/2-unit-pef-potential-energy-fields/unit-pef-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/2-unit-pef-potential-energy-fields/unit-pef-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/2-unit-pef-potential-energy-fields/unit-pef-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/2-unit-pef-potential-energy-fields/unit-pef-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/unit-pef-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/interactions-energy-module/2-unit-pef-potential-energy-fields/Unit_PEF_Summary_Ideas_LC.docx']) }}">Summary
                            Ideas</a>
                    </li>
                </ul>
                <div id="accordionTwo" role="tablist" aria-multiselectable="true">
                    @include('pages.lecture-style-class.partials.instructor.ie.pef')
                </div>
            </div>
        </div>
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/jquery.cookie.js') }}"></script>
    <script>
        $(document).ready(function () {
            var last = Cookies.get('activeAccordionGroup');
            if (last != null) {
                //remove default collapse settings
                $("#accordion2 .collapse").removeClass('show');
                //show the last visible group
                $("#" + last).collapse("show");
            }

            $("#accordion").bind('shown.bs.collapse', function () {
                var active = $("#accordion .show").attr('id');
                Cookies.set('activeAccordionGroup', active);
            });
        });
    </script>
@stop