@extends('layouts.two-column')

@section('pageTitle')
    Studio Style Class
@stop
@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop
@section('content')
    <section id="pdf-content"
             class="pdf-content"></section>
    <section id="html-content"
             class="html-content">
        <h2>Teaching &amp; Learning</h2>
        
        <ul class="nav nav-tabs"
            role="tablist">
            <li class="nav-item">
                <a class="nav-link active"
                   data-toggle="tab"
                   href="#unit-1">General Lessons &amp; Extensions
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   data-toggle="tab"
                   href="#unit-2">Content Module Clusters
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane pt-3 pb-3 active"
                 id="unit-1"
                 role="tabpanel">
                <div id="accordion"
                     role="tablist"
                     aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.tl.general-lessons-extensions')
                </div>
            </div>
            <div class="tab-pane pt-3 pb-3"
                 id="unit-2"
                 role="tabpanel">
                <div id="accordionTwo"</div>
                     role="tablist"
                     aria-multiselectable="true">
                    @include('pages.studio-style-class.partials.instructor.tl.content-module-clusters')
                </div>
            </div>
        </div>
    </section>
@stop