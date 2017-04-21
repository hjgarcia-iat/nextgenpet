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
        <h2>Magnetism and Electricty Module</h2>
        <h4>Magnetism &amp; Static Electricity Module</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores beatae dolores est hic laborum minus
            provident reiciendis temporibus voluptas? Aliquam animi cumque ducimus fugit nobis non numquam optio
            similique.</p>
        <ul class="fa fa-ul">
            <li>
                <i class="fa-li fa fa-file-word-o"></i> <a href="">Module MSE Test Bank</a>
            </li>
            <li>
                <i class="fa-li fa fa-file-word-o"></i> <a href="">Module Equipment List</a>
            </li>
        </ul>
        <h5>Developing a Model for Magnetism Unit</h5>
        <div class="well m-0 mb-4 p-4">
            <ul class="fa fa-ul">
                <li>
                    <i class="fa-li fa fa-file-pdf-o"></i> <a href="">Unit Trajectory</a>
                </li>
                <li>
                    <i class="fa-li fa fa-file-pdf-o"></i> <a href="">Activity and Extension Summaries </a>
                </li>
                <li>
                    <i class="fa-li fa fa-file-pdf-o"></i> <a href="">Lesson Keys for Whole Unit </a>
                </li>
                <li>
                    <i class="fa-li fa fa-file-pdf-o"></i> <a href="">Student Materials for Whole Unit </a>
                </li>
                <li>
                    <i class="fa-li fa fa-file-powerpoint-o"></i> <a href="">Extension quizzes for whole unit </a>
                </li>
                <li>
                    <i class="fa-li fa fa-file-word-o"></i> <a href="">Scientist's Ideas</a>
                </li>
            </ul>
        </div>


        <div id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="headingOne">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Lesson 1: Modeling &amp; the Mystery Tube</a>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i> <a href="">Link 1</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i> <a href="">Link 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" role="tab" id="headingTwo">
                    <h5 class="mb-0">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Lesson 2: Exploring Magnetic Effects</a>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="card-block">
                        <ul class="fa fa-ul">
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i> <a href="">Lesson Key</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-file-powerpoint-o"></i> <a href="">Instructor Slides</a>
                            </li>
                            <li>
                                <i class="fa-li fa fa-file-word-o"></i> <a href="">Student Materials</a>
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
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop


@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/lecture-mse.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop