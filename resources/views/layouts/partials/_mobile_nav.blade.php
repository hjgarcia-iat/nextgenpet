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
                <div class="dropdown-menu{{ (Request::is('/') or Request::is('about/*')) ? ' show shown' : '' }}"
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
    
            <li class="nav-item {{ Request::is('studio-style-class') ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('studio-style-class') }}">Studio Style Class
                </a>
            </li>
    
            <li class="nav-item {{ (Request::is('lecture-style-class')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('lecture-style-class') }}">Lecture Style Class
                </a>
            </li>
    
            <li class="nav-item {{ (Request::is('help')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('help') }}">Help
                </a>
            </li>
    
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"
                   href="#"
                   id="loginlinks"
                   data-toggle="dropdown"
                   aria-haspopup="true"
                   aria-expanded="false">
                    Additional Instructor Resources
                </a>
                <div class="dropdown-menu"
                     aria-labelledby="loginlinks">
                    <a class="dropdown-item"
                       href="https://ebook.iat.com"
                       target="_blank">Studio Style
                    </a>
                    <a class="dropdown-item"
                       href="https://review.iat.com"
                       target="_blank">Lecture Style
                    </a>
                </div>
            </li>

        </ul>
    </div>
</nav>