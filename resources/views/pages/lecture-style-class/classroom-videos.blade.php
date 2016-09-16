<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        
        @include('layouts.partials.mobile_nav')
        
        @include('layouts.partials.header')
        
        @include('layouts.partials.title')
        
        
        <section class="banner-image">
            <div class="fill" style="background-image:url('../img/lecture-style-class.jpg');">
                <div class="container">
                
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Lecture Style Classes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 visible-md visible-lg">
                    <div id="menu">
                        <div class="panel list-group">
                            <a href="{{ url('lecture-style-class') }}"
                               class="list-group-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">Pedagogy
                            </a>
                            
                            <a href="{{ asset('docs/Equipment-Materials_Lecture-style_Class.pdf') }}"
                               data-file="true" target="_blank" class="list-group-item">Equipment and Materials
                            </a>
                            <a href="{{ asset('docs/Table_of_Contents_Lecture-style_Class.pdf') }}"
                               data-file="true" target="-_blank"
                               class="list-group-item">Table of Contents with Time Estimates
                            </a>
                            
                            {{--<a href="#" class="list-group-item sublink collapsed" data-toggle="collapse"--}}
                            {{--data-target="#sm"--}}
                            {{--data-parent="#menu">Content Modules</a>--}}
                            {{--<div id="sm" class="sublinks collapse">--}}
                            {{--<a class="list-group-item">Magnetism and Static Electricity Module</a>--}}
                            {{--<a class="list-group-item">Interactions and Energy Module</a>--}}
                            {{--<a class="list-group-item">Interactions and Waves Module</a>--}}
                            {{--<a class="list-group-item">Waves, Sounds and Light Module</a>--}}
                            {{--<a class="list-group-item">Matter and Interactions Module</a>--}}
                            {{--</div>--}}
                            
                            <a href="{{ asset('docs/Next_Gen_PET_Lecture-Style.pdf') }}"
                               data-file="true" target="_blank"
                               class="list-group-item">Student Materials (for viewing only)
                            </a>
                            <a href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}"
                               target="_blank" data-file="true"
                               class="list-group-item">Teaching and Learning Materials
                            </a>
                            <a target="_blank" href="http://nextgenpet.sdsu.edu/lc/"
                               class="list-group-item">Extensions Index
                            </a>
                            <a target="_blank" href="http://nextgenpet.sdsu.edu/lc/"
                               class="list-group-item">Demonstration Movies &amp; Videos
                            </a>
                            <a href="{{ url('lecture-style-class/classroom-videos') }}"
                               class="list-group-item{{ (Request::is('lecture-style-class/classroom-videos')) ? ' active' : '' }}">Classroom Videos
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <section id="pdf-content" class="pdf-content"></section>
                    <section id="html-content" class="html-content">
                        <h3>Classroom Videos</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate illo natus omnis. Aliquam doloribus eaque, earum enim eos facere nam numquam praesentium repellat, repellendus tenetur voluptas. Aliquid ipsum iste maxime. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam facere hic magni nemo non perspiciatis quod rem unde vero voluptatem! Cumque, error fugiat laborum non nostrum qui? Alias magni, repellendus.</p>
                        
                        
                        <div id="video-filter-list" class="panel panel-default">
                            <div class="panel-heading">
                                <input class="search" placeholder="Search" />
                                <button class="sort" data-sort="title">
                                    Sort
                                </button>
                            </div>
                            <div class="panel-body">
                                <ul class="list media-list">
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="wistia_embed wistia_async_hy6n14sie5 popover=true popoverAnimateThumbnail=true"
                                                  style="display:inline-block;height:51px;width:64px">&nbsp;</span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading title">
                                                <span class="wistia_embed wistia_async_hy6n14sie5 popover=true popoverContent=link"
                                                      style="display:inline"><a href="#">UM L2 Video Clip 1</a></span>
                                                
                                            </h4>
                                            <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.
                                            </p>
                                            <span class="label label-default unit">Unit M</span>
                                            <span class="label label-default unit-name">Developing a Model for Magnetism</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="wistia_embed wistia_async_vdldltoysk popover=true popoverAnimateThumbnail=true"
                                                  style="display:inline-block;height:51px;width:64px">&nbsp;</span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading title">
                                                <span class="wistia_embed wistia_async_vdldltoysk popover=true popoverContent=link"
                                                      style="display:inline"><a href="#">UM L2 Video Clip 2</a></span>
            
                                            </h4>
                                            <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.
                                            </p>
                                            <span class="label label-default unit">Unit M</span> <span
                                                    class="label label-default unit-name">Developing a Model for Magnetism</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="wistia_embed wistia_async_h4bxh647xt popover=true popoverAnimateThumbnail=true"
                                                  style="display:inline-block;height:51px;width:64px">&nbsp;</span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading title">
                                                <span class="wistia_embed wistia_async_h4bxh647xt popover=true popoverContent=link"
                                                      style="display:inline"><a href="#">UM L2 Video Clip 3</a></span>
            
                                            </h4>
                                            <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.
                                            </p>
                                            <span class="label label-default unit">Unit M</span> <span
                                                    class="label label-default unit-name">Developing a Model for Magnetism</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="wistia_embed wistia_async_edd48k68nu popover=true popoverAnimateThumbnail=true"
                                                  style="display:inline-block;height:51px;width:64px">&nbsp;</span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading title">
                                                <span class="wistia_embed wistia_async_edd48k68nu popover=true popoverContent=link"
                                                      style="display:inline"><a href="#">UM L2 Video Clip 4</a></span>
            
                                            </h4>
                                            <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.
                                            </p>
                                            <span class="label label-default unit">Unit M</span> <span
                                                    class="label label-default unit-name">Developing a Model for Magnetism</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="wistia_embed wistia_async_wva65c7dba popover=true popoverAnimateThumbnail=true"
                                                  style="display:inline-block;height:51px;width:64px">&nbsp;</span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading title">
                                                <span class="wistia_embed wistia_async_wva65c7dba popover=true popoverContent=link"
                                                      style="display:inline"><a href="#">UM L3 Video Clip 1</a></span>
            
                                            </h4>
                                            <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.
                                            </p>
                                            <span class="label label-default unit">Unit M</span> <span
                                                    class="label label-default unit-name">Developing a Model for Magnetism</span>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <div class="media-left">
                                            <span class="wistia_embed wistia_async_e0phik3y24 popover=true popoverAnimateThumbnail=true"
                                                  style="display:inline-block;height:51px;width:64px">&nbsp;</span>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading title">
                                                <span class="wistia_embed wistia_async_e0phik3y24 popover=true popoverContent=link"
                                                      style="display:inline"><a href="#">USE L1 Video Clip 1</a></span>
            
                                            </h4>
                                            <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi, cupiditate distinctio id ipsam labore molestias voluptate! Accusantium consectetur corporis, deserunt doloribus, explicabo, fuga fugiat nam nostrum nulla repudiandae voluptatem.
                                            </p>
                                            <span class="label label-default unit">Unit SE</span> <span
                                                    class="label label-default unit-name">Developing a Model for Static Electricity</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
        <script src="{{ url('js/list.js') }}"></script>
        <script src="//fast.wistia.com/embed/medias/el4h8jlwzj.jsonp" async></script>
        <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
        <script>
            var options = {
                valueNames: ['title', 'unit','unit-name']
            };
            
            var userList = new List('video-filter-list', options);
        </script>
    </body>
</html>
