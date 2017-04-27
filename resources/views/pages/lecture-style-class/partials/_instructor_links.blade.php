<div class="card">
    <a href="#" class="list-group-item sublink collapsed" data-toggle="collapse" data-target="#instructorLinks" data-parent="#main-sidebar-menu">
        <span><i class="fa fa-lock mr-1"></i> Instructor</span> </a>
    <div id="instructorLinks" class="sublinks collapse{{ (Request::is('lecture-style-class/instructor/*') ? ' show' : '') }}">
        <a class="list-group-item {{ (Request::is('lecture-style-class/instructor/magnetism-and-static-electricity-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/magnetism-and-static-electricity-module') }}">
            <span>Magnetism &amp; Static Electricity Module
            </span> </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/instructor/interactions-and-energy-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/interactions-and-energy-module') }}">
            <span>Interactions &amp; Energy Module
            </span> </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/instructor/interactions-and-forces-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/interactions-and-forces-module') }}">
            <span>Interactions &amp; Forces Module
            </span> </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/instructor/waves-sound-and-light-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/waves-sound-and-light-module') }}">
            <span>Waves, Sounds &amp; Light Module
            </span> </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/instructor/matter-and-interactions-module') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/matter-and-interactions-module') }}">
            <span>Matter &amp; Interactions Module
            </span> </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/instructor/teaching-and-learning') ? ' active' : '') }}" href="{{ url('lecture-style-class/instructor/teaching-and-learning') }}">
            <span>Teaching &amp; Learning
            </span> </a>
    </div>
</div>