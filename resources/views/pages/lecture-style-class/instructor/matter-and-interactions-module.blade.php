@extends('layouts.two-column')

@section('pageTitle')
    Lecture Style Class
@stop
@section('sidebar')
    @include('pages.lecture-style-class._sidebar')
@stop
@section('banner')
    @include('pages.lecture-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h2>Matter &amp; Interactions Module</h2>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/module-equipment-list.docx']) }}"
                   target="_blank">Module Equipment List (word)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/module-equipment-list.pdf']) }}"
                   target="_blank">Module Equipment List (pdf)</a>
            </li>
        </ul>
    
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#unit-1">Physical Changes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#unit-2">Chemical Reactions</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane pt-3 pb-3 active" id="unit-1" role="tabpanel">
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/1-unit-pc-physical-changes/unit-pc-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/1-unit-pc-physical-changes/unit-pc-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/1-unit-pc-physical-changes/unit-pc-lesson-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/1-unit-pc-physical-changes/unit-pc-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/1-unit-pc-physical-changes/unit-pc-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                </ul>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @include('pages.lecture-style-class.partials.instructor.mi.pc')
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3" id="unit-2" role="tabpanel">
            
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/2-unit-cr-chemical-reactions/unit-cr-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/2-unit-cr-chemical-reactions/unit-cr-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/2-unit-cr-chemical-reactions/unit-cr-lesson-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/2-unit-cr-chemical-reactions/unit-cr-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/matter-interactions-module/2-unit-cr-chemical-reactions/unit-cr-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                </ul>
                <div id="accordionTwo" role="tablist" aria-multiselectable="true">
                    @include('pages.lecture-style-class.partials.instructor.mi.cr')
                </div>
            </div>
        </div>
    </section>
@stop