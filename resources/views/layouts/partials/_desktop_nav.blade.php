<nav class="navbar navbar-light navbar-toggleable-sm hidden-sm-down">
    <div class="container">
        <ul class="navbar-nav d-m-flex justify-content-md-around">
            <li class="nav-item {{ (Request::is('/') or Request::is('about/*') or Request::is('workshops')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ url('/') }}">Home
                </a>
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

