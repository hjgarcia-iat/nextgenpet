<div>
    <a href="{{ url('studio-style-class') }}"
       class="list-group-item{{ (Request::is('studio-style-class')) ? ' active' : '' }}">
        <span>Introduction</span>
    </a>
</div>
<div>
    <a href="{{ url('studio-style-class/pedagogy') }}"
       class="list-group-item{{ (Request::is('studio-style-class/pedagogy')) ? ' active' : '' }}">
        <span>Pedagogy</span>
    </a>
</div>

<div>
    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/equipment/Equipment-Materials_Studio-style_Class.pdf"
       data-file="true"
       target="_blank"
       class="list-group-item">
        <span>Equipment &amp; Materials
        </span>
    </a>
</div>
<div>
    <a href="{{ url('studio-style-class/table-of-contents') }}"
       class="list-group-item{{ (Request::is('studio-style-class/table-of-contents')) ? ' active' : '' }}">
        <span>Table of Contents with Time Estimates
        </span>
    </a>
</div>