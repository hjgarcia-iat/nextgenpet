<header class="site-header">
    <section class="top-row visible-md visible-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <section class="logo">
                        <a href="/" class="full"></a>
                    </section>
                </div>
                <div class="col-md-8">
                    <section class="social-bar hidden-xs hidden-sm pull-right">
                        <a href="http://blog.iat.com" target="_blank">
                            <i class="fa fa-comment"></i>
                        </a>
                        <a href="https://www.facebook.com/IATlearning" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="https://twitter.com/ItsAboutTimeEdu" target="_blank">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="http://www.linkedin.com/company/it's-about-time-learning" target="_blank">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="http://www.youtube.com/user/itsaboutimeedu" target="_blank">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="http://instagram.com/itsabouttimeedu"
                           target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </section>
                </div>
            </div>
        </div>
    </section>
    
    <section id="page-navbar">
        <nav class="navbar navbar-default nav-justified navbar-static">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu">
                        <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        
                        <li class="{{ (Request::is('studio-style-class')  or Request::is('studio-style-class/*') ) ? 'active' : '' }}">
                            <a href="{{ url('studio-style-class') }}">Studio Style Class</a>
                        </li>
                        <li class="{{ (Request::is('lecture-style-class') or Request::is('lecture-style-class/*')) ? 'active' : '' }}">
                            <a href="{{ url('lecture-style-class') }}">Lecture Style Class</a>
                        </li>
                        {{--<li class="{{ Request::is('resources') ? 'active' : '' }}">--}}
                            {{--<a href="{{ url('resources') }}">Resources</a>--}}
                        {{--</li>--}}
                        <li class="{{ Request::is('help') ? 'active' : '' }}">
                            <a href="{{ url('help') }}">Help</a>
                        </li>
                        <li class="{{ Request::is('login') ? 'active' : '' }}">
                            <a href="https://petcyberpd.iat.com/login/">Login</a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </section>

</header>