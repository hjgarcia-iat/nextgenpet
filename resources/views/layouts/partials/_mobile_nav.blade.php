<nav class="navbar navbar-inverse bg-inverse navbar-mobile h-100 align-items-start">
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