<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.header')
    
        @include('layouts.partials.title')
        
        
        @include('home._slider')
        
        <div class="container">
            <div class="col-md-12">
                <section class="media-block">
                    
                    <h2>News</h2>
                    
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-responsive img-thumbnail" src="{{ asset('img/news-icon.jpg') }}"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">2017 Physics Teacher Education Coalition (PhysTEC) Conference, Atlanta, GA February 17-18, 2017</h4>
                                <p>A half-day workshop on Next Gen PET will be offered at the pre-conference session from 1:00 pm– 5:00 pm, February 16, 2017.</p>
                            </div>
                        </li>
                        <li class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object img-responsive img-thumbnail" src="{{ asset('img/news-icon.jpg') }}"
                                         alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Next Gen PET workshops</h4>
                                <p>For faculty members from the California State University system, the Chancellor’s Office is sponsoring two full-day Next Gen PET workshops: July 15, 2017 at CSU Sacramento and September 16, 2017 at the Chancellor’s Office in Long Beach, CA. Travel support for faculty attending either workshop will be provided by each institution’s MSTI funds. Contact
                                    <a href="mailto:fgoldberg@mail.sdsu.edu">fgoldberg@mail.sdsu.edu</a> for more information.</p>
                                
                            </div>
                        </li>
                    </ul>
                
                
                </section>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
