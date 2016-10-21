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
        <h3>Classroom Videos</h3>
        <p>We have video clips available of student discussions in studio-style classrooms for many Next Gen PET activities (SC). In these video clips, students conduct experiments or run computer simulations in small groups; have small group discussions about the experiments or questions posed to them by the workbook (text) or the instructor; and present their ideas on whiteboards to the whole class. The video clips range from less than a minute in duration to a few minutes long. </p>
        <p>
        The video clips are intended to illustrate what actual classroom discourse may look like, so instructors can be prepared for student discussions in their own classrooms. Many video clips also illustrate the common ideas that students have about physical science phenomena before instruction. The clips can also be used for professional development purposes, for use in a course that addresses science learning, or for researchers interested in studying student learning.
        </p>
        
        <p>
        The video clips are organized by module (linked below), unit, and lesson. Each lesson page has all the video clips for that activity.
        </p>
        <ul class="fa-ul">
            <li><i class="fa-li fa fa-video-camera"></i><a target="_blank" href="http://nextgenpet.sdsu.edu/videos/index_sc_mse.html">Magnetism and Static Electricity Module</a></li>
            <li><i class="fa-li fa fa-video-camera"></i><a target="_blank" href="http://nextgenpet.sdsu.edu/videos/index_sc_ie.html">Interactions and Energy Module</a></li>
            <li><i class="fa-li fa fa-video-camera"></i><a target="_blank" href="http://nextgenpet.sdsu.edu/videos/index_sc_if.html">Interactions and Force Module</a></li>
            <li><i class="fa-li fa fa-video-camera"></i><a target="_blank" href="http://nextgenpet.sdsu.edu/videos/index_sc_wsl.html">Waves, Sound, and Light Module</a></li>
            <li><i class="fa-li fa fa-video-camera"></i> Matter and Interactions Module</li>
        </ul>
        
        
        
        {{--<div id="video-filter-list" class="panel panel-primary">--}}
            {{--<div class="panel-heading">--}}
                {{--<input type="text" class="form-control search" placeholder="Search for a video...">--}}
            {{--</div>--}}
            {{--<div class="panel-body">--}}
                {{--<ul class="list media-list">--}}
                    {{--<li class="media">--}}
                        {{--<div class="media-left">--}}
                                            {{--<span class="wistia_embed wistia_async_hy6n14sie5 popover=true popoverAnimateThumbnail=true"--}}
                                                  {{--style="display:inline-block;height:51px;width:64px">&nbsp;</span>--}}
                        {{--</div>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading title">--}}
                                                {{--<span class="wistia_embed wistia_async_hy6n14sie5 popover=true popoverContent=link"--}}
                                                      {{--style="display:inline"><a href="#">UM L2 Video Clip 1</a></span>--}}
                            {{----}}
                            {{--</h4>--}}
                            {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.--}}
                            {{--</p>--}}
                            {{--<span class="label label-default unit">Unit M</span> <span--}}
                                    {{--class="label label-default unit-name">Developing a Model for Magnetism</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="media">--}}
                        {{--<div class="media-left">--}}
                                            {{--<span class="wistia_embed wistia_async_vdldltoysk popover=true popoverAnimateThumbnail=true"--}}
                                                  {{--style="display:inline-block;height:51px;width:64px">&nbsp;</span>--}}
                        {{--</div>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading title">--}}
                                                {{--<span class="wistia_embed wistia_async_vdldltoysk popover=true popoverContent=link"--}}
                                                      {{--style="display:inline"><a href="#">UM L2 Video Clip 2</a></span>--}}
                            {{----}}
                            {{--</h4>--}}
                            {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.--}}
                            {{--</p>--}}
                            {{--<span class="label label-default unit">Unit M</span> <span--}}
                                    {{--class="label label-default unit-name">Developing a Model for Magnetism</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="media">--}}
                        {{--<div class="media-left">--}}
                                            {{--<span class="wistia_embed wistia_async_h4bxh647xt popover=true popoverAnimateThumbnail=true"--}}
                                                  {{--style="display:inline-block;height:51px;width:64px">&nbsp;</span>--}}
                        {{--</div>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading title">--}}
                                                {{--<span class="wistia_embed wistia_async_h4bxh647xt popover=true popoverContent=link"--}}
                                                      {{--style="display:inline"><a href="#">UM L2 Video Clip 3</a></span>--}}
                            {{----}}
                            {{--</h4>--}}
                            {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.--}}
                            {{--</p>--}}
                            {{--<span class="label label-default unit">Unit M</span> <span--}}
                                    {{--class="label label-default unit-name">Developing a Model for Magnetism</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="media">--}}
                        {{--<div class="media-left">--}}
                                            {{--<span class="wistia_embed wistia_async_edd48k68nu popover=true popoverAnimateThumbnail=true"--}}
                                                  {{--style="display:inline-block;height:51px;width:64px">&nbsp;</span>--}}
                        {{--</div>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading title">--}}
                                                {{--<span class="wistia_embed wistia_async_edd48k68nu popover=true popoverContent=link"--}}
                                                      {{--style="display:inline"><a href="#">UM L2 Video Clip 4</a></span>--}}
                            {{----}}
                            {{--</h4>--}}
                            {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.--}}
                            {{--</p>--}}
                            {{--<span class="label label-default unit">Unit M</span> <span--}}
                                    {{--class="label label-default unit-name">Developing a Model for Magnetism</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="media">--}}
                        {{--<div class="media-left">--}}
                                            {{--<span class="wistia_embed wistia_async_wva65c7dba popover=true popoverAnimateThumbnail=true"--}}
                                                  {{--style="display:inline-block;height:51px;width:64px">&nbsp;</span>--}}
                        {{--</div>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading title">--}}
                                                {{--<span class="wistia_embed wistia_async_wva65c7dba popover=true popoverContent=link"--}}
                                                      {{--style="display:inline"><a href="#">UM L3 Video Clip 1</a></span>--}}
                            {{----}}
                            {{--</h4>--}}
                            {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.--}}
                            {{--</p>--}}
                            {{--<span class="label label-default unit">Unit M</span> <span--}}
                                    {{--class="label label-default unit-name">Developing a Model for Magnetism</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="media">--}}
                        {{--<div class="media-left">--}}
                                            {{--<span class="wistia_embed wistia_async_e0phik3y24 popover=true popoverAnimateThumbnail=true"--}}
                                                  {{--style="display:inline-block;height:51px;width:64px">&nbsp;</span>--}}
                        {{--</div>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading title">--}}
                                                {{--<span class="wistia_embed wistia_async_e0phik3y24 popover=true popoverContent=link"--}}
                                                      {{--style="display:inline"><a href="#">USE L1 Video Clip 1</a></span>--}}
                            {{----}}
                            {{--</h4>--}}
                            {{--<p>--}}
                            {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.--}}
                            {{--</p>--}}
                            {{--<span class="label label-default unit">Unit SE</span> <span--}}
                                    {{--class="label label-default unit-name">Developing a Model for Static Electricity</span>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<div class="text-center">--}}
                    {{--<ul class="pagination"></ul>--}}
                {{--</div>--}}
                {{----}}
            {{--</div>--}}
        {{--</div>--}}
    </section>
@stop

{{--@section('scripts')--}}
    {{--<script src="{{ url('js/list.js') }}"></script>--}}
    {{--<script src="{{ url('js/list.pagination.js') }}"></script>--}}
    {{--<script src="//fast.wistia.com/embed/medias/el4h8jlwzj.jsonp" async></script>--}}
    {{--<script src="//fast.wistia.com/assets/external/E-v1.js" async></script>--}}
    {{--<script>--}}
        {{--var options = {--}}
            {{--valueNames: ['title', 'unit', 'unit-name'],--}}
            {{--page      : 3,--}}
            {{--plugins   : [--}}
                {{--ListPagination({})--}}
            {{--]--}}
        {{--};--}}
        {{----}}
        {{--var userList = new List('video-filter-list', options);--}}
    {{--</script>--}}
{{--@stop--}}

