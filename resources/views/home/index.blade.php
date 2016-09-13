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
            <section class="media-block">
                <div class="row">
            
                    <div class="col-md-12">
                        <h2>About</h2>
                    </div>
                    <div class="col-md-2 visible-lg visible-md">
                        <img src="{{ asset('img/cover.jpg') }}" alt="NextGEN PET"
                             class="img-responsive img-thumbnail">
                    </div>
                    <div class="col-xs-12 col-md-10">
                        <p class="lead">Next Gen PET is intended primarily for university courses in physics or physical science for prospective elementary teachers. There is sufficient material for a one-semester (quarter) course or a two-semester (two quarter) sequence. Next Gen PET is also appropriate for general education courses on conceptual physics or physical science, science methods courses, or workshops for inservice teachers. Next Gen PET materials are flexible and modular, and instructors can use them in a variety of ways, depending on audience, time, and learning objectives.</p>
                
                        <a href="https://petcyberpd.iat.com/introduction/General_Information/Overview_of_Next_Gen_PET.pdf"
                           target="_blank" class="btn btn-primary">Learn More</a>
                    </div>
        
        
                </div>
            </section>
            <hr>
            <section class="media-block">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Overview</h2>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Modules_&_Units.pdf"
                           target="_blank">
                            <img src="{{ asset('img/modules-and-units.jpg') }}" alt="NextGEN PET"
                                 class="img-responsive img-thumbnail center-block">
                        </a>
                        <h4 class="text-center">
                            <a target="_blank"
                               href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Modules_&_Units.pdf">Modules &amp; Units</a>
                        </h4>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Learning_Objectives.pdf"
                           target="_blank"><img src="{{ asset('img/learning-objectives.jpg') }}"
                                                alt="NextGEN PET"
                                                class="img-responsive img-thumbnail center-block"></a>
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/Curriculum/Learning_Objectives.pdf"
                               target="_blank">Learning Objectives</a>
                        </h4>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Extensions.pdf"
                           target="_blank">
                            <img src="{{ asset('img/extensions.jpg') }}" alt="NextGEN PET"
                                 class="img-responsive img-thumbnail center-block">
                        </a>
                
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Extensions.pdf"
                               target="_blank">
                                Extensions (Homework)
                            </a>
                        </h4>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Teaching_&_Learning_Activities.pdf"
                           target="_blank">
                            <img src="{{ asset('img/teacher-and-learning-activities.jpg') }}" alt="NextGEN PET"
                                 class="img-responsive img-thumbnail center-block">
                        </a>
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Teaching_&_Learning_Activities.pdf"
                               target="_blank">Teaching &amp; Learning Activities</a>
                        </h4>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Engineering_Design_Activities.pdf"
                           target="_blank">
                            <img src="{{ asset('img/engineering-design-activities.jpg') }}" alt="NextGEN PET"
                                 class="img-responsive img-thumbnail center-block">
                        </a>
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/Curriculum/Overview_of_Engineering_Design_Activities.pdf"
                               target="_blank">Engineering Design Activities</a>
                        </h4>
                    </div>
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/General_Information/NGSS_&_Next_Gen_PET.pdf"
                           target="_blank">
                            <img src="{{ asset('img/ngss-and-next-gen-pet.jpg') }}" alt="NextGEN PET"
                                 class="img-responsive img-thumbnail center-block">
                        </a>
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/General_Information/NGSS_&_Next_Gen_PET.pdf"
                               target="_blank">NGSS &amp; Next Gen PET</a>
                        </h4>
                    </div>
                    
                </div>
        
                <div class="row">
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/Pedagogy/Two_Versions_of_Next_Gen_PET.pdf"
                           target="_blank"><img src="{{ asset('img/learning-objectives.jpg') }}"
                                                alt="NextGEN PET"
                                                class="img-responsive img-thumbnail center-block"></a>
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/Pedagogy/Two_Versions_of_Next_Gen_PET.pdf"
                               target="_blank">Implementation Versions</a>
                        </h4>
                    </div>
            
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/General_Information/Workshops_for_Faculty_&_PD_Providers.pdf"
                           target="_blank"><img src="{{ asset('img/learning-objectives.jpg') }}"
                                                alt="NextGEN PET"
                                                class="img-responsive img-thumbnail center-block"></a>
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/General_Information/Workshops_for_Faculty_&_PD_Providers.pdf"
                               target="_blank">Workshop for Faculties and PD Providers</a>
                        </h4>
                    </div>
            
                    <div class="col-xs-6 col-md-2">
                        <a href="https://petcyberpd.iat.com/introduction/General_Information/About_the_Development_Staff.pdf"
                           target="_blank"><img src="{{ asset('img/learning-objectives.jpg') }}"
                                                alt="NextGEN PET"
                                                class="img-responsive img-thumbnail center-block"></a>
                        <h4 class="text-center">
                            <a href="https://petcyberpd.iat.com/introduction/General_Information/About_the_Development_Staff.pdf"
                               target="_blank">About the Development Staff</a>
                        </h4>
                    </div>
                </div>
            </section>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
