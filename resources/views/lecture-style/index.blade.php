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
                    <h2>Lecture Style Classes</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="menu">
                        <div class="panel list-group">
                            <a href="{{ url('lecture-style-class') }}"
                               class="list-group-item{{ (Request::is('lecture-style-class')) ? ' active' : '' }}">Pedagogy</a>
                            <a href="#" class="list-group-item">Teaching and Learning Materials</a>
                            <a href="#" class="list-group-item">Equipment and Materials</a>
                            <a href="#" class="list-group-item">Table of Contents with Time Estimates</a>
                            
                            <a href="#" class="list-group-item sublink collapsed" data-toggle="collapse"
                               data-target="#sm"
                               data-parent="#menu">Content Modules</a>
                            <div id="sm" class="sublinks collapse">
                                <a class="list-group-item">Magnetism and Static Electricity Module</a>
                                <a class="list-group-item">Interactions and Energy Module</a>
                                <a class="list-group-item">Interactions and Waves Module</a>
                                <a class="list-group-item">Waves, Sounds and Light Module</a>
                                <a class="list-group-item">Matter and Interactions Module</a>
                            </div>
                            
                            <a href="#" class="list-group-item">Student Materials (for viewing only)</a>
                            <a href="#" class="list-group-item">Extensions Index</a>
                            <a href="#" class="list-group-item">Demonstration Videos</a>
                            <a href="#" class="list-group-item">Videos</a>
                            <a href="#" class="list-group-item">Simulations</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3>Pedagogy</h3>
                    <p>The Lecture-style class (LC) version is appropriate if:</p>
                    <ul>
                        <li>Students sit in desks and do not have large tables where they can perform
                            experiments (individual, movable desks are preferred to auditorium-style
                            seating)
                        
                        </li>
                        
                        <li>
                            Enrollment is greater than 35 students (but lower enrollments are also suitable,
                            for instance if the room and meeting time requirements preclude using the SC
                            version)
                        </li>
                        <li>
                            The class meets approximately 45 hours/semester, typically in 50- or 75-minute
                            sessions
                        </li>
                    </ul>
                    <p>
                        Each LC lesson consists of three sections. First a brief <em>Purpose and Key Question(s)</em>
                        section gives the rationale for the lesson and provides the lesson'  focus. (This
                        section may include <em>Materials Needed</em> for lessons where students do experiments
                        with simple materials. The use of hands-on materials is optional, as there are videos
                        available showing each of the experiments being performed.) The second and major
                        portion is the <em>Predictions, Observations and Making Sense</em> (POM) section. The
                        questions in this section guide students through predictions, observations and
                        inferences to help them answer the key question(s). The choice of questions was
                        informed by the extensive literature on students' understanding of physical science.
                        The POM section often begins with a clicker question about a scenario to elicit
                        students' prior knowledge. Instructors can collect student responses and project the
                        results for the class to see. Occasionally, instructors may wish to ask students to
                        share their reasoning for particular choices — without judging which answer is the
                        'best.' Videos of demonstrations, experiments, or simulations (or optional hands-on
                        experiments, if they can be performed on a chair desk), typically follow and provide
                        evidence for students to consider. Students record their observations on the lesson
                        sheets and answer questions to guide their interpretations of the evidence. The POM
                        section continues with additional clicker questions (typically following discussion
                        with neighbors), videos and making sense questions. Occasional narrative text
                        and/or diagrams introduce new terms or new ways of describing the situation (e.g.,
                        diagrammatic representations). The final <em>Summarizing Questions</em> section consists of
                        one or two clicker questions designed to see if students have synthesized the main
                        ideas from the lesson. At this point, students are expected to come to consensus on
                        the appropriate scientific idea(s). Most LC lessons are intended to take 25-75 minutes
                        of class time.
                    </p>
                    
                    <p>
                        As an example of the LC lesson structure—and the way the <em>Next Gen PET</em> Design
                        Principles are incorporated—consider Lesson 1 from the Force Model Unit of the
                        Interactions and Forces Module. Lesson 1 introduces students to the force
                        description of interactions. One of the key questions is: <em>When does the force of a quick
                                                                                      push stop acting on an object?</em> The pedagogical purpose is to immediately begin
                        addressing the common idea that 'force' is something that an object carries along
                        with it and is transferred between objects when they contact each other [1-5].
                        Compared to physicists, students often ascribe a different meaning to the word
                        'force,' and often talk about the 'force of an object,' as if it were a property of the
                        object. This lesson provides students with evidence that a force is an <em>interaction</em>
                        between two objects, not something carried by an object or something associated
                        with an individual object.
                    </p>
                    
                    <p>
                        The <em>Predictions, Observations and Making Sense</em> (POM) section includes three parts;
                        Part 1 addresses the <em>Key Question</em> on brief pushes. Students first watch a movie of a
                        person giving a low-friction cart a quick push to get it moving along a track. They
                        then consider the clicker question shown in Figure 1. This question follows from
                        Design Principle 1 (<em>Learning builds on prior knowledge</em>). The choices are based on
                        students' common responses to similar, but open-ended questions in the SC version
                        of <em>Next Gen PET</em> and predecessor curricula, which suggested reasoning such as: the
                        force is applied for only a very short time, after which the cart speeds up before
                        starting to move with constant speed (choice A); the cart must speed up 'just a little' after the contact is finished (choice B); the force stops as soon as contact is lost
                        (choice C); as long as the cart is in motion (even after contact is lost) it is influenced
                        by the force of the hand, or the force is carried along as the cart moves (choice D).
                        While the clickers provide quantitative information on students' responses, the
                        instructor must interpret the results based on previous experience or knowledge of
                        the literature on students' ideas on force and motion. The instructor resources
                        provide relevant information and sample clicker response patterns.
                    </p>
                    <p class="text-center">
                        <img src="{{ asset('img/content/cq1-1.png') }}"
                             class="img-responsive img-thumbnail center-block"
                             alt="FIG. 1. First clicker question in Module IF, Unit FM, Lesson 1.">
                        <small class="text-muted">FIG. 1. First clicker question in Module IF, Unit FM, Lesson 1.</small>
                    </p>
                    <p>
                        Next, the materials include a movie of a low-friction cart being given three quick
                        pushes as it moved along a track, with the speed-time graph displayed. In the
                        corresponding SC activity, students generate the speed-time graph themselves. In
                        the LC format, it is not feasible for students to conduct the experiment themselves,
                        but including the movie supports the norm that arguments in science should be
                        based on evidence (Design Principle 5: <em>Learning is facilitated through establishment of
                                                                   norms</em>). The next clicker question asks the students to imagine what force-time graph
                        would correspond to this speed-time graph, and choose from three possible graphs
                        (see Fig. 2.). Again, the distractors are drawn from the developers' experience with
                        the SC version and other curricula, and represent typical student responses. These
                        include the idea that the force is transferred to the cart during each push, but that
                        the force slowly runs out after the push (choice C); and the idea that whenever there
                        is motion, there must be force, and that more speed means more force (choice B).
                    </p>
                    <p class="text-center">
                        <img src="{{ asset('img/content/cq1-2.png') }}"
                             class="img-responsive img-thumbnail center-block"
                             alt="FIG. 2. Second clicker question in Module IF, Unit FM, Lesson 1.">
                        <small class="text-muted">FIG. 2. Second clicker question in Module IF, Unit FM, Lesson 1.</small>
                    </p>
                    <p>
                        The materials next include a movie with the cart being given three successive
                        pushes, with both speed-time and force-time graphs being generated from motion
                        and force sensors. The class should agree that the evidence supports graph A from
                        CQ 1-2. Next students watch a simulation of object receiving brief pushes. Part 1 of
                        the POM section ends with several making sense questions to help students
                        interpret and draw conclusions from the movie and simulation. The last making
                        sense question focuses on the issue of transfer: <em>According to the evidence from the
                                                                             graphs, did the force caused by the hand continue acting on the cart after it had lost contact
                                                                             with the cart? How do you know?</em> After students discuss the questions with their
                        nearest neighbors, the instructor can call on students in the class to share their
                        answers and reasoning with the whole class.
                    </p>
                    <p>
                        Part 2 of the POM section addresses the question of whether an object being in
                        motion implies that a force is acting on it. Part 3 connects force and energy in terms
                        of what is transferred during a contact interaction. The <em>Summarizing Questions</em>
                        section begins with a clicker question specifically about transfer, shown in Figure 3.
                    </p>
                    <p class="text-center">
                        <img src="{{ asset('img/content/cq1-4.png') }}"
                             class="img-responsive img-thumbnail center-block"
                             alt="FIG. 3. First Summarizing Question in Module IF, Unit FM, Lesson 1">
                        <small class="text-muted">FIG. 3. First Summarizing Question in Module IF, Unit FM, Lesson 1</small>
                    </p>
                    <p>
                        Lesson 1 illustrates how <em>Next Gen PET</em> incorporates the Design Principles. Students' prior knowledge is elicited through the first clicker
                        question (supporting Design Principle 1), providing opportunities for students to
                        engage in discussions (supporting Design Principle 4). Videos, clickers, and the
                        student workbook are tools that facilitate learning and help structure interactions
                        (Design Principle 3). <em>Next Gen PET</em> also promotes norms (Design Principle 5) that
                        ideas should be supported by experimental evidence, that scientific ideas should
                        make sense, that students need to take an active role in learning, and that students
                        are expected to contribute ideas to group and class discussions. On a larger scale,
                        Lesson 1 is part of a unit that successively builds the complex ideas associated with
                        force and motion (Design Principle 2).
                    </p>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
