<div>
    <a href="{{ url('lecture-style-class/extension-index') }}"
       class="list-group-item{{ (Request::is('lecture-style-class/extension-index') ? ' active' : '') }}">
        <span>Extensions Index
        </span>
    </a>
</div>
<div>
    <a href="{{ url('lecture-style-class/demonstration-movies-and-simulations') }}"
       class="list-group-item{{ (Request::is('lecture-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">
        <span>Demonstration Movies &amp; Simulations
        </span>
    </a>
</div>
<div>
    <a href="{{ url('lecture-style-class/classroom-videos') }}"
       class="list-group-item{{ (Request::is('lecture-style-class/classroom-videos')) ? ' active' : '' }}">
        <span>Classroom Videos
        </span>
    </a>
</div>