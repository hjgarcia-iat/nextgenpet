<div>
    <a href="{{ url('lecture-style-class') }}"
       class="list-group-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">
        <span>Introduction</span>
    </a>
</div>

<div>
    <a href="{{ url('lecture-style-class/pedagogy') }}"
       class="list-group-item{{ (Request::is('lecture-style-class/pedagogy')) ? ' active' : '' }}">
        <span>Pedagogy</span>
    </a>
</div>

<div>
    <a href="{{ asset('docs/Equipment-Materials_Lecture-style_Class.pdf') }}"
       data-file="true"
       target="_blank"
       class="list-group-item">Equipment and Materials
    </a>
</div>

<div>
    <a href="{{ url('lecture-style-class/table-of-contents') }}"
       class="list-group-item{{ (Request::is('lecture-style-class/table-of-contents')) ? ' active' : '' }}">
        <span>Table of Contents with Time Estimates
        </span>
    </a>
</div>