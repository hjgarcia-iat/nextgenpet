<div>
    <a href="{{ url('studio-style-class/planning-your-course') }}"
       class="list-group-item{{ (Request::is('studio-style-class/planning-your-course') ? ' active' : '') }}">
        <span>Planning Your Course</span> </a>
</div>
<div>
    <a href="{{ url('studio-style-class/extension-index') }}" class="list-group-item{{ (Request::is('studio-style-class/extension-index') ? ' active' : '') }}">
        <span>Extensions Index
        </span> </a>
</div>
<div>
    <a href="{{ url('studio-style-class/demonstration-movies-and-simulations') }}" class="list-group-item{{ (Request::is('studio-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">
        <span>Demonstration Movies &amp; Simulations
        </span> </a>
</div>
<div>
    <a href="{{ url('studio-style-class/classroom-videos') }}" class="list-group-item{{ (Request::is('studio-style-class/classroom-videos')) ? ' active' : '' }}">
        <span>Classroom Videos
        </span> </a>
</div>