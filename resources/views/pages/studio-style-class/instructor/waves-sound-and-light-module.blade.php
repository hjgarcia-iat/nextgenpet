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
        <h2>Waves, Sound &amp; Light Module</h2>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-word-o"></i> <a
                        href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/dimensional-coding-of-ngp-test-banks-intro.docx']) }}"
                        target="_blank">Dimensional Coding of Next Gen PET Test Banks: Introduction</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/module-wsl-equipment-list.docx']) }}"
                   target="_blank">Module Equipment List (word)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/module-wsl-equipment-list.pdf']) }}"
                   target="_blank">Module Equipment List (pdf)</a>
            </li>
        </ul>
        
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#unit-1">Mechanical Waves and Sound</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#unit-2">Light and Color</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane pt-3 pb-3 active" id="unit-1" role="tabpanel">
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/1-unit-ws-mechanical-waves-and-sound/unit-ws-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/target-ideas/studio/target-ideas-unitws-studio.pdf']) }}">Target Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/1-unit-ws-mechanical-waves-and-sound/unit-ws-test-bank.docx']) }}">Unit WS Test Bank</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/1-unit-ws-mechanical-waves-and-sound/unit-ws-activity-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/1-unit-ws-mechanical-waves-and-sound/unit-ws-activity-keys.pdf']) }}">Activity
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/1-unit-ws-mechanical-waves-and-sound/unit-ws-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/1-unit-ws-mechanical-waves-and-sound/unit-ws-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/unit-ws-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/1-unit-ws-mechanical-waves-and-sound/unit-ws-summary-ideas.docx']) }}">Summary
                            Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/summarizing-questions/mechanical-waves-and-sound.docx']) }}">Summarizing Questions</a>
                    </li>
                </ul>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.wsl.ws')
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3" id="unit-2" role="tabpanel">
                
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/2-unit-l-light-and-color/unit-l-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/target-ideas/studio/target-ideas-unitl-studio.pdf']) }}">Target Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/2-unit-l-light-and-color/unit-l-test-bank.docx']) }}">Unit L Test Bank</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/2-unit-l-light-and-color/unit-l-activity-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/2-unit-l-light-and-color/unit-l-activity-keys.pdf']) }}">Activity
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/2-unit-l-light-and-color/unit-l-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/2-unit-l-light-and-color/unit-l-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/unit-l-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/waves-sound-light-module/2-unit-l-light-and-color/unit-l-summary-ideas.docx']) }}">Summary
                            Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/summarizing-questions/light-and-color.docx']) }}">Summarizing Questions</a>
                    </li>
                </ul>
                <div id="accordionTwo" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.wsl.l')
                </div>
            </div>
        </div>
    </section>
@stop