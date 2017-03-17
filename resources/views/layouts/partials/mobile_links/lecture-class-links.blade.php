<li class="nav-item dropdown"
    id="lecture-style-class">
    <a class="nav-link dropdown-toggle"
       href="#"
       id="lectureLinks"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">
        Lecture Style Class
    </a>
    <div class="dropdown-menu{{ (Request::is('lecture-style-class') or Request::is('lecture-style-class/*')) ? ' show shown' : '' }}"
         aria-labelledby="lectureLinks">
        <a href="{{ url('lecture-style-class') }}"
           class="dropdown-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">
            <span>Introduction</span>
        </a>
        <a href="{{ url('lecture-style-class/pedagogy') }}"
           class="dropdown-item{{ (Request::is('lecture-style-class/pedagogy')) ? ' active' : '' }}">
            <span>Pedagogy</span>
        </a>
        
        <a href="{{ asset('docs/Equipment-Materials_Lecture-style_Class.pdf') }}"
           data-file="true"
           target="_blank"
           class="dropdown-item">Equipment and Materials
        </a>
        
        <a href="{{ url('lecture-style-class/table-of-contents') }}"
           class="dropdown-item{{ (Request::is('lecture-style-class/table-of-contents')) ? ' active' : '' }}">
            <span>Table of Contents with Time Estimates
            </span>
        </a>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#lectureAreaLinks"
           data-parent="#lecture-style-class">Content Modules Description
        </a>
        <div id="lectureAreaLinks"
             class="sublinks collapse{{ (Request::is('lecture-style-class/content/*') ? ' show' : '') }}">
            <a class="dropdown-item {{ (Request::is('lecture-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/magnetism-and-static-electricity-module') }}">
                Magnetism and Static Electricity Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/interactions-and-energy-module') }}">
                Interactions and Energy Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/interactions-and-forces-module') }}">
                Interactions and Forces Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/waves-sound-and-light-module') }}">
                Waves, Sounds and Light Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/matter-and-interactions-module') }}">
                <span>Matter and Interactions Module
                </span>
            </a>
        </div>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#lecture-student-materials"
           data-parent="#lecture-style-class">Content Module Student Materials (for viewing only)
        </a>
        
        <div id="lecture-student-materials"
             class="sublinks collapse">
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/lecture/Module_MSE_Lecture-Style.pdf') }}">
                <span>Magnetism and Static Electricity Module
                </span>
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_IE_Lecture-Style.pdf') }}">
                Interactions and Energy Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_IF_Lecture-Style.pdf') }}">
                Interactions and Forces Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_WSL_Lecture-Style.pdf') }}">
                Waves, Sounds and Light Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_MI_Lecture-Style.pdf') }}">
                Matter and Interactions Module
            </a>
        </div>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#lecture-teaching-learning-materials"
           data-parent="#lecture-style-class">Teaching and Learning Materials (for distribution)
        </a>
        
        <div id="lecture-teaching-learning-materials"
             class="sublinks collapse">
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}">
                <span>View PDF</span>
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}">
                <span>View Docs</span>
            </a>
        </div>
        
        <a href="{{ url('lecture-style-class/extension-index') }}"
           class="dropdown-item{{ (Request::is('lecture-style-class/extension-index') ? ' active' : '') }}">
            Extensions Index
        </a>
        <a href="{{ url('lecture-style-class/demonstration-movies-and-simulations') }}"
           class="dropdown-item{{ (Request::is('lecture-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">
            Demonstration Movies &amp; Simulations
        </a>
        <a href="{{ url('lecture-style-class/classroom-videos') }}"
           class="dropdown-item{{ (Request::is('lecture-style-class/classroom-videos')) ? ' active' : '' }}">
            Classroom Videos
        </a>
    </div>
</li>