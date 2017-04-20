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
            Equipment &amp; Materials
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
                Magnetism &amp; Static Electricity Module
            </a>
            <a class="dropdown-item{{ (Request::is('studio-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
               href="{{ url('studio-style-class/content/interactions-and-energy-module') }}">
                Interactions &amp; Energy Module
            </a>
            <a class="dropdown-item{{ (Request::is('studio-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
               href="{{ url('studio-style-class/content/interactions-and-forces-module') }}">
                Interactions &amp; Forces Module
            </a>
            <a class="dropdown-item{{ (Request::is('studio-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
               href="{{ url('studio-style-class/content/waves-sound-and-light-module') }}">
                Waves, Sounds &amp; Light Module
            </a>
            {{--<a class="dropdown-item{{ (Request::is('studio-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"--}}
            {{--href="{{ url('studio-style-class/content/matter-and-interactions-module') }}">--}}
            {{--<span>Matter &amp; Interactions Module--}}
            {{--</span>--}}
            {{--</a>--}}
        </div>
        
        <a href="#"
           class="dropdown-item sublink collapsed dropdown-toggle"
           data-toggle="collapse"
           data-target="#studio-student-materials"
           data-parent="#menu">
            <span>Content Module Student Materials (viewing)</span>
        </a>
        <div id="studio-student-materials"
             class="sublinks collapse">
            <a class="dropdown-item"
               target="_blank"
               href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/studio/Module_MSE_Studio-Style_watermark.pdf">
                Magnetism &amp; Static Electricity Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/studio/Module_IE_Studio-Style_watermark.pdf">
                Interactions &amp; Energy Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/studio/Module_IF_Studio-Style_watermark.pdf">
                Interactions &amp; Forces Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/studio/Module_WSL_Studio-Style_watermark.pdf">
                Waves, Sounds &amp; Light Module
            </a>
            <a class="dropdown-item"
               target="_blank"
               data-file="true"
               href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/studio/Module_MI_Studio-Style_watermark.pdf">
                Matter &amp; Interactions Module
            </a>
        </div>
    
        <div id="studio-teacher-learning-materials-mobile">
            <a href="#"
               class="dropdown-item sublink collapsed dropdown-toggle"
               data-toggle="collapse"
               data-target="#studio-teacher-learning-materials-mobile-dropdown"
               data-parent="#studio-teacher-learning-materials-mobile">
                <span>Teaching &amp; Learning Materials</span>
            </a>
            <div id="studio-teacher-learning-materials-mobile-dropdown"
                 class="sublinks collapse{{ (Request::is('studio-style-class/teaching-and-learning/*') ? ' show' : '') }}">
                <a class="dropdown-item {{ (Request::is('studio-style-class/teaching-and-learning/general-lessons-and-extensions') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/teaching-and-learning/general-lessons-and-extensions') }}">
                    <span>General Activities &amp; Extensions</span>
                </a>
                <a class="dropdown-item {{ (Request::is('studio-style-class/teaching-and-learning/magnetism-and-static-electricity-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/teaching-and-learning/magnetism-and-static-electricity-module') }}">
                    <span>Module MSE Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('studio-style-class/teaching-and-learning/interactions-and-energy-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/teaching-and-learning/interactions-and-energy-module') }}">
                    <span>Module IE Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('studio-style-class/teaching-and-learning/interactions-and-forces-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/teaching-and-learning/interactions-and-forces-module') }}">
                    <span>Module IF Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('studio-style-class/teaching-and-learning/waves-sound-and-light-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/teaching-and-learning/waves-sound-and-light-module') }}">
                    <span>Module WSL Cluster
                    </span>
                </a>
                <a class="dropdown-item{{ (Request::is('studio-style-class/teaching-and-learning/matter-and-interactions-module') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/teaching-and-learning/matter-and-interactions-module') }}">
                    <span>Module MI Cluster
                    </span>
                </a>
            </div>
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