<div class="page-side-menu hidden-sm-down">
    <div class="panel list-group">
        <a href="{{ url('lecture-style-class') }}"
           class="list-group-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">
            <span>Introduction</span>
        </a>
        <a href="{{ url('lecture-style-class/pedagogy') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/pedagogy')) ? ' active' : '' }}">
            <span>Pedagogy</span>
        </a>
        
        <a href="{{ asset('docs/Equipment-Materials_Lecture-style_Class.pdf') }}"
           data-file="true"
           target="_blank"
           class="list-group-item">Equipment and Materials
        </a>
        
        <a href="{{ url('lecture-style-class/table-of-contents') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/table-of-contents')) ? ' active' : '' }}">
            <span>Table of Contents with Time Estimates
            </span>
        </a>
        
        <a href="#"
           class="list-group-item sublink collapsed"
           data-toggle="collapse"
           data-target="#mainLectureContentModules"
           data-parent="#menu">Content Modules
        </a>
        <div id="mainLectureContentModules"
             class="sublinks collapse{{ (Request::is('lecture-style-class/content/*') ? ' show' : '') }}">
            <a class="list-group-item {{ (Request::is('lecture-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/magnetism-and-static-electricity-module') }}">
                <span>Magnetism and Static Electricity Module
                </span>
            </a>
            <a class="list-group-item{{ (Request::is('lecture-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/interactions-and-energy-module') }}">
                <span>Interactions and Energy Module
                </span>
            </a>
            <a class="list-group-item{{ (Request::is('lecture-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/interactions-and-forces-module') }}">
                <span>Interactions and Forces Module
                </span>
            </a>
            <a class="list-group-item{{ (Request::is('lecture-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/waves-sound-and-light-module') }}">
                <span>Waves, Sounds and Light Module
                </span>
            </a>
            {{--<a class="list-group-item{{ (Request::is('lecture-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('lecture-style-class/content/matter-and-interactions-module') }}">--}}
                {{--<span>Matter and Interactions Module--}}
                {{--</span>--}}
            {{--</a>--}}
        </div>
        
        <a href="#"
           class="list-group-item sublink collapsed"
           data-toggle="collapse"
           data-target="#sm-student-materials"
           data-parent="#menu">Student Materials (for viewing only)
        </a>
        <div id="sm-student-materials"
             class="sublinks collapse">
            <a class="list-group-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/lecture/Module_MSE_Lecture-Style.pdf') }}">
                <span>Magnetism and Static Electricity Module
                </span>
            </a>
            <a class="list-group-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/lecture/Module_IE_Lecture-Style.pdf') }}">
                <span>Interactions and Energy Module
                </span>
            </a>
            <a class="list-group-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/lecture/Module_IF_Lecture-Style.pdf') }}">
                <span>Interactions and Forces Module
                </span>
            </a>
            <a class="list-group-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/lecture/Module_WSL_Lecture-Style.pdf') }}">
                <span>Waves, Sounds and Light Module
                </span>
            </a>
            <a class="list-group-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/lecture/Module_MI_Lecture-Style.pdf') }}">
                <span>Matter and Interactions Module
                </span>
            </a>
        </div>
        
        
        <a href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}"
           target="_blank"
           data-file="true"
           class="list-group-item">
            <span>Teaching and Learning Materials
            </span>
        </a>
        <a href="{{ url('lecture-style-class/extension-index') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/extension-index') ? ' active' : '') }}">
            <span>Extensions Index
            </span>
        </a>
        <a href="{{ url('lecture-style-class/demonstration-movies-and-simulations') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">
            <span>Demonstration Movies &amp; Simulations
            </span>
        </a>
        <a href="{{ url('lecture-style-class/classroom-videos') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/classroom-videos')) ? ' active' : '' }}">
            <span>Classroom Videos
            </span>
        </a>
    </div>
</div>
