<div class="page-side-menu sps hidden-sm-down" id="main-sidebar-menu">
    <div class="panel list-group">
        <div>
            <a href="{{ url('studio-style-class') }}"
               class="list-group-item{{ (Request::is('studio-style-class')) ? ' active' : '' }}">
                <span>Introduction</span>
            </a>
        </div>
        <div>
            <a href="{{ url('studio-style-class/pedagogy') }}"
               class="list-group-item{{ (Request::is('studio-style-class/pedagogy')) ? ' active' : '' }}">
                <span>Pedagogy</span>
            </a>
        </div>
        
        <div>
            <a href="{{ asset('docs/Equipment-Materials_Studio-style_Class.pdf') }}"
               data-file="true"
               target="_blank"
               class="list-group-item">
                <span>Equipment and Materials
                </span>
            </a>
        </div>
        <div>
            <a href="{{ url('studio-style-class/table-of-contents') }}"
               class="list-group-item{{ (Request::is('studio-style-class/table-of-contents')) ? ' active' : '' }}">
                <span>Table of Contents with Time Estimates
                </span>
            </a>
        </div>
        
        <div class="card">
            <a href="#"
               class="list-group-item sublink collapsed"
               data-toggle="collapse"
               data-target="#mainStudioContentModules"
               data-parent="#main-sidebar-menu">
                <span>Content Modules Description
                </span>
            </a>
            <div id="mainStudioContentModules"
                 class="sublinks collapse{{ (Request::is('studio-style-class/content/*') ? ' show' : '') }}">
                <a class="list-group-item {{ (Request::is('studio-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/content/magnetism-and-static-electricity-module') }}">
                    <span>Magnetism and Static Electricity Module
                    </span>
                </a>
                <a class="list-group-item{{ (Request::is('studio-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/content/interactions-and-energy-module') }}">
                    <span>Interactions and Energy Module
                    </span>
                </a>
                <a class="list-group-item{{ (Request::is('studio-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/content/interactions-and-forces-module') }}">
                    <span>Interactions and Forces Module
                    </span>
                </a>
                <a class="list-group-item{{ (Request::is('studio-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/content/waves-sound-and-light-module') }}">
                    <span>Waves, Sounds and Light Module
                    </span>
                </a>
                {{--<a class="list-group-item{{ (Request::is('studio-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"--}}
                {{--href="{{ url('studio-style-class/content/matter-and-interactions-module') }}">--}}
                {{--<span>Matter and Interactions Module--}}
                {{--</span>--}}
                {{--</a>--}}
            </div>
        </div>
        
        
        <div class="card">
            <a href="#"
               class="list-group-item sublink collapsed"
               data-toggle="collapse"
               data-target="#sm-student-materials"
               data-parent="#main-sidebar-menu">
                <span>Content Module Student Materials (for viewing only)</span>
            </a>
            <div id="sm-student-materials"
                 class="sublinks collapse">
                <a class="list-group-item"
                   target="_blank"
                   data-file="true"
                   href="{{ asset('docs/studio/Module_MSE_Studio_Style.pdf') }}">
                    <span>Magnetism and Static Electricity Module
                    </span>
                </a>
                <a class="list-group-item"
                   target="_blank"
                   data-file="true"
                   href="{{ asset('docs/studio/Module_IE_Studio_Style.pdf') }}">
                    <span>Interactions and Energy Module
                    </span>
                </a>
                <a class="list-group-item"
                   target="_blank"
                   data-file="true"
                   href="{{ asset('docs/studio/Module_IF_Studio_Style.pdf') }}">
                    <span>Interactions and Forces Module
                    </span>
                </a>
                <a class="list-group-item"
                   target="_blank"
                   data-file="true"
                   href="{{ asset('docs/studio/Module_WSL_Studio_Style.pdf') }}">
                    <span>Waves, Sounds and Light Module
                    </span>
                </a>
                <a class="list-group-item"
                   target="_blank"
                   data-file="true"
                   href="{{ asset('docs/studio/Module_MI_Studio_Style.pdf') }}">
                    <span>Matter and Interactions Module
                    </span>
                </a>
            </div>
        </div>
        <div class="card">
            <a href="#"
               class="list-group-item sublink collapsed"
               data-toggle="collapse"
               data-target="#sm-teacher-learning"
               data-parent="#main-sidebar-menu">
                <span>Teaching and Learning Materials (for distribution)</span>
            </a>
            <div id="sm-teacher-learning"
                 class="sublinks collapse">
                <a href="{{ asset('docs/Teaching_&_Learning_Studio_Style.pdf') }}"
                   target="_blank"
                   data-file="true"
                   class="list-group-item">
                    <span>View PDF</span>
                </a>
                <a href="{{ asset('docs/Teaching_&_Learning_Studio_Style.pdf') }}"
                   target="_blank"
                   data-file="true"
                   class="list-group-item">
                    <span>Download</span>
                </a>
            </div>
        </div>
        
        <div>
            <a href="{{ url('studio-style-class/extension-index') }}"
               class="list-group-item{{ (Request::is('studio-style-class/extension-index') ? ' active' : '') }}">
                <span>Extensions Index
                </span>
            </a>
        </div>
        <div>
            <a href="{{ url('studio-style-class/demonstration-movies-and-simulations') }}"
               class="list-group-item{{ (Request::is('studio-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">
                <span>Demonstration Movies &amp; Simulations
                </span>
            </a>
        </div>
        <div>
            <a href="{{ url('studio-style-class/classroom-videos') }}"
               class="list-group-item{{ (Request::is('studio-style-class/classroom-videos')) ? ' active' : '' }}">
                <span>Classroom Videos
                </span>
            </a>
        </div>
    </div>
</div>
