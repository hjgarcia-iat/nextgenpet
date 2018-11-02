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
        <h2 class="mb-3">Planning &amp; Conducting Investigations</h2>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-powerpoint-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/pci-extension-quiz-keys.pptx']) }}"
                   target="_blank">Extension Quiz Keys
                </a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/pci-equipment-list.docx']) }}"
                   target="_blank">Equipment List (word)
                </a>
            </li>
            <li>
                <i class="fa-li fa fa-file-pdf-o"></i>
                <a href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/pci-equipment-list.pdf']) }}"
                   target="_blank">Equipment List (pdf)
                </a>
            </li>
        </ul>

        <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                           aria-controls="collapseOne">Activity 1: Variables and Controls
                        </a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/1-activity-1/pci-activity-1.docx']) }}">Activity 1</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/1-activity-1/pci-activity-1-key.docx']) }}">Activity 1 Key</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                           aria-expanded="false"
                           aria-controls="collapseTwo">Extension A: Scientific Questions and Measurement
                        </a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-powerpoint-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/2-extension-a/pci-exta-mock-up.pptx']) }}">Extension Mockup Slides
                                </a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-html5"></i>
                                <a target="_blank"
                                   href="http://cpucips.sdsu.edu/nextgenpet/pci/pci_extA/index.html ">Extension Online
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingThree">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                           aria-expanded="false" aria-controls="collapseThree">Extension B: Variables and Data Tables
                        </a>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-powerpoint-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/3-extension-b/pci-extb-mock-up.pptx']) }}">Extension Mockup Slides
                                </a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-html5"></i>
                                <a target="_blank"
                                   href="http://cpucips.sdsu.edu/nextgenpet/pci/pci_extB/index.html ">Extension Online
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingFour">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour"
                           aria-expanded="false" aria-controls="collapseFour">Activity 2: Conducting Fair Tests
                        </a>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/4-activity-2/pci-activity-2.docx']) }}">Activity 2</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/4-activity-2/pci-activity-2-key.docx']) }}">Activity 2 Key</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingFive">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive"
                           aria-expanded="false"
                           aria-controls="collapseFive">Extension C: More about Scientific Investigation
                        </a>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-pdf-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/5-extension-c/pci-extc-reading.pdf']) }}">Extension C Reading (PDF)</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/5-extension-c/pci-extc-reading.docx']) }}">Extension C Reading (DOC)</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingSix">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix"
                           aria-expanded="false" aria-controls="collapseSix">Activity 3: Practice Investigations
                        </a>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/6-activity-3/pci-activity-3.docx']) }}">Activity 3</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i>
                                <a target="_blank"
                                   href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/planning-and-conducting/6-activity-3/pci-activity-3-key.docx']) }}">Activity 3 Key</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{--<div class="card">--}}
                {{--<div class="card-header" role="tab" id="headingSeven">--}}
                    {{--<h5 class="mb-0">--}}
                        {{--<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven"--}}
                           {{--aria-expanded="false" aria-controls="collapseSeven">Activity 4: Investigation Project--}}
                        {{--</a>--}}
                    {{--</h5>--}}
                {{--</div>--}}
                {{--<div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">--}}
                    {{--<div class="card-block">--}}
                        {{--<ul class="fa fa-ul">--}}
                            {{--<li>--}}
                                {{--<i class="fa-li fa fa-file-powerpoint-o"></i>--}}
                                {{--<a target="_blank"--}}
                                   {{--href="{{ route('file.show',['file' => 'web-docs/instructor/studio-style/interactions-energy-module/1-unit-em-energy-based-model-for-interactions/7-ext-e-simultaneous-interactions/uem-exte-extension-mock-up.pptx']) }}">Extension Mockup Slides--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<i class="fa-li fa fa-globe"></i>--}}
                                {{--<a target="_blank"--}}
                                   {{--href="http://public.csusm.edu/NextGenPET/Extensions/IE/ExtE/index.html">Extension Online (HTML5)--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </section>
@stop