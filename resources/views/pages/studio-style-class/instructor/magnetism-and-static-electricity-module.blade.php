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
        <h2>Magnetism &amp; Static Electricity Module</h2>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/module-mse-test-bank.docx']) }}" target="_blank">Module
                    MSE Test Bank</a>
            </li>
            <li>
                Module Equipment List:
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/module-mse-equipment-list.docx']) }}" target="_blank"><i class="fa fa-file-word-o"></i>
                    Word</a> |
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/module-mse-equipment-list.pdf']) }}" target="_blank"><i class="fa fa-file-pdf-o"></i>
                    PDF</a>
            </li>
        </ul>

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#unit-1">Developing a Model for Magnetism</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#unit-2">Developing a Model for Static Electricity</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane pt-3 pb-3 active" id="unit-1" role="tabpanel">
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/1-unit-m-developing-a-model-for-magnetism/unit-m-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/target-ideas/studio/target-ideas-unitm-studio.pdf']) }}">Target Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/1-unit-m-developing-a-model-for-magnetism/unit-m-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/1-unit-m-developing-a-model-for-magnetism/unit-m-activity-keys.pdf']) }}">Activity
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/1-unit-m-developing-a-model-for-magnetism/unit-m-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/1-unit-m-developing-a-model-for-magnetism/unit-m-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/unit-m-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/1-unit-m-developing-a-model-for-magnetism/unit-m-summary-ideas.docx']) }}">Summary
                            Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/tiny-magnets-alignment-model-handout.pdf']) }}">Tiny Magnets Alignment Model Handout</a>
                    </li>
                </ul>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.mse.mm')
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3" id="unit-2" role="tabpanel">

                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/2-unit-se-developing-a-model-for-static-electricity/unit-se-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/target-ideas/studio/target-ideas-unitse-studio.pdf']) }}">Target Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/2-unit-se-developing-a-model-for-static-electricity/unit-se-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/2-unit-se-developing-a-model-for-static-electricity/unit-se-activity-keys.pdf']) }}">Activity
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/2-unit-se-developing-a-model-for-static-electricity/unit-se-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/2-unit-se-developing-a-model-for-static-electricity/unit-se-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/unit-se-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/magnetism-static-electricity-module/2-unit-se-developing-a-model-for-static-electricity/unit-se-summary-ideas.docx']) }}">Summary
                            Ideas</a>
                    </li>
                </ul>
                <div id="accordionTwo" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.mse.se')
                </div>
            </div>
        </div>
    </section>
@stop