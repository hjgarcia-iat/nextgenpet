<nav class="navbar navbar-light navbar-toggleable-sm hidden-sm-down">
    <div class="container">
        <ul class="navbar-nav d-m-flex justify-content-md-around">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
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
                <a class="nav-link" href="{{ url('help') }}">Help</a>
            </li>
        
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="loginlinks"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Additional Instructor Resources
                </a>
                <div class="dropdown-menu" aria-labelledby="loginlinks">
                    <a class="dropdown-item" href="https://ebook.iat.com" target="_blank">Studio Style</a>
                    <a class="dropdown-item" href="https://review.iat.com" target="_blank">Lecture Style</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

