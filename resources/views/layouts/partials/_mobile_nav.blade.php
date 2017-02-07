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
    
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('home') }}">Home
                </a>
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