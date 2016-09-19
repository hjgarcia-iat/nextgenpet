<div id="menu">
    <div class="panel list-group">
        <a href="{{ url('lecture-style-class') }}"
           class="list-group-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">Pedagogy
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
        {{--data-parent="#menu">Content Modules</a>--}}
        {{--<div id="sm" class="sublinks collapse">--}}
        {{--<a class="list-group-item">Magnetism and Static Electricity Module</a>--}}
        {{--<a class="list-group-item">Interactions and Energy Module</a>--}}
        {{--<a class="list-group-item">Interactions and Waves Module</a>--}}
        {{--<a class="list-group-item">Waves, Sounds and Light Module</a>--}}
        {{--<a class="list-group-item">Matter and Interactions Module</a>--}}
        {{--</div>--}}
        
        <a href="{{ asset('docs/Next_Gen_PET_Lecture-Style.pdf') }}"
           data-file="true" target="_blank"
           class="list-group-item">Student Materials (for viewing only)
        </a>
        <a href="{{ asset('docs/Teaching_&_Learning_Lecture_Style.pdf') }}"
           target="_blank" data-file="true"
           class="list-group-item">Teaching and Learning Materials
        </a>
        <a target="_blank" href="http://nextgenpet.sdsu.edu/lc/"
           class="list-group-item">Extensions Index
        </a>
        <a target="_blank" href="http://nextgenpet.sdsu.edu/lc/"
           class="list-group-item">Demonstration Movies &amp; Videos
        </a>
        <a href="{{ url('lecture-style-class/classroom-videos') }}"
           class="list-group-item">Classroom Videos
        </a>
    </div>
</div>
                