<nav class="navbar navbar-light navbar-toggleable-sm hidden-sm-down">
    <div class="container">
        <ul class="navbar-nav d-m-flex justify-content-md-around">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
    
            <li class="nav-item {{ (Request::is('studio-style-class') or Request::is('studio-style-class/*')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('studio-style-class') }}">Studio Style Class
                </a>
            </li>
            
            <li class="nav-item {{ (Request::is('lecture-style-class') or Request::is('lecture-style-class/*')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('lecture-style-class') }}">Lecture Style Class
                </a>
            </li>
         
            <li class="nav-item {{ (Request::is('help')) ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('help') }}">Help</a>
            </li>
    
            <li class="nav-item {{ (Request::is('register')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('/register') }}">
                    Register
                </a>
            </li>
        </ul>
    </div>
</nav>

