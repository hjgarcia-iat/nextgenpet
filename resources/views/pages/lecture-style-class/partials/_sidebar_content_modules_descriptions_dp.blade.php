<div class="card">
    <a href="#"
       class="list-group-item sublink collapsed"
       data-toggle="collapse"
       data-target="#mainLectureContentModules"
       data-parent="#main-sidebar-menu">
        <span>Content Module Descriptions</span>
    </a>
    <div id="mainLectureContentModules"
         class="sublinks collapse{{ (Request::is('lecture-style-class/content/*') ? ' show' : '') }}">
        <a class="list-group-item {{ (Request::is('lecture-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/content/magnetism-and-static-electricity-module') }}">
            <span>Magnetism &amp; Static Electricity Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/content/interactions-and-energy-module') }}">
            <span>Interactions &amp; Energy Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/content/interactions-and-forces-module') }}">
            <span>Interactions &amp; Forces Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/content/waves-sound-and-light-module') }}">
            <span>Waves, Sounds &amp; Light Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/content/matter-and-interactions-module') }}">
            <span>Matter &amp; Interactions Module
            </span>
        </a>
    </div>
</div>