<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        @include('layouts.partials.header')
        
        @include('layouts.partials.title')
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>About</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 visible-lg visible-md">
                    <img src="{{ asset('img/cover.jpg') }}" alt="NextGEN PET" class="img-responsive img-thumbnail">
                </div>
                <div class="col-xs-12 col-md-10">
                    <p class="lead">Next Gen PET is intended primarily for university courses in physics or physical science for prospective elementary teachers. There is sufficient material for a one-semester (quarter) course or a two-semester (two quarter) sequence. Next Gen PET is also appropriate for general education courses on conceptual physics or physical science, science methods courses, or workshops for inservice teachers. Next Gen PET materials are flexible and modular, and instructors can use them in a variety of ways, depending on audience, time, and learning objectives.</p>
    
                    <a href="https://petcyberpd.iat.com/introduction/General_Information/Overview_of_Next_Gen_PET.pdf" target="_blank" class="btn btn-primary">Learn More</a>
                </div>
            </div>
    
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h2>Overview</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-2">
                    <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Modules_&_Units.pdf" target="_blank">
                        <img src="{{ asset('img/modules-and-units.jpg') }}" alt="NextGEN PET"
                             class="img-responsive img-thumbnail center-block">
                    </a>
                    <h4 class="text-center">
                        <a target="_blank" href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Modules_&_Units.pdf">Modules &amp; Units</a>
                    </h4>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Extensions.pdf" target="_blank">
                        <img src="{{ asset('img/extensions.jpg') }}" alt="NextGEN PET"
                             class="img-responsive img-thumbnail center-block">
                    </a>
                    
                    <h4 class="text-center">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Extensions.pdf" target="_blank">
                            Extensions (Homework)
                        </a>
                    </h4>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Teaching_&_Learning_Activities.pdf" target="_blank">
                        <img src="{{ asset('img/teacher-and-learning-activities.jpg') }}" alt="NextGEN PET"
                             class="img-responsive img-thumbnail center-block">
                    </a>
                    <h4 class="text-center">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Teaching_&_Learning_Activities.pdf" target="_blank">Teaching &amp; Learning Activities</a>
                    </h4>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Engineering_Design_Activities.pdf" target="_blank">
                        <img src="{{ asset('img/engineering-design-activities.jpg') }}" alt="NextGEN PET"
                             class="img-responsive img-thumbnail center-block">
                    </a>
                    <h4 class="text-center">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Engineering_Design_Activities.pdf" target="_blank">Engineering Design Activities</a>
                    </h4>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="https://petcyberpd.iat.com/introduction/General_Information/NGSS_&_Next_Gen_PET.pdf" target="_blank">
                        <img src="{{ asset('img/ngss-and-next-gen-pet.jpg') }}" alt="NextGEN PET"
                             class="img-responsive img-thumbnail center-block">
                    </a>
                    <h4 class="text-center">
                        <a href="https://petcyberpd.iat.com/introduction/General_Information/NGSS_&_Next_Gen_PET.pdf" target="_blank">NGSS &amp; NextGEN PET</a>
                    </h4>
                </div>
                <div class="col-xs-6 col-md-2">
                    <a href="https://petcyberpd.iat.com/introduction/Curriculum/Learning_Objectives.pdf" target="_blank"><img src="{{ asset('img/learning-objectives.jpg') }}" alt="NextGEN PET"
                                    class="img-responsive img-thumbnail center-block"></a>
                    <h4 class="text-center">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Learning_Objectives.pdf" target="_blank">Learning Objectives</a>
                    </h4>
                </div>
            </div>
    
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h2>Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('img/authors/3be527_029b5ba5efb7435790ec0bb8baadfd0a-mv2.jpg') }}" alt="Fred Goldberg"
                         class="img-responsive img-circle center-block img-thumbnail">
                    <h4 class="text-center">Fred Goldberg</h4>
                    <p class="text-center">
                        <small>San Diego State University</small>
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/authors/3be527_a29f8de3f123464e8723e9f8a7e8445e-mv2.jpg') }}" alt="Steve Robinson"
                         class="img-responsive img-circle center-block img-thumbnail">
                    <h4 class="text-center">Steve Robinson</h4>
                    <p class="text-center">
                        <small>Tennessee Technological University</small>
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/authors/3be527_f7e79116c0a2461b9c80f49b94988693-mv2.jpg') }}" alt="Danielle Harlow"
                         class="img-responsive img-circle center-block img-thumbnail">
                    <h4 class="text-center">Danielle Harlow</h4>
                    <p class="text-center">
                        <small>University of California, Santa Barbara</small>
                    </p>
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/authors/3be527_7fe2ca6526474fd19c7138ade349fed8-mv2.jpg') }}" alt="Michael McKean"
                         class="img-responsive img-circle center-block img-thumbnail">
                    <h4 class="text-center">Michael McKean</h4>
                    <p class="text-center">
                        <small>San Diego State University</small>
                    </p>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
