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
        <h2>Interactions &amp; Energy Module</h2>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/module-ie-test-bank.docx']) }}"
                   target="_blank">Module Test Bank</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/module-ie-equipment-list.docx']) }}" target="_blank">Module Equipment List (Word)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/module-ie-equipment-list.pdf']) }}"
                   target="_blank">Module Equipment List (PDF)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/npg-sensor-file-configurations.docx']) }}"
                   target="_blank">Sensor Configurations (Word)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/npg-sensor-file-configurations.pdf']) }}"
                   target="_blank">Sensor Configurations (PDF)</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-zip-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/ngp-loggerpro.zip']) }}"
                   target="_blank">Logger Pro</a>
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
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-activity-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/unit-em-summary-ideas.docx']) }}">Summary
                            Ideas</a>
                    </li>
                </ul>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.ie.em')
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3" id="unit-2" role="tabpanel">

                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/2-unit-pef-potential-energy-and-fields/unit-pef-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/2-unit-pef-potential-energy-and-fields/unit-pef-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/2-unit-pef-potential-energy-and-fields/unit-pef-activity-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/2-unit-pef-potential-energy-and-fields/unit-pef-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/2-unit-pef-potential-energy-and-fields/unit-pef-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-word-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/2-unit-pef-potential-energy-and-fields/unit-pef-summary-ideas.docx']) }}">Summary
                            Ideas</a>
                    </li>
                </ul>
                <div id="accordionTwo" role="tablist" aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.ie.pef')
                </div>
            </div>
        </div>
    </section>
@stop