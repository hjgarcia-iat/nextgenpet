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
                        <h3>Flexibility</h3>
                        <p>
                        <strong class="highlight">Next Gen PET’s flexibility</strong> provides many options. In either the <em>Studio-style Class</em> or <em>Lecture-style Class</em> version, instructors can choose which modules to include, whether or not to include Engineering Design activities, whether or not to include Teaching and Learning activities, and which instructional format to use. This allows instructors to tailor their course to match their content focus, meeting time, classroom setting, and students’ interests.
                        </p>
                        <p>
                        <strong class="highlight">The Studio-style Class (SC) version</strong> is best suited for lower enrollment courses that meet ~5 hours/week and take place in a lab or workroom where students can work in groups around tables and perform experiments. In the SC version, students spend the majority of their time with their group of 3-4 peers making predictions, performing experiments, drawing conclusions, answering questions in a workbook, and discussing their ideas both within their group and with the class.
                        </p>
                        <p>
                        Select modules from the SC version would also be ideal for science methods classes for credential students or professional learning workshops for in-service teachers. In either case the pre-service or in-service elementary teachers could work through a single unit (e.g. magnetism or forces), and then work through the associated engineering design activities and teaching and learning activities. Then they could build on their own learning experiences to talk about their roles as teachers and plan (or begin to plan) how they would help their students learn the NGSS.
                        </p>
                        <p>
                        <strong class="highlight">The Lecture-style Class (LC) version</strong> is best suited for courses that meet ~3 hours/week in lecture-style classrooms where students have desktops on which they can work. The LC version is suitable for courses with large enrollments, or in courses with smaller enrollments with limited meeting time and facilities. The content and pedagogical approach is similar to the SC version, but in the LC version: (1) students do experiments requiring simple materials on their desktops, but for more extensive experiments, they watch videos; (2) students respond to questions (using handheld response devices [e.g., “clickers”] or smart phones) to share ideas with the whole class; and (3) the instructor manages the class time through a set of PowerPoint slides that align with the student materials.
                        </p>
    
                    
                        <p>
                        Learn how <em>Next Gen PET</em> is Research-Based,
                        <a href="{{ url('about/research-based') }}">click here</a>
                        </p>
                        <p>
                        Get back to main page,
                        <a href="{{ url('/') }}">click here</a>
                        </p>
                        
                    </section>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>