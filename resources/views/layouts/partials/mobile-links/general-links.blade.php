<li class="nav-item">
    <a class="nav-link"
       href="#contact">Contact
    </a>
</li>
<li class="nav-item">
    <a class="nav-link"
       href="http://shop.iat.com" target="_blank">Shop
    </a>
</li>
@if(auth()->check())

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle"
           href="#"
           id="accountLinks"
           data-toggle="dropdown"
           aria-haspopup="true"
           aria-expanded="false">
            {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu{{ (Request::is('/my-account')) ? ' show shown' : '' }}"
             aria-labelledby="accountLinks">

            <a class="dropdown-item{{ (Request::is('/my-account')) ? ' active' : '' }}"
               href="{{ route('my-account') }}">My Account
            </a>
            <a class="dropdown-item"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
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
    <li class="nav-item {{ (Request::is('login')) ? 'active' : '' }}">
        <a class="nav-link"
           href="{{ route('login.create') }}">Login
        </a>
    </li>
@endif
