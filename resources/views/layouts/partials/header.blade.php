@include('layouts.partials._userbar')
<header class="site-header">
    <section class="top-row">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <section class="logo text-sm-center text-xs-center">
                        <a href="/"
                           class="full mx-auto"></a>
                    </section>
                </div>
                <div class="col-md-8">
                    <div class="row justify-content-md-end">
                        <div class="col-sm-12 col-md-7 col-lg-5">
                            <section class="social-bar d-xs-flex d-sm-flex justify-content-xs-between justify-content-sm-between">
                                <div>
                                    <a href="http://blog.iat.com"
                                       target="_blank">
                                        <i class="fa fa-comment"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://www.facebook.com/IATlearning"
                                       target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="https://twitter.com/ItsAboutTimeEdu"
                                       target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="http://www.linkedin.com/company/it's-about-time-learning"
                                       target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="http://www.youtube.com/user/itsaboutimeedu"
                                       target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="http://instagram.com/itsabouttimeedu"
                                       target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    @include('layouts.partials._mobile_nav')
    @include('layouts.partials._desktop_nav')
</header>