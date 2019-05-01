<div class="page-side-menu sps" id="home-page-side-menu">
    <div class="panel list-group">
        <a href="{{ url('/') }}"
           class="list-group-item{{ (Request::is('/') or Request::is('about/flexibility') or Request::is('about/research-based')) ? ' active' : '' }}">
            <span>About</span>
        </a>
        <a href="{{ url('about/module-and-units') }}"
           class="list-group-item{{ (Request::is('about/module-and-units')) ? ' active' : '' }}">
            <span>Modules &amp; Units
            </span>
        </a>

        <a href="{{ url('about/overview-of-extensions') }}"
           class="list-group-item{{ (Request::is('about/overview-of-extensions')) ? ' active' : '' }}">
            <span>Overview of Extensions (Homework)
            </span>
        </a>
        <a href="{{ url('about/overview-of-teaching-and-learning-activities') }}"
           class="list-group-item{{ (Request::is('about/overview-of-teaching-and-learning-activities')) ? ' active' : '' }}">
            <span>Overview of Teaching and Learning Materials</span>
        </a>

        <a href="{{ url('about/overview-of-pcim') }}"
           class="list-group-item{{ (Request::is('about/overview-of-pcim')) ? ' active' : '' }}">
            <span>Overview of Planning & Conducting Investigations Materials</span>
        </a>

        <a href="{{ url('about/engineering-design-activities') }}"
           class="list-group-item{{ (Request::is('about/engineering-design-activities')) ? ' active' : '' }}">
            <span>Overview of Engineering Design Activities</span>
        </a>

        <div class="card">
            <a href="#" class="list-group-item sublink collapsed" data-toggle="collapse" data-target="#nextgenpet"
               data-parent="#home-page-side-menu">NGSS &amp; Next Gen PET
            </a>
            <div id="nextgenpet"
                 class="sublinks collapse{{ (Request::is('about/nextgen-pet/*') ? ' show' : '') }}">
                <a class="list-group-item {{ (Request::is('about/nextgen-pet/overview') ? ' active' : '') }}"
                   href="{{ url('about/nextgen-pet/overview') }}">
                    <span>Overview</span>
                </a>
                <a class="list-group-item{{ (Request::is('about/nextgen-pet/science-and-engineering-practices') ? ' active' : '') }}"
                   href="{{ url('about/nextgen-pet/science-and-engineering-practices') }}">
                    <span>Science & Engineering Practices</span>
                </a>
                <a class="list-group-item{{ (Request::is('about/nextgen-pet/crosscutting-concepts') ? ' active' : '') }}"
                   href="{{ url('about/nextgen-pet/crosscutting-concepts') }}">
                    <span>Crosscutting Concepts</span>
                </a>
                <a class="list-group-item{{ (Request::is('about/nextgen-pet/disciplinary-core-ideas') ? ' active' : '') }}"
                   href="{{ url('about/nextgen-pet/disciplinary-core-ideas') }}">
                    <span>Disciplinary Core Ideas</span>
                </a>
            </div>
        </div>

        <a href="{{ url('about/implementation-versions') }}"
           class="list-group-item{{ (Request::is('about/implementation-versions')) ? ' active' : '' }}">
            <span>Implementation Versions
            </span>
        </a>
        <a href="{{ url('about/development-staff') }}"
           class="list-group-item{{ (Request::is('about/development-staff')) ? ' active' : '' }}">
            <span>About the Development Staff
            </span>
        </a>
        <a href="{{ url('about/faculty-online-learning') }}"
           class="d-flex justify-content-start list-group-item{{ (Request::is('about/faculty-online-learning')) ? ' active' : '' }}">
            <span>
                Faculty Online Learning Community for NGP
            </span>
        </a>
    </div>
</div>