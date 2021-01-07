<li class="nav-item dropdown" id="lecture-style-class">
    <a class="nav-link dropdown-toggle" href="#" id="lectureLinks" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Lecture Style Class </a>
    <div class="dropdown-menu{{ (Request::is('lecture-style-class') or Request::is('lecture-style-class/*')) ? ' show shown' : '' }}" aria-labelledby="lectureLinks">
        <a href="{{ url('lecture-style-class') }}" class="dropdown-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">
            <span>Introduction</span> </a>
        <a href="{{ url('lecture-style-class/pedagogy') }}" class="dropdown-item{{ (Request::is('lecture-style-class/pedagogy')) ? ' active' : '' }}">
            <span>Pedagogy</span> </a>

        <a href="https://s3.amazonaws.com/nextgenpet/web-docs/equipment/Equipment-Materials_Lecture-style_Class.pdf" data-file="true" target="_blank" class="dropdown-item">Equipment
            &amp; Materials </a>

        <a href="{{ url('lecture-style-class/table-of-contents') }}" class="dropdown-item{{ (Request::is('lecture-style-class/table-of-contents')) ? ' active' : '' }}">
            <span>Table of Contents with Time Estimates and Sample Lessons </span> </a>

        <a href="#" class="dropdown-item sublink collapsed dropdown-toggle" data-toggle="collapse" data-target="#lectureAreaLinks" data-parent="#lecture-style-class">
            Content Modules Description</a>
        <div id="lectureAreaLinks" class="sublinks collapse{{ (Request::is('lecture-style-class/content/*') ? ' show' : '') }}">
            <a class="dropdown-item {{ (Request::is('lecture-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/content/magnetism-and-static-electricity-module') }}">
                Magnetism &amp; Static Electricity Module </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/interactions-and-energy-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/content/interactions-and-energy-module') }}">
                Interactions &amp; Energy Module </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/interactions-and-forces-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/content/interactions-and-forces-module') }}">
                Interactions &amp; Forces Module </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/content/waves-sound-and-light-module') }}">
                Waves, Sounds &amp; Light Module </a>
            <a class="dropdown-item{{ (Request::is('lecture-style-class/content/matter-and-interactions-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/content/matter-and-interactions-module') }}">
                <span>Matter &amp; Interactions Module
                </span> </a>
        </div>

        <div id="lecture-teacher-learning-materials-mobile">
            <a href="#" class="dropdown-item sublink collapsed dropdown-toggle" data-toggle="collapse" data-target="#lecture-teacher-learning-materials-mobile-dropdown" data-parent="#lecture-teacher-learning-materials-mobile">
                <span>Teaching &amp; Learning Materials</span> </a>
            <div id="lecture-teacher-learning-materials-mobile-dropdown" class="sublinks collapse{{ (Request::is('lecture-style-class/teaching-and-learning/*') ? ' show' : '') }}">
    
                <a class="dropdown-item {{ (Request::is('lecture-style-class/teaching-and-learning/table-of-contents') ? ' active' : '') }}"
                   href="{{ url('lecture-style-class/teaching-and-learning/table-of-contents') }}">
                    <span>Table of Contents</span>
                </a>
                
                <a class="dropdown-item {{ (Request::is('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') ? ' active' : '') }}" href="{{ url('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') }}">
                    <span>General Lessons &amp; Extensions</span> </a>

                <a class="dropdown-item {{ (Request::is('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') }}">
                    <span>Module MSE Cluster
                    </span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-energy-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-energy-module') }}">
                    <span>Module IE Cluster
                    </span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-forces-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-forces-module') }}">
                    <span>Module IF Cluster
                    </span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') }}">
                    <span>Module WSL Cluster
                    </span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/teaching-and-learning/matter-and-interactions-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/teaching-and-learning/matter-and-interactions-module') }}">
                    <span>Module MI Cluster
                    </span> </a>
            </div>
        </div>
    
        <a href="{{ url('lecture-style-class/planning-your-course') }}"
           class="dropdown-item{{ (Request::is('lecture-style-class/planning-your-course') ? ' active' : '') }}">
            Planning Your Course
        </a>
        <a href="{{ url('lecture-style-class/extension-index') }}" class="dropdown-item{{ (Request::is('lecture-style-class/extension-index') ? ' active' : '') }}">
            Extensions Index </a>
        <a href="{{ url('lecture-style-class/demonstration-movies-and-simulations') }}" class="dropdown-item{{ (Request::is('lecture-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">
            Demonstration Movies &amp; Simulations </a>
        <a href="{{ url('lecture-style-class/classroom-videos') }}" class="dropdown-item{{ (Request::is('lecture-style-class/classroom-videos')) ? ' active' : '' }}">
            Classroom Videos </a>
        <div id="lecture-instructor-links">
            <a href="#" class="dropdown-item sublink collapsed dropdown-toggle" data-toggle="collapse" data-target="#lecture-instructor-dropdown-links" data-parent="#lecture-instructor-links">
                <span><i class="fa fa-lock mr-2"></i>Instructor</span> </a>
            <div id="lecture-instructor-dropdown-links" class="sublinks collapse{{ (Request::is('lecture-style-class/instructor/*') ? ' show' : '') }}">
                <a class="dropdown-item {{ (Request::is('lecture-style-class/instructor/magnetism-and-static-electricity-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/magnetism-and-static-electricity-module') }}">
                    <span>Magnetism &amp; Electricity Module</span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/instructor/interactions-and-energy-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/interactions-and-energy-module') }}">
                    <span>Interactions &amp; Energy Module</span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/instructor/interactions-and-forces-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/interactions-and-forces-module') }}">
                    <span>Interactions &amp; Force Module</span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/instructor/waves-sound-and-light-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/waves-sound-and-light-module') }}">
                    <span>Waves, Sounds &amp; Light Module</span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/instructor/matter-and-interactions-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/matter-and-interactions-module') }}">
                    <span>Matter &amp; Interactions Module</span> </a>
                <a class="dropdown-item{{ (Request::is('lecture-style-class/instructor/teaching-and-learning') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/teaching-and-learning') }}">
                    <span>Teaching &amp; Learning</span> </a>

                <a target="_blank" class="list-group-item" href="http://ngpfolc.wpengine.com/?p=248">
                    <span>Next Gen PET Virtual Conference</span></a>
            </div>
        </div>
    </div>
</li>