<div id="menu">
    <div class="panel list-group">
        <a href="{{ url('lecture-style-class') }}"
           class="list-group-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">Introduction
        </a>
        <a href="{{ url('lecture-style-class/pedagogy') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/pedagogy')) ? ' active' : '' }}">Pedagogy
        </a>
        
        <a href="{{ asset('docs/Equipment-Materials_Lecture-style_Class.pdf') }}"
           data-file="true" target="_blank" class="list-group-item">Equipment and Materials
        </a>
        <a href="{{ asset('docs/Table_of_Contents_Lecture-style_Class.pdf') }}"
           data-file="true" target="-_blank"
           class="list-group-item">Table of Contents with Time Estimates
        </a>
        
        {{--<a href="#" class="list-group-item sublink collapsed" data-toggle="collapse"--}}
           {{--data-target="#sm"--}}
           {{--data-parent="#menu">Content Modules--}}
        {{--</a>--}}
        {{--<div id="sm" class="sublinks collapse{{ (Request::is('lecture-style-class/content/*') ? ' in' : '') }}">--}}
            {{--<a class="list-group-item {{ (Request::is('lecture-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('lecture-style-class/content/magnetism-and-static-electricity-module') }}">Magnetism and Static Electricity Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('lecture-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('lecture-style-class/content/interactions-and-energy-module') }}">Interactions and Energy Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('lecture-style-class/content/interactions-and-waves-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('lecture-style-class/content/interactions-and-waves-module') }}">Interactions and Waves Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('lecture-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('lecture-style-class/content/waves-sound-and-light-module') }}">Waves, Sounds and Light Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('lecture-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('lecture-style-class/content/matter-and-interactions-module') }}">Matter and Interactions Module--}}
            {{--</a>--}}
        {{--</div>--}}
        
        <a href="{{ asset('docs/Next_Gen_PET_Lecture-Style.pdf') }}"
           data-file="true" target="_blank"
           class="list-group-item">Student Materials (for viewing only)
        </a>
        <a href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}"
           target="_blank" data-file="true"
           class="list-group-item">Teaching and Learning Materials
        </a>
        <a  href="{{ url('lecture-style-class/extension-index') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/extension-index') ? ' active' : '') }}">Extensions Index
        </a>
        <a href="{{ url('lecture-style-class/demonstration-movies-and-simulations') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">Demonstration Movies &amp; Simulations
        </a>
        <a href="{{ url('lecture-style-class/classroom-videos') }}"
           class="list-group-item{{ (Request::is('lecture-style-class/classroom-videos')) ? ' active' : '' }}">Classroom Videos
        </a>
    </div>
</div>
                