<div class="card">
    <a href="#"
       class="list-group-item sublink collapsed"
       data-toggle="collapse"
       data-target="#mainStudioContentModules"
       data-parent="#main-sidebar-menu">
        <span>Content Modules Description and Activities
        </span>
    </a>
    <div id="mainStudioContentModules"
         class="sublinks collapse{{ (Request::is('studio-style-class/content/*') ? ' show' : '') }}">
        <a class="list-group-item {{ (Request::is('studio-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"
           href="{{ url('studio-style-class/content/magnetism-and-static-electricity-module') }}">
            <span>Magnetism and Static Electricity Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('studio-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"
           href="{{ url('studio-style-class/content/interactions-and-energy-module') }}">
            <span>Interactions and Energy Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('studio-style-class/content/interactions-and-forces-module') ? ' active' : '') }}"
           href="{{ url('studio-style-class/content/interactions-and-forces-module') }}">
            <span>Interactions and Forces Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('studio-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"
           href="{{ url('studio-style-class/content/waves-sound-and-light-module') }}">
            <span>Waves, Sounds and Light Module
            </span>
        </a>
        {{--<a class="list-group-item{{ (Request::is('studio-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"--}}
        {{--href="{{ url('studio-style-class/content/matter-and-interactions-module') }}">--}}
        {{--<span>Matter and Interactions Module--}}
        {{--</span>--}}
        {{--</a>--}}
    </div>
</div>