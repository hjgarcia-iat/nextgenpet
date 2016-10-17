<div id="menu">
    <div class="panel list-group">
        <a href="{{ url('/') }}"
           class="list-group-item{{ (Request::is('/') or Request::is('about/flexibility') or Request::is('about/research-based')) ? ' active' : '' }}">
            About
        </a>
        <a href="{{ url('about/module-and-units') }}"
           class="list-group-item{{ (Request::is('about/module-and-units')) ? ' active' : '' }}">Modules &amp; Units
        </a>
        
        <a href="{{ url('about/overview-of-extensions') }}"
           class="list-group-item{{ (Request::is('about/overview-of-extensions')) ? ' active' : '' }}">Overview of Extensions (Homework)
        </a>
        <a href="{{ url('about/overview-of-teaching-and-learning-activities') }}"
           class="list-group-item{{ (Request::is('about/overview-of-teaching-and-learning-activities')) ? ' active' : '' }}">Overview of Teaching &amp; Learning Activities
        </a>
        <a href="{{ url('about/engineering-design-activities') }}"
           class="list-group-item{{ (Request::is('about/engineering-design-activities')) ? ' active' : '' }}">Engineering Design Activities
        </a>
        <a href="{{ url('about/ngss-and-next-gen-pet') }}"
           class="list-group-item{{ (Request::is('about/ngss-and-next-gen-pet')) ? ' active' : '' }}">NGSS &amp; Next Gen PET
        </a>
        <a href="{{ url('about/implementation-versions') }}"
           class="list-group-item{{ (Request::is('about/implementation-versions')) ? ' active' : '' }}">Implementation Versions
        </a>
        <a href="{{ url('workshops') }}" class="list-group-item{{ (Request::is('workshops')) ? ' active' : '' }}">Workshops for Faculties &amp; PD Providers
        </a>
        <a href="{{ url('about/development-staff') }}"
           class="list-group-item{{ (Request::is('about/development-staff')) ? ' active' : '' }}">About the Development Staff
        </a>
        <a href="{{ url('about/faculty-online-learning') }}" class="list-group-item{{ (Request::is('about/faculty-online-learning')) ? ' active' : '' }}">
            Faculty Online Learning Community for NGP
        </a>
    </div>
</div>