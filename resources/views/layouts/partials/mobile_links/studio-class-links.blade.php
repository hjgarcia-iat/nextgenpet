<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle"
       href="#"
       id="studioLinks"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">
        Studio Style Class
    </a>
    <div class="dropdown-menu{{ (Request::is('studio-style-class') or Request::is('studio-style-class/*')) ? ' show shown' : '' }}"
         aria-labelledby="studioLinks">
        
        <a href="{{ url('studio-style-class') }}"
           class="dropdown-item{{ (Request::is('studio-style-class')) ? ' active' : '' }}">
            Introduction
        </a>
        <a href="{{ url('studio-style-class/pedagogy') }}"
           class="dropdown-item{{ (Request::is('studio-style-class/pedagogy')) ? ' active' : '' }}">
            Pedagogy
        </a>
        
        <a href="{{ asset('docs/Equipment-Materials_Studio-style_Class.pdf') }}"
           target="_blank"
           class="dropdown-item">
            Equipment and Materials
        </a>
        <a href="{{ url('studio-style-class/table-of-contents') }}"
           class="dropdown-item{{ (Request::is('studio-style-class/table-of-contents')) ? ' active' : '' }}">
            Table of Contents with Time Estimates
        </a>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#sm"
           data-parent="#menu">
            Content Modules Description
        </a>
        <div id="sm"
             class="sublinks collapse{{ (Request::is('studio-style-class/content/*') ? ' show' : '') }}">
            <a class="dropdown-item {{ (Request::is('studio-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"
               href="{{ url('studio-style-class/content/magnetism-and-static-electricity-module') }}">
                Magnetism and Static Electricity Module
            </a>
            <a class="dropdown-item{{ (Request::is('studio-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
               href="{{ url('studio-style-class/content/interactions-and-energy-module') }}">
                Interactions and Energy Module
            </a>
            <a class="dropdown-item{{ (Request::is('studio-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
               href="{{ url('studio-style-class/content/interactions-and-forces-module') }}">
                Interactions and Forces Module
            </a>
            <a class="dropdown-item{{ (Request::is('studio-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
               href="{{ url('studio-style-class/content/waves-sound-and-light-module') }}">
                Waves, Sounds and Light Module
            </a>
            {{--<a class="dropdown-item{{ (Request::is('studio-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"--}}
            {{--href="{{ url('studio-style-class/content/matter-and-interactions-module') }}">--}}
            {{--<span>Matter and Interactions Module--}}
            {{--</span>--}}
            {{--</a>--}}
        </div>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#studio-student-materials"
           data-parent="#menu">
            <span>Content Module Student Materials (for viewing only)</span>
        </a>
        <div id="studio-student-materials"
             class="sublinks collapse">
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/studio/Module_MSE_Studio_Style.pdf') }}">
                Magnetism and Static Electricity Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/studio/Module_IE_Studio_Style.pdf') }}">
                Interactions and Energy Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/studio/Module_IF_Studio_Style.pdf') }}">
                Interactions and Forces Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/studio/Module_WSL_Studio_Style.pdf') }}">
                Waves, Sounds and Light Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/studio/Module_MI_Studio_Style.pdf') }}">
                Matter and Interactions Module
            </a>
        </div>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#studio-teaching-learning-materials"
           data-parent="#menu">Teaching and Learning Materials (for distribution)
        </a>
        
        <div id="studio-teaching-learning-materials"
             class="sublinks collapse">
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/Teaching_&_Learning_Studio_Style.pdf') }}">
                <span>View PDF</span>
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/Teaching_&_Learning_Studio_Style.pdf') }}">
                <span>View Docs</span>
            </a>
        </div>
        
        <a href="{{ url('studio-style-class/extension-index') }}"
           class="dropdown-item{{ (Request::is('studio-style-class/extension-index') ? ' active' : '') }}">
            Extensions Index
        </a>
        <a href="{{ url('studio-style-class/demonstration-movies-and-simulations') }}"
           class="dropdown-item{{ (Request::is('studio-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">
            Demonstration Movies &amp; Simulations
        </a>
        <a href="{{ url('studio-style-class/classroom-videos') }}"
           class="dropdown-item{{ (Request::is('studio-style-class/classroom-videos')) ? ' active' : '' }}">
            Classroom Videos
        </a>
    </div>
</li>