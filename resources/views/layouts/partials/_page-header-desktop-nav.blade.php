<div class="col-md-8 d-flex justify-content-end">
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
        </ul>
    </nav>
</div>
