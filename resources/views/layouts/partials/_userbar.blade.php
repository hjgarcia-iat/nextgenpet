@if(auth()->check())
    <nav class="navbar navbar-dark navbar-toggleable-sm hidden-sm-down user-bar">
        <ul class="navbar-nav mr-auto">
        
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item {{ Request::is('my-account') ? 'active' : '' }}">
                <a class="nav-link"
                   href="{{ route('my-account') }}">
                    <i class="fa fa-cogs"></i>
                    My Account
                </a>
            </li>
    
            <li class="nav-item">
                <a href="{{ url('/logout') }}"
                   class="nav-link"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i>
                    Logout
                </a>
                <form id="logout-form"
                      action="{{ url('/logout') }}"
                      method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </nav>
@endif<?php

