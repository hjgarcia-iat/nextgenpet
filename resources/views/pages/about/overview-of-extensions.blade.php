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
                        <h3>Overview of Extensions (Homework)</h3>
                        <p>
                        <em>Next Gen PET</em> includes extensions (homework) to support the in-class activities. Extensions are computer-based and include narrative text; simulations; videos of demonstrations, experiments or simulations; and questions with feedback. Most extensions provide practice using the ideas introduced in class, and a few explore new, but related, ideas. Most students will need about 30 minutes to conscientiously work through extensions of average length
                        </p>
                        <p>
                        Extensions are available in Adobe Flash or HTML5 and can be accessed online. Links to the extensions can be included in the course webpage, typically as part of a learning management system (LMS) such as Blackboard or Moodle. Questions within the extensions provide feedback to students but are not graded. Several additional multiple-choice questions are provided for each extension; instructors can use these questions to build an online quiz in their LMS. Most LMSs can be set to automatically score, record, and give feedback.
                        </p>
                    </section>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
