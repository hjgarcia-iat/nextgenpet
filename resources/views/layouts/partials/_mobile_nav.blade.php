<nav class="navbar navbar-light d-sm-block d-md-none">
    <div class="container">
        <button type="button"
                class="navbar-toggler offcanvas-toggle"
                data-toggle="offcanvas"
                data-target="#js-bootstrap-offcanvas">
            <span class="fa fa-navicon"></span>
        </button>
    </div>
</nav>
<nav class="navbar navbar-inverse bg-inverse navbar-toggleable-sm d-none navbar-offcanvas navbar-offcanvas-touch navbar-mobile"
     id="js-bootstrap-offcanvas">
    <div class="container">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="" class="nav-link" id="mobileCloseBtn">
                    Close Navigation
                    <i class="fa fa-times-circle"></i>
                </a>
            </li>
            @include('layouts.partials.mobile-links.home-links')
            @include('layouts.partials.mobile-links.studio-class-links')
            @include('layouts.partials.mobile-links.lecture-class-links')
            @include('layouts.partials.mobile-links.general-links')
        </ul>
    </div>
</nav>