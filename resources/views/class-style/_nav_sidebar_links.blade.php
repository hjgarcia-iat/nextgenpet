<li class="{{ Request::is('/') ? 'active' : '' }}">
    <a href="{{ url('/') }}">Home</a>
</li>
<li class="{{ Request::is('lecture-style-class') ? 'active' : '' }}">
    <a href="{{ url('lecture-style-class') }}">Lecture Style Class</a>
</li>
<li class="{{ Request::is('studio-style-class') ? 'active' : '' }}">
    <a href="{{ url('studio-style-class') }}">Studio Style Class</a>
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