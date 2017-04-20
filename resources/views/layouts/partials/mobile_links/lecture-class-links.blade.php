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
           class="dropdown-item">Equipment &amp; Materials
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
                Magnetism &amp; Static Electricity Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/interactions-and-energy-module') }}">
                Interactions &amp; Energy Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/interactions-and-forces-module') }}">
                Interactions &amp; Forces Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/waves-sound-and-light-module') }}">
                Waves, Sounds &amp; Light Module
            </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"
               href="{{ url('lecture-style-class/content/matter-and-interactions-module') }}">
                <span>Matter &amp; Interactions Module
                </span>
            </a>
        </div>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#lecture-student-materials"
           data-parent="#lecture-style-class">Content Module Student Materials (viewing)
        </a>
        
        <div id="lecture-student-materials"
             class="sublinks collapse">
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="{{ asset('docs/lecture/Module_MSE_Lecture-Style.pdf') }}">
                <span>Magnetism &amp; Static Electricity Module
                </span>
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_IE_Lecture-Style.pdf') }}">
                Interactions &amp; Energy Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_IF_Lecture-Style.pdf') }}">
                Interactions &amp; Forces Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_WSL_Lecture-Style.pdf') }}">
                Waves, Sounds &amp; Light Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="{{ asset('docs/lecture/Module_MI_Lecture-Style.pdf') }}">
                Matter &amp; Interactions Module
            </a>
        </div>
    
    
        <div id="lecture-teacher-learning-materials-mobile">
            <a href="#"
               class="dropdown-item sublink collapsed dropdown-toggle"
               data-toggle="collapse"
               data-target="#lecture-teacher-learning-materials-mobile-dropdown"
               data-parent="#lecture-teacher-learning-materials-mobile">
                <span>Teaching &amp; Learning Materials</span>
            </a>
            <div id="lecture-teacher-learning-materials-mobile-dropdown"
                 class="sublinks collapse{{ (Request::is('lecture-style-class/teaching-and-learning/*') ? ' show' : '') }}">
        
                <a class="dropdown-item {{ (Request::is('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') ? ' active' : '') }}"
                   href="{{ url('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') }}">
                    <span>General Lessons &amp; Extensions</span>
                </a>
        
                <a class="dropdown-item {{ (Request::is('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') ? ' active' : '') }}"
                   href="{{ url('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') }}">
                    <span>Module MSE Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-energy-module') ? ' active' : '') }}"
                   href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-energy-module') }}">
                    <span>Module IE Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-forces-module') ? ' active' : '') }}"
                   href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-forces-module') }}">
                    <span>Module IF Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') ? ' active' : '') }}"
                   href="{{ url('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') }}">
                    <span>Module WSL Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/matter-and-interactions-module') ? ' active' : '') }}"
                   href="{{ url('lecture-style-class/teaching-and-learning/matter-and-interactions-module') }}">
                    <span>Module MI Cluster
                    </span>
                </a>
            </div>
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