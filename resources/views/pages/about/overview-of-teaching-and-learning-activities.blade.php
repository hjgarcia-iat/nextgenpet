@extends('layouts.two-column')

@section('pageTitle')
    | Overview of Teaching &amp; Learning Activities
    @stop
@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')
    
    <section class="html-content">
        <h3>Overview of Teaching &amp; Learning Activities</h3>
        <p>
        Teaching and Learning activities help Next Gen PET students make explicit connections between their own learning; the learning and teaching of children in elementary school; and the core ideas, science and engineering practices, and crosscutting concepts of the NGSS. Each content module includes one or more Teaching and Learning activity (both in-class and extension) aligned with the module’s content. More detail on their structure, and a list of the activities, is included below. The first few Teaching and Learning activities are intended to introduce this part of the curricula to students; they are not aligned with any specific content module.
        </p>
        <p>
        The Teaching and Learning activities can be used in university science courses for future teachers, science methods courses, or workshops for in-service teachers. A university science course could include the Teaching and Learning activities throughout the course in conjunction with the content modules. In education courses for future teachers or workshops for in-service teachers, the Teaching and Learning activities can be used alone or in conjunction with a subset of the content lessons. For example, an instructor may want to engage his or her students in focused deep learning of a specific content area as part of a methods course, allowing his or her students to experience learning in the way expected by the NGSS. In that case, a productive scenario would be to choose one of the content units or modules (e.g., the Magnetism unit) and do all of the content activities and the associated Teaching and Learning activities.
        </p>
        <p>
        Another option is to complete only the teaching and learning activities across multiple units. Because the cluster of Teaching and Learning activities associated with each content module focuses on specific practices or on the crosscutting concepts, this second option would give pre-service and in-service teachers targeted learning experiences with multiple practices. While the Teaching and Learning activities build on the same physical science content as the content modules, they do not depend on having done the content activities. Faculty using the Teaching and Learning activities without the associated content units may want to review the physical science content. The Teaching and Learning activities challenge Next Gen PET students to identify how children are engaging in scientific practices through watching videos
        </p>
        <p>
        of children engaging in science and engineering lessons.1 The longer extensions provide opportunities for students to practice identifying children's’ productive science ideas through interviews, and practice engaging children in the science and engineering practices.
        </p>
        <p>
        Within each module, the Teaching and Learning activities are organized into a cluster of coherent in-class and out-of-class extension activities. Each content cluster includes video analysis of teachers engaging children in NGSS-aligned instruction related to the corresponding content module; focused exploration of one practice and one crosscutting concept; and an extended out-of-class activity to interview children about their ideas about the content area or lead them through a small learning activity. These extended out-of-class activities are scaffolded so that undergraduates’ experiences become more complex over time. For example, in the Magnetism and Static Electricity Module, the Teaching and Learning activity is a guided interview about magnetism. Next Gen PET students are guided to elicit children’s ideas about magnetism through provided questions. (It is assumed that students can interview a child who is a relative, child of a friend, or participant at a fieldwork site.) Later in the curriculum, during the Interactions and Forces Module, an extended out-of-class activity guides undergraduates through the teaching of a small investigation related to forces, allowing them to gain experience facilitating instruction through the practices of the NGSS.
        </p>
        <h3>
            Teaching and Learning Module contents
        </h3>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Module</th>
                        <th>Lesson</th>
                        <th>Topic</th>
                        <th>Sequence</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-md-1">Any</td>
                        <td class="col-md-2">L1</td>
                        <td>Teaching and Learning Science</td>
                        <td>First activity</td>
                    </tr>
                    <tr>
                        <td>Any</td>
                        <td>TL Ext A</td>
                        <td>Reading: The Next Generation Science Standards and Next Gen PET</td>
                        <td>Before/with L1 (or first TL lesson done)</td>
                    </tr>
                    <tr>
                        <td>Any</td>
                        <td>TL Ext B</td>
                        <td>Reading: Engineering and the Next Generation Science Standards</td>
                        <td>Before/with L1 (or first TL lesson done)</td>
                    </tr>
                    <tr>
                        <td>Any</td>
                        <td>TL Ext C</td>
                        <td>Conducting Interviews with Children</td>
                        <td>Before/with Ext D or other “interview” extension</td>
                    </tr>
                    <tr>
                        <td>MSE</td>
                        <td>TL Ext D*</td>
                        <td>Interviewing Children about Magnetism</td>
                        <td>Before L2</td>
                    </tr>
                    <tr>
                        <td>IE</td>
                        <td>TL Ext E</td>
                        <td>Online</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>IE</td>
                        <td>TL Ext F</td>
                        <td>Questions, Problems, and Data – Preparation for Lesson 3</td>
                        <td>Before L3</td>
                    </tr>
                    <tr>
                        <td>IE</td>
                        <td>L3</td>
                        <td>Energy and data (NGSS practice 4)</td>
                        <td>Before Ext G</td>
                    </tr>
                    <tr>
                        <td>IE</td>
                        <td>TL Ext G*</td>
                        <td>Energy, Evidence, and Engaging children data analysis</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>IE</td>
                        <td>L4</td>
                        <td>Data, evidence, and arguments (NGSS practice 6)</td>
                        <td>After Ext G</td>
                    </tr>
                    <tr>
                        <td>IF</td>
                        <td>TL Ext H</td>
                        <td>Facilitating Investigations - Prep for Lesson 5</td>
                        <td>Before L5</td>
                    </tr>
                    <tr>
                        <td>IF</td>
                        <td>L5</td>
                        <td>Questions and Problems (NGSS practice 1)</td>
                        <td>After Ext H</td>
                    </tr>
                    <tr>
                        <td>IF</td>
                        <td>TL Ext I*</td>
                        <td>Forces, Friction, and Facilitating Investigations</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>IF</td>
                        <td>TL Ext J</td>
                        <td>Common ideas about force and motion</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>IF</td>
                        <td>L6</td>
                        <td>Investigations (NGSS practice 3)</td>
                        <td>After Ext I</td>
                    </tr>
                    <tr>
                        <td>WSL</td>
                        <td>TL Ext K</td>
                        <td>Explanations and Solutions – Preparation for Lesson 7</td>
                        <td>Before L7</td>
                    </tr>
                    <tr>
                        <td>WSL</td>
                        <td>L7</td>
                        <td>Arguments from Evidence (NGSS practice 7)</td>
                        <td>Before Ext L</td>
                    </tr>
                    <tr>
                        <td>WSL</td>
                        <td>L8</td>
                        <td>Obtaining, Evaluating and Communicating Information (NGSS practice 8)</td>
                        <td>Before Ext L</td>
                    </tr>
                    <tr>
                        <td>WSL</td>
                        <td>TL Ext L*</td>
                        <td>Guiding Explanations and Solutions</td>
                        <td>After L7 and L8</td>
                    </tr>
                    <tr>
                        <td>WSL</td>
                        <td>TL Ext M</td>
                        <td>Preparation for Lesson 8</td>
                        <td>Before L8</td>
                    </tr>
                    <tr>
                        <td>MI</td>
                        <td>TL Ext N</td>
                        <td>Prep for Lesson 9</td>
                        <td>Before L9</td>
                    </tr>
                    <tr>
                        <td>MI</td>
                        <td>L9</td>
                        <td>NGSS Practice 8, putting practices together</td>
                        <td>Before Ext O</td>
                    </tr>
                    <tr>
                        <td>MI</td>
                        <td>TL Ext O</td>
                        <td>Interview Chemistry</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>MI</td>
                        <td>L10</td>
                        <td>Crosscutting Concepts</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@stop