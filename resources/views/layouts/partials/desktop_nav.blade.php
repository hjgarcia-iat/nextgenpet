<nav class="navbar navbar-light navbar-toggleable-sm hidden-sm-down desktop-nav">
    <div class="container">
        <ul class="navbar-nav d-m-flex justify-content-md-around">
            <li class="nav-item {{ (Request::is('/') or Request::is('about/*') or Request::is('workshops')) ? 'active' : '' }}">
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
         
            <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
            </li>
    
            <li class="nav-item {{ (Request::is('login')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="/login">Login
                </a>
            </li>
        </ul>
    </div>
</nav>

