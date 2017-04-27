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
        <h2>Magnetism and Electricty Module</h2>
        <h4>Magnetism &amp; Static Electricity Module</h4>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/module-mse-test-bank.docx']) }}" target="_blank">Module
                    MSE Test Bank</a>
            </li>
            <li>
                Module Equipment List:
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/module-equipment-list.docx']) }}" target="_blank"><i class="fa fa-file-word-o"></i>
                    Word</a> |
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/module-equipment-list.pdf']) }}" target="_blank"><i class="fa fa-file-pdf-o"></i>
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
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/unit-m-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/unit-m-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/unit-m-lesson-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/unit-m-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/unit-m-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                </ul>
                <div id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Lesson
                                    1: Modeling &amp; the Mystery Tube</a>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/1-l1-modeling-and-the-mystery-tube/um-l1-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/1-l1-modeling-and-the-mystery-tube/um-l1-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/1-l1-modeling-and-the-mystery-tube/um-l1-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwo">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Lesson
                                    2: Exploring Magnetic Effects</a>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/2-l2-exploring-magnetic-effects/um-l2-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/2-l2-exploring-magnetic-effects/um-l2-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/2-l2-exploring-magnetic-effects/um-l2-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThree">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Extension
                                    A: Exploring the Region Around a Magnet </a>
                            </h5>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/3-ext-a-exploring-the-region-around-a-magnet/um-exta-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFour">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Lesson
                                    3: Developing a Model for Magnetism</a>
                            </h5>
                        </div>
                        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/4-l3-developing-a-model-for-magnetisum/um-l3-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/4-l3-developing-a-model-for-magnetisum/um-l3-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/4-l3-developing-a-model-for-magnetisum/um-l3-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFive">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Ext
                                    B: Evaluating Magnetism Model</a>
                            </h5>
                        </div>
                        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/5-ext-b-evaluating-magentism-models/um-extb-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSix">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Lesson
                                    4: Better Model for Magnetism</a>
                            </h5>
                        </div>
                        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/6-l4-a-better-model-for-magetism/um-l4-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/6-l4-a-better-model-for-magetism/um-l4-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/6-l4-a-better-model-for-magetism/um-l4-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSeven">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Lesson
                                    5: Explaining Phenomena involving Magnetism</a>
                            </h5>
                        </div>
                        <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/7-l5-explaining-phenomena-involving-magnetism/um-l5-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/7-l5-explaining-phenomena-involving-magnetism/um-l5-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/7-l5-explaining-phenomena-involving-magnetism/um-l5-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingEight">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Lesson
                                    6 ED: Is the US Losing Its Edge?</a>
                            </h5>
                        </div>
                        <div id="collapseEight" class="collapse" role="tabpanel" aria-labelledby="headingEight">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/8-l6-ed-designing-a-magleve-train/um-l6-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/8-l6-ed-designing-a-magleve-train/um-l6-ed-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/8-l6-ed-designing-a-magleve-train/um-l6-ed-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingNine">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">Lesson
                                    7: Exploring Static Electrics Effects</a>
                            </h5>
                        </div>
                        <div id="collapseNine" class="collapse" role="tabpanel" aria-labelledby="headingNine">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/9-l7-exploring-static-electric-effects/um-l7-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/9-l7-exploring-static-electric-effects/um-l7-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-m-developing-a-model-for-magnetism/9-l7-exploring-static-electric-effects/um-l7-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3" id="unit-2" role="tabpanel">

                <ul class="fa fa-ul">
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/unit-se-trajectory.pdf']) }}">Unit
                            Trajectory</a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/unit-se-lesson-and-extension-summaries.pdf']) }}">Activity
                            and Extension Summaries </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/unit-se-lesson-keys.pdf']) }}">Lesson
                            Keys for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-pdf-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/unit-se-student-materials.pdf']) }}">Student
                            Materials for Whole Unit </a>
                    </li>
                    <li>
                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/unit-se-extension-quiz-keys.pptx']) }}">Extension
                            quizzes for whole unit </a>
                    </li>
                </ul>
                <div id="accordionTwo" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTen">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTen" aria-expanded="true" aria-controls="collapseTen">Lesson
                                    1: Exploring Static Electric Effects</a>
                            </h5>
                        </div>
                        <div id="collapseTen" class="collapse" role="tabpanel" aria-labelledby="headingTen">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/1-l1-exploring-static-electric-effects/use-l1-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/1-l1-exploring-static-electric-effects/use-l1-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/1-l1-exploring-static-electric-effects/use-l1-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingEleven">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">Ext
                                    A: Which Charge is Which?</a>
                            </h5>
                        </div>
                        <div id="collapseEleven" class="collapse" role="tabpanel" aria-labelledby="headingEleven">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/2-ext-a-which-charge-is-which/use-exta-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwelve">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">Ext
                                    B: The Law of Electric Charges</a>
                            </h5>
                        </div>
                        <div id="collapseTwelve" class="collapse" role="tabpanel" aria-labelledby="headingTwelve">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/3-ext-b-the-law-of-electric-charges/use-extb-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingThirteen">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">Lesson
                                    2: Developing a Model for Static Electricity</a>
                            </h5>
                        </div>
                        <div id="collapseThirteen" class="collapse" role="tabpanel" aria-labelledby="headingThirteen">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/4-l2-developing-a-model-for-static-electricity/use-l2-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/4-l2-developing-a-model-for-static-electricity/use-l2-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/4-l2-developing-a-model-for-static-electricity/use-l2-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingFourteen">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">Lesson
                                    3: Representing Uncharged Objects in Your Model</a>
                            </h5>
                        </div>
                        <div id="collapseFourteen" class="collapse" role="tabpanel" aria-labelledby="headingFourteen">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/5-l3-represening-uncharged-objects-in-your-model/use-l3-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/5-l3-represening-uncharged-objects-in-your-model/use-l3-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/5-l3-represening-uncharged-objects-in-your-model/use-l3-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSixteen">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">Ext
                                    C: Electroscope and Negatively (–) Charged Object</a>
                            </h5>
                        </div>
                        <div id="collapseSixteen" class="collapse" role="tabpanel" aria-labelledby="headingSixteen">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/6-ext-c-electroscope-and-negatively-charged-objects/use-extc-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingSeventeen">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">Ext
                                    D: Nature of Charged Entities</a>
                            </h5>
                        </div>
                        <div id="collapseSeventeen" class="collapse" role="tabpanel" aria-labelledby="headingSeventeen">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/7-ext-d-nature-of-charged-entities/use-extd-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingEighteen">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">Lesson
                                    4: Refining Your Model for Different Materials</a>
                            </h5>
                        </div>
                        <div id="collapseEighteen" class="collapse" role="tabpanel" aria-labelledby="headingEighteen">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/8-l4-refining-your-model-for-different-materials/use-l4-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/8-l4-refining-your-model-for-different-materials/use-l4-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/8-l4-refining-your-model-for-different-materials/use-l4-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingNineteen">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">Ext
                                    E: Discharging Charged Objects</a>
                            </h5>
                        </div>
                        <div id="collapseNineteen" class="collapse" role="tabpanel" aria-labelledby="headingNineteen">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/9-ext-e-discharging-charged-objects/use-exte-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwenty">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">Ext
                                    F: Charged and Uncharged Objects</a>
                            </h5>
                        </div>
                        <div id="collapseTwenty" class="collapse" role="tabpanel" aria-labelledby="headingTwenty">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/10-ext-f-charged-and-uncharged-objects/use-extf-extension-mock-up.pptx']) }}">Extra
                                            Extension Mockup Slides</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="headingTwentyone">
                            <h5 class="mb-0">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordionTwo" href="#collapseTwentyone" aria-expanded="false" aria-controls="collapseTwentyone">Lesson
                                    5: Explaining Phenomena Involving Static Electricity</a>
                            </h5>
                        </div>
                        <div id="collapseTwentyone" class="collapse" role="tabpanel" aria-labelledby="headingTwentyone">
                            <div class="card-block">
                                <ul class="fa fa-ul">
                                    <li>
                                        <i class="fa-li fa fa-file-powerpoint-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/11-l5-explaining-phenomena-involving-static-electrcity/use-l5-instructors-slides.pptx']) }}">Instructor
                                            Slides</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/11-l5-explaining-phenomena-involving-static-electrcity/use-l5-student-materials.docx']) }}">Student
                                            Materials</a>
                                    </li>
                                    <li>
                                        <i class="fa-li fa fa-file-word-o"></i>
                                        <a target="_blank" href="{{ route('file.show',['file' => 'web-docs/instructor/lecture-style/magnetism-static-electricty-module/unit-se-developing-a-model-for-static-electricity/11-l5-explaining-phenomena-involving-static-electrcity/use-l5-key.docx']) }}">Key</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop