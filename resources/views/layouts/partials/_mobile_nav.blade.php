<nav class="navbar navbar-light hidden-md-up navbar-mobile-toggle">
    <div class="container">
        <button type="button"
                class="navbar-toggler offcanvas-toggle"
                data-toggle="offcanvas"
                data-target="#js-bootstrap-offcanvas">
            <span class="fa fa-navicon"></span>
        </button>
    </div>
</nav>
<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm hidden-md-up navbar-offcanvas navbar-offcanvas-touch navbar-mobile"
     id="js-bootstrap-offcanvas">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link" id="mobileCloseBtn">
                    Close Navigation
                    <i class="fa fa-times-circle"></i>
                </a>
            </li>
            @include('layouts.partials.mobile_links.home-links')
            @include('layouts.partials.mobile_links.studio-class-links')
            @include('layouts.partials.mobile_links.lecture-class-links')
            @include('layouts.partials.mobile_links.general-links')
        </ul>
    </div>
</nav>