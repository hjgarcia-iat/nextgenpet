<nav class="navbar navbar-light hidden-md-up">
    <div class="container">
        <button type="button" class="navbar-toggler offcanvas-toggle" data-toggle="offcanvas"
                data-target="#js-bootstrap-offcanvas">
            <span class="fa fa-navicon"></span>
        </button>
    </div>
</nav>
<nav class="navbar navbar-light navbar-toggleable-sm hidden-md-up navbar-offcanvas navbar-offcanvas-touch"
     id="js-bootstrap-offcanvas">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"
                   href="#"
                   id="aboutLinks"
                   data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">
                    Home
                </a>
                <div class="dropdown-menu{{ (Request::is('/') or Request::is('about/*') or Request::is('workshops')) ? ' show shown' : '' }}"
                     aria-labelledby="aboutLinks">
                    
                    <a class="dropdown-item{{ (Request::is('/') or Request::is('about/flexibility') or Request::is('about/research-based')) ? ' active' : '' }}"
                       href="{{ url('/') }}">About</a>
                    
                    <a class="dropdown-item{{ (Request::is('about/module-and-units')) ? ' active' : '' }}"
                       href="{{ url('about/module-and-units') }}">Modules &amp; Units</a>
    
                    <a href="{{ url('about/overview-of-extensions') }}"
                       class="dropdown-item{{ (Request::is('about/overview-of-extensions')) ? ' active' : '' }}">
                        Overview of Extensions (Homework)
                    </a>
    
                    <a href="{{ url('about/overview-of-teaching-and-learning-activities') }}"
                       class="dropdown-item{{ (Request::is('about/overview-of-teaching-and-learning-activities')) ? ' active' : '' }}">
                        <span>Overview of Teaching &amp; Learning Activities
                        </span>
                    </a>
                    <a href="{{ url('about/engineering-design-activities') }}"
                       class="dropdown-item{{ (Request::is('about/engineering-design-activities')) ? ' active' : '' }}">
                        <span>Engineering Design Activities
                        </span>
                    </a>
                    <a href="{{ url('about/ngss-and-next-gen-pet') }}"
                       class="dropdown-item{{ (Request::is('about/ngss-and-next-gen-pet')) ? ' active' : '' }}">
                        <span>NGSS &amp; Next Gen PET
                        </span>
                    </a>
                    <a href="{{ url('about/implementation-versions') }}"
                       class="dropdown-item{{ (Request::is('about/implementation-versions')) ? ' active' : '' }}">
                        <span>Implementation Versions
                        </span>
                    </a>
                    <a href="{{ url('workshops') }}"
                       class="dropdown-item{{ (Request::is('workshops')) ? ' active' : '' }}">
                        <span>Workshops for Faculties &amp; PD Providers
                        </span>
                    </a>
                    <a href="{{ url('about/development-staff') }}"
                       class="dropdown-item{{ (Request::is('about/development-staff')) ? ' active' : '' }}">
                        <span>About the Development Staff
                        </span>
                    </a>
                    <a href="{{ url('about/faculty-online-learning') }}"
                       class="dropdown-item{{ (Request::is('about/faculty-online-learning')) ? ' active' : '' }}">
                        <span>
                            Faculty Online Learning Community for NGP
                        </span>
                    </a>
                </div>
            </li>
            
            
            
            {{--Studio Area Dropdown--}}
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
                       class="dropdown-item sublink collapsed"
                       data-toggle="collapse"
                       data-target="#sm"
                       data-parent="#menu">
                        Content Modules
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
                       class="dropdown-item sublink collapsed"
                       data-toggle="collapse"
                       data-target="#studio-student-materials"
                       data-parent="#menu">
                        <span>Student Materials (for viewing only)
                        </span>
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
                    <a href="{{ asset('docs/Teaching_&_Learning_Studio_Style.pdf') }}"
                       target="_blank"
                       data-file="true"
                       class="dropdown-item">
                        Teaching and Learning Materials
                    </a>
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
    
    
            {{--Lecture Area Dropdown--}}
            <li class="nav-item dropdown">
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
                       class="dropdown-item sublink collapsed"
                       data-toggle="collapse"
                       data-target="#lectureAreaLinks"
                       data-parent="#menu">Content Modules
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
                       class="dropdown-item sublink collapsed"
                       data-toggle="collapse"
                       data-target="#lecture-student-materials"
                       data-parent="#menu">Student Materials (for viewing only)
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
                    
                    <a href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}"
                       target="_blank"
                       class="dropdown-item">
                        <span>Teaching and Learning Materials
                        </span>
                    </a>
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
    
            <li class="nav-item {{ (Request::is('help')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('help') }}">Help
                </a>
            </li>
    
            @if(auth()->check())
                <li class="nav-item">
                    <a href="{{ url('/logout') }}"
                       class="nav-link"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form"
                          action="{{ url('/logout') }}"
                          method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @else
                <li class="nav-item {{ (Request::is('login')) ? 'active' : '' }}">
                    <a class="nav-link"
                       href="{{ url('login') }}">Login
                    </a>
                </li>
            @endif
        </ul>
    </div>
</nav>