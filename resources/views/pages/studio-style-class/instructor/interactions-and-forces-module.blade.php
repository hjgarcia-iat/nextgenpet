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
        <h2>Interactions &amp; Forces Module</h2>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/target-ideas/studio/target-ideas-modif-studio.pdf']) }}">Target Ideas</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i> <a
                        href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/dimensional-coding-of-ngp-test-banks-intro.docx']) }}"
                        target="_blank">Dimensional Coding of Next Gen PET Test Banks: Introduction</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/module-if-equipment-list.docx']) }}"
                   target="_blank">Module Equipment List (Word)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/module-if-equipment-list.pdf']) }}"
                   target="_blank">Module Equipment List (PDF)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/npg-sensor-file-configurations.docx']) }}"
                   target="_blank">Sensor Configurations (Word)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/npg-sensor-file-configurations.pdf']) }}"
                   target="_blank">Sensor Configurations (PDF)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-zip-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/ngp-loggerpro.zip']) }}"
                   target="_blank">Logger Pro</a>
            </li>
        </ul>
        
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#unit-1">Force Based Model for Interactions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#unit-2">Combination of Forces</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane pt-3 pb-3 active" id="unit-1" role="tabpanel">
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/1-unit-fm-force-based-model-for-interactions/unit-fm-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/1-unit-fm-force-based-model-for-interactions/unit-fm-test-bank.docx']) }}">Unit FM Test Bank</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/1-unit-fm-force-based-model-for-interactions/unit-fm-activity-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/1-unit-fm-force-based-model-for-interactions/unit-fm-activity-keys.pdf']) }}">Activity
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/1-unit-fm-force-based-model-for-interactions/unit-fm-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/1-unit-fm-force-based-model-for-interactions/unit-fm-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/unit-fm-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/1-unit-fm-force-based-model-for-interactions/unit-fm-summary-ideas.pdf']) }}">Summary
                            Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/summarizing-questions/force-based-model-for-interactions.docx']) }}">Summarizing Questions</a>
                    </li>
                </ul>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.if.fm')
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3" id="unit-2" role="tabpanel">
                
                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/2-unit-cf-combinations-of-forces/unit-cf-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/2-unit-cf-combinations-of-forces/unit-cf-test-bank.docx']) }}">Unit CF Test Bank</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/2-unit-cf-combinations-of-forces/unit-cf-activity-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/2-unit-cf-combinations-of-forces/unit-cf-activity-keys.pdf']) }}">Activity
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/2-unit-cf-combinations-of-forces/unit-cf-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/2-unit-cf-combinations-of-forces/unit-cf-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-zip-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/unit-cf-extension-quizzes-blackboard.zip']) }}">Extension quizzes for whole unit (Blackboard versions)</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank"
                           href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-forces/2-unit-cf-combinations-of-forces/unit-cf-summary-ideas.doc']) }}">Summary
                            Ideas</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i> <a target="_blank"
                                href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/summarizing-questions/combination-of-forces.docx']) }}">Summarizing Questions</a>
                    </li>
                </ul>
                <div id="accordionTwo" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.if.cf')
                </div>
            </div>
        </div>
    </section>
@stop