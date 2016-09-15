<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        
        @include('layouts.partials.mobile_nav')
        
        @include('layouts.partials.header')
        
        @include('layouts.partials.title')
        
        
        @include('home._slider')
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Overview</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 visible-md visible-lg">
                    @include('home._sidebar')
                </div>
                <div class="col-md-8">
                    <section class="html-content">
                        <h3>Workshops</h3>
                        <p>
                        The following Next Gen PET workshops are currently scheduled.
                        </p>
                        <p>
                        2017 Physics Teacher Education Coalition (PhysTEC) Conference, Atlanta, GA February 17-18, 2017. A half-day workshop on Next Gen PET will be offered at the pre-conference session from 1:00 pm– 5:00 pm, February 16, 2017.
                        </p>
                        <p>
                        For faculty members from the California State University system, the Chancellor’s Office is sponsoring two full-day Next Gen PET workshops: July 15, 2017 at CSU Sacramento and September 16, 2017 at the Chancellor’s Office in Long Beach, CA. Travel support for faculty attending either workshop will be provided by each institution’s MSTI funds. Contact fgoldberg@mail.sdsu.edu for more information
                        </p>
                    </section>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
