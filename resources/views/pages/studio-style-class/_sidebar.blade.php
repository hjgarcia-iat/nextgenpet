<div class="page-side-menu sps hidden-sm-down"
     id="main-sidebar-menu">
    <div class="list-group">
        @include('pages.studio-style-class.partials._sidebar_top_links')
        @include('pages.studio-style-class.partials._sidebar_content_modules_descriptions_dp')




{{--        @include('pages.studio-style-class.partials._sidebar_student_materials_dp')--}}
        @include('pages.studio-style-class.partials._sidebar_t_and_l_materials_descriptions_dp')

        <div class="card">
            <a href="#"
               class="list-group-item sublink collapsed"
               data-toggle="collapse"
               data-target="#pci-dropdown"
               data-parent="#main-sidebar-menu">
                <span>Planning &amp; Conducting Investigations Materials </span>
            </a>
            <div id="pci-dropdown"
                 class="sublinks collapse{{ ((Request::is('studio-style-class/pci-activities-and-extensions') or Request::is('studio-style-class/pci-table-of-contents')) ? ' show' : '') }}">

                <a class="list-group-item {{ (Request::is('studio-style-class/pci-table-of-contents') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/pci-table-of-contents') }}">
                    <span>Table of Contents</span>
                </a>

                <a class="list-group-item {{ (Request::is('studio-style-class/pci-activities-and-extensions') ? ' active' : '') }}"
                   href="{{ url('studio-style-class/pci-activities-and-extensions') }}">
                    <span>PCI Activities & Extensions</span>
                </a>
            </div>
        </div>


        @include('pages.studio-style-class.partials._sidebar_bottom_links')
        @include('pages.studio-style-class.partials._instructor_links')
    </div>
</div>
