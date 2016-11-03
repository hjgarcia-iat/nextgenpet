<div id="menu">
    <div class="panel list-group">
        <a href="{{ url('studio-style-class') }}"
           class="list-group-item{{ (Request::is('studio-style-class')) ? ' active' : '' }}">Introduction
        </a>
        <a href="{{ url('studio-style-class/pedagogy') }}"
           class="list-group-item{{ (Request::is('studio-style-class/pedagogy')) ? ' active' : '' }}">Pedagogy
        </a>
        
        <a href="{{ asset('docs/Equipment-Materials_Studio-style_Class.pdf') }}"
           data-file="true" target="_blank" class="list-group-item">Equipment and Materials
        </a>
        <a href="{{ url('studio-style-class/table-of-contents') }}"
           class="list-group-item{{ (Request::is('studio-style-class/table-of-contents')) ? ' active' : '' }}">Table of Contents with Time Estimates
        </a>
        
        {{--<a href="#" class="list-group-item sublink collapsed" data-toggle="collapse"--}}
           {{--data-target="#sm"--}}
           {{--data-parent="#menu">Content Modules--}}
        {{--</a>--}}
        {{--<div id="sm" class="sublinks collapse{{ (Request::is('studio-style-class/content/*') ? ' in' : '') }}">--}}
            {{--<a class="list-group-item {{ (Request::is('studio-style-class/content/magnetism-and-static-electricity-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('studio-style-class/content/magnetism-and-static-electricity-module') }}">Magnetism and Static Electricity Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('studio-style-class/content/interactions-and-energy-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('studio-style-class/content/interactions-and-energy-module') }}">Interactions and Energy Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('studio-style-class/content/interactions-and-waves-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('studio-style-class/content/interactions-and-waves-module') }}">Interactions and Waves Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('studio-style-class/content/waves-sound-and-light-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('studio-style-class/content/waves-sound-and-light-module') }}">Waves, Sounds and Light Module--}}
            {{--</a>--}}
            {{--<a class="list-group-item{{ (Request::is('studio-style-class/content/matter-and-interactions-module') ? ' active' : '') }}"--}}
               {{--href="{{ url('studio-style-class/content/matter-and-interactions-module') }}">Matter and Interactions Module--}}
            {{--</a>--}}
        {{--</div>--}}
    
        <a href="#" class="list-group-item sublink collapsed" data-toggle="collapse"
           data-target="#sm"
           data-parent="#menu">Student Materials (for viewing only)
        </a>
        <div id="sm" class="sublinks collapse">
            <a class="list-group-item"
               target="_blank" data-file="true"
               href="{{ asset('docs/studio/Module_MSE_Studio_Style.pdf') }}">Magnetism and Static Electricity Module
            </a>
            <a class="list-group-item"
               target="_blank" data-file="true"
               href="{{ asset('docs/studio/Module_IE_Studio_Style.pdf') }}">Interactions and Energy Module
            </a>
            <a class="list-group-item"
               target="_blank" data-file="true"
               href="{{ asset('docs/studio/Module_IF_Studio_Style.pdf') }}">Interactions and Forces Module
            </a>
            <a class="list-group-item"
               target="_blank" data-file="true"
               href="{{ asset('docs/studio/Module_WSL_Studio_Style.pdf') }}">Waves, Sounds and Light Module
            </a>
            <a class="list-group-item"
               target="_blank" data-file="true"
               href="{{ asset('docs/studio/Module_MI_Studio_Style.pdf') }}">Matter and Interactions Module
            </a>
        </div>
        <a href="{{ asset('docs/Teaching_&_Learning_Studio_Style.pdf') }}"
           target="_blank" data-file="true"
           class="list-group-item">Teaching and Learning Materials
        </a>
        <a  href="{{ url('studio-style-class/extension-index') }}"
           class="list-group-item{{ (Request::is('studio-style-class/extension-index') ? ' active' : '') }}">Extensions Index
        </a>
        <a href="{{ url('studio-style-class/demonstration-movies-and-simulations') }}"
           class="list-group-item{{ (Request::is('studio-style-class/demonstration-movies-and-simulations') ? ' active' : '') }}">Demonstration Movies &amp; Simulations
        </a>
        <a href="{{ url('studio-style-class/classroom-videos') }}"
           class="list-group-item{{ (Request::is('studio-style-class/classroom-videos')) ? ' active' : '' }}">Classroom Videos
        </a>
    </div>
</div>
                