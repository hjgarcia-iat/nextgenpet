<nav class="d-none d-md-block">
    <ul class="nav nav-pills main-navbar">
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
        @if(auth()->check())
            <li class="nav-item {{ Request::is('my-account') ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ route('my-account') }}">
                    My Account
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                   href="{{ route('login.destroy') }}">Logout
                </a>
                <form id="logout-form"
                      action="{{ route('login.destroy') }}"
                      method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        @else
            <li class="nav-item {{ (Request::is('login')) ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ route('login.create') }}">Login/Register
                </a>
            </li>
        @endif
    </ul>
</nav>