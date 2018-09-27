<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle"
       href="#"
       id="aboutLinks"
       data-toggle="dropdown"
       aria-haspopup="true"
       aria-expanded="false">
        Home
    </a>
    <div class="dropdown-menu{{ (Request::is('/') or Request::is('about/*') or Request::is('workshops')) ? ' show shown' : '' }}"
         aria-labelledby="aboutLinks">

        <a class="dropdown-item{{ (Request::is('/') or Request::is('about/flexibility') or Request::is('about/research-based')) ? ' active' : '' }}"
           href="{{ url('/') }}">About
        </a>

        <a class="dropdown-item{{ (Request::is('about/module-and-units')) ? ' active' : '' }}"
           href="{{ url('about/module-and-units') }}">Modules &amp; Units
        </a>

        <a href="{{ url('about/overview-of-extensions') }}"
           class="dropdown-item{{ (Request::is('about/overview-of-extensions')) ? ' active' : '' }}">
            Overview of Extensions (Homework)
        </a>

        <a href="{{ url('about/overview-of-teaching-and-learning-activities') }}"
           class="dropdown-item{{ (Request::is('about/overview-of-teaching-and-learning-activities')) ? ' active' : '' }}">
            <span>Overview of Teaching &amp; Learning Activities
            </span>
        </a>

        <a href="{{ url('about/overview-of-pcim') }}"
           class="dropdown-item{{ (Request::is('about/overview-of-pcim')) ? ' active' : '' }}">
            <span>Overview of Plannig & Conducting Investigations Materials</span>
        </a>

        <a href="{{ url('about/engineering-design-activities') }}"
           class="dropdown-item{{ (Request::is('about/engineering-design-activities')) ? ' active' : '' }}">
            <span>Engineering Design Activities
            </span>
        </a>
        <a href="{{ url('about/ngss-and-next-gen-pet') }}"
           class="dropdown-item{{ (Request::is('about/ngss-and-next-gen-pet')) ? ' active' : '' }}">
            <span>NGSS &amp; Next Gen PET
            </span>
        </a>
        <a href="{{ url('about/implementation-versions') }}"
           class="dropdown-item{{ (Request::is('about/implementation-versions')) ? ' active' : '' }}">
            <span>Implementation Versions
            </span>
        </a>
        {{--<a href="{{ url('workshops') }}"--}}
           {{--class="dropdown-item{{ (Request::is('workshops')) ? ' active' : '' }}">--}}
            {{--<span>Workshops for Faculties &amp; PD Providers--}}
            {{--</span>--}}
        {{--</a>--}}
        <a href="{{ url('about/development-staff') }}"
           class="dropdown-item{{ (Request::is('about/development-staff')) ? ' active' : '' }}">
            <span>About the Development Staff
            </span>
        </a>
        <a href="{{ url('about/faculty-online-learning') }}"
           class="dropdown-item{{ (Request::is('about/faculty-online-learning')) ? ' active' : '' }}">
            <span>
                Faculty Online Learning Community for NGP
            </span>
        </a>
    </div>
</li>