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
           href="https://petcyberpd.iat.com/unit/studio-style/"
           target="_blank">Studio Style
        </a>
        <a class="dropdown-item"
           href="https://petcyberpd.iat.com/unit/lecture-style/"
           target="_blank">Lecture Style
        </a>
    </div>
</li>
