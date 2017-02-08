<div class="page-side-menu">
    <div class="panel list-group">
        <a href="{{ url('/') }}"
           class="list-group-item{{ (Request::is('/') or Request::is('about/flexibility') or Request::is('about/research-based')) ? ' active' : '' }}">
            <span>About</span>
        </a>
        <a href="{{ url('about/module-and-units') }}"
           class="list-group-item{{ (Request::is('about/module-and-units')) ? ' active' : '' }}"><span>Modules &amp; Units
        </span></a>
        
        <a href="{{ url('about/overview-of-extensions') }}"
           class="list-group-item{{ (Request::is('about/overview-of-extensions')) ? ' active' : '' }}"><span>Overview of Extensions (Homework)
        </span></a>
        <a href="{{ url('about/overview-of-teaching-and-learning-activities') }}"
           class="list-group-item{{ (Request::is('about/overview-of-teaching-and-learning-activities')) ? ' active' : '' }}"><span>Overview of Teaching &amp; Learning Activities
        </span></a>
        <a href="{{ url('about/engineering-design-activities') }}"
           class="list-group-item{{ (Request::is('about/engineering-design-activities')) ? ' active' : '' }}"><span>Engineering Design Activities
        </span></a>
        <a href="{{ url('about/ngss-and-next-gen-pet') }}"
           class="list-group-item{{ (Request::is('about/ngss-and-next-gen-pet')) ? ' active' : '' }}"><span>NGSS &amp; Next Gen PET
        </span></a>
        <a href="{{ url('about/implementation-versions') }}"
           class="list-group-item{{ (Request::is('about/implementation-versions')) ? ' active' : '' }}"><span>Implementation Versions
        </span></a>
        <a href="{{ url('workshops') }}"
           class="list-group-item{{ (Request::is('workshops')) ? ' active' : '' }}"><span>Workshops for Faculties &amp; PD Providers
        </span></a>
        <a href="{{ url('about/development-staff') }}"
           class="list-group-item{{ (Request::is('about/development-staff')) ? ' active' : '' }}"><span>About the Development Staff
        </span></a>
        <a href="{{ url('about/faculty-online-learning') }}"
           class="d-flex justify-content-start list-group-item{{ (Request::is('about/faculty-online-learning')) ? ' active' : '' }}">
            <span>
            Faculty Online Learning Community for NGP
            </span>
        </a>
    </div>
</div>