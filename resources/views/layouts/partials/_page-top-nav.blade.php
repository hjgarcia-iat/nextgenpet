<nav class="navbar navbar-dark bg-dark d-block d-md-none">
    <div class="container">
        <button type="button" class="navbar-toggler site-menu-toggle" href="#off-canvas">
            <span class="fa fa-navicon"></span>
        </button>
    </div>
</nav>

<section class="top-bar d-none d-md-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 d-none d-md-flex justify-content-md-end align-items-md-center">
                <nav class="top-bar-navigation">
                    <ul class="list-unstyled list-inline d-flex">
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a target="_blank" href="http://shop.iat.com">Shop</a></li>
                        <li><a href="tel:646-502-5231">646-502-5231</a></li>
                        @if(auth()->check())
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{ route('my-account') }}">My Account</a>
                                    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                       href="{{ route('login.destroy') }}">Logout
                                    </a>
                                    <form id="logout-form"
                                          action="{{ route('login.destroy') }}"
                                          method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        @else
                            <li><a href="{{ route('login.create') }}">Login/Register</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>