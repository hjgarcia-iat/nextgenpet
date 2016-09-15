<div class="navmenu navmenu-inverse navmenu-fixed-left offcanvas-sm">
    <a class="navmenu-brand" href="#">
        <img src="{{ asset('img/mobile-logo.png') }}" alt="It's About Time">
    </a>
    <ul class="nav navmenu-nav">
        
        <li class="social-icons clearfix">
    
            <a href="http://blog.iat.com" target="_blank">
                <i class="fa fa-comment"></i>
            </a>
            <a href="https://www.facebook.com/IATlearning" target="_blank">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="https://twitter.com/ItsAboutTimeEdu" target="_blank">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="http://www.linkedin.com/company/it's-about-time-learning" target="_blank">
                <i class="fa fa-linkedin"></i>
            </a>
            <a href="http://www.youtube.com/user/itsaboutimeedu" target="_blank">
                <i class="fa fa-youtube"></i>
            </a>
            <a href="http://instagram.com/itsabouttimeedu" target="_blank">
                <i class="fa fa-instagram"></i>
            </a>

        </li>
        
        <li class="dropdown{{ (Request::is('/') or Request::is('about/*') or Request::is('workshops')) ? ' active open' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
                
                
                <li class="{{ (Request::is('/')) ? 'active' : '' }}">
                    <a href="{{ url('/') }}">About</a>
                </li>
                <li class="{{ (Request::is('about/module-and-units')) ? 'active' : '' }}">
                    <a href="{{ asset('about/module-and-units') }}">Modules &amp; Units
                    </a>
                </li>
                <li class="{{ (Request::is('about/overview-of-extensions')) ? 'active' : '' }}">
                    <a href="{{ url('about/overview-of-extensions') }}">Overview of Extensions (Homework)
                    </a>
                </li>
                <li class="{{ (Request::is('about/overview-of-teaching-and-learning-activities')) ? 'active' : '' }}">
                    <a href="{{ url('about/overview-of-teaching-and-learning-activities') }}">Overview of Teaching &amp; Learning Activities
                    </a>
                </li>
                <li class="{{ (Request::is('about/engineering-design-activities')) ? 'active' : '' }}">
                    <a href="{{ url('about/engineering-design-activities') }}">Engineering Design Activities
                    </a>
                </li>
                <li class="{{ (Request::is('about/ngss-and-next-gen-pet')) ? 'active' : '' }}">
                    <a href="{{ url('about/ngss-and-next-gen-pet') }}">NGSS &amp; Next Gen PET
                    </a>
                </li>
                <li class="{{ (Request::is('about/implementation-versions')) ? 'active' : '' }}">
                    <a href="{{ url('about/implementation-versions') }}">Implementation Versions
                    </a>
                </li>
                <li class="{{ (Request::is('workshops')) ? 'active' : '' }}">
                    <a href="{{ url('workshops') }}">Workshops for Faculties &amp; PDF Providers
                    </a>
                </li>
                <li class="{{ (Request::is('about/development-staff')) ? 'active' : '' }}">
                    <a href="{{ url('about/development-staff') }}">About the Development Staff
                    </a>
                </li>
            </ul>
        </li>
    
        <li class="dropdown{{ Request::is('lecture-style-class') ? ' active open' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lecture Style Class <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
                <li class="{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">
                    <a href="{{ url('lecture-style-class') }}">Pedagogy</a>
                </li>
                <li>
                    <a href="{{ asset('docs/Equipment-Materials_Lecture-style_Class.pdf') }}"
                       target="_blank">Equipment and Materials
                    </a>
                </li>
                <li>
                    <a href="{{ asset('docs/Table_of_Contents_Lecture-style_Class.pdf') }}"
                       target="-_blank">Table of Contents with Time Estimates
                    </a>
                </li>
                <li>
                    <a href="{{ asset('docs/Next_Gen_PET_Lecture-Style.pdf') }}"
                       target="_blank">Student Materials (for viewing only)
                    </a>
                </li>
                <li>
                    <a href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}"
                       target="_blank">Teaching and Learning Materials
                    </a>
                </li>
                <li>
                    <a target="_blank"
                       href="http://nextgenpet.sdsu.edu/lc/">Extensions Index
                    </a>
                </li>
                <li>
                    <a target="_blank" href="http://nextgenpet.sdsu.edu/lc/">Demonstration Movies &amp; Videos
                    </a>
                </li>
                <li>
                    <a target="_blank"
                       href="http://nextgenpet.sdsu.edu/lc/">Classroom Videos
                    </a>
                </li>
            </ul>
        </li>
    
        <li class="dropdown{{ Request::is('studio-style-class') ? ' active open' : '' }}">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Studio Style Class <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
                <li class="{{ (Request::is('studio-style-class')) ? ' active' : '' }}">
                    <a href="{{ url('studio-style-class') }}">Pedagogy</a>
                </li>
                <li>
                    <a href="{{ asset('docs/Equipment-Materials_Studio-style_Class.pdf') }}"
                       target="_blank">Equipment and Materials
                    </a>
                </li>
                <li>
                    <a href="{{ asset('docs/Table_of_Contents_Studio-style_Class.pdf') }}"
                       target="-_blank">Table of Contents with Time Estimates
                    </a>
                </li>
                <li>
                    <a href="{{ asset('docs/Next_Gen_PET_Studio-style_Class.pdf') }}"
                       target="_blank">Student Materials (for viewing only)
                    </a>
                </li>
                <li>
                    <a href="{{ asset('docs/Teaching_&_Learning_Studio_Style.pdf') }}"
                       target="_blank"> Teaching and Learning Materials
                    </a>
                </li>
                <li>
                    <a target="_blank"
                       href="http://nextgenpet.sdsu.edu/lc/">Extensions Index
                    </a>
                </li>
                <li>
                    <a target="_blank" href="http://nextgenpet.sdsu.edu/lc/">Demonstration Movies &amp; Videos
                    </a>
                </li>
                <li class="sidebar-menu-link">
                    <a target="_blank"
                       href="http://nextgenpet.sdsu.edu/lc/">Classroom Videos
                    </a>
                </li>
            </ul>
        </li>
    
    
        <li class="{{ Request::is('resources') ? 'active' : '' }}">
            <a href="{{ url('resources') }}">Resources</a>
        </li>
        <li class="{{ Request::is('help') ? 'active' : '' }}">
            <a href="{{ url('help') }}">Help</a>
        </li>
        <li class="{{ Request::is('login') ? 'active' : '' }}">
            <a href="https://petcyberpd.iat.com/login/">Login</a>
        </li>
    </ul>
</div>