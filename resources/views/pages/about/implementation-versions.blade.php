@extends('layouts.two-column')

@section('pageTitle','Implementation Versions')

@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')

    <p>
        <em>Next Gen PET</em> is available in a <em>Studio-style</em> class version for small lab and discussion
        classroom environments of 12-36 students; and a <em>Lecture-style</em> class version for lecture-style
        classrooms. In both versions, students draw on evidence, discuss ideas, develop, test and modify models, and
        engage in practices of scientific argumentation.
    </p>
    <p>
        The <em>Studio Style</em> class (SC) version is best suited for lower enrollment courses that meet ~5 hours/week
        and take place in a lab or workroom where students can work in groups around tables and perform experiments. In
        the SC version, students spend the majority of their time with their group of 3-4 peers making predictions,
        performing experiments, drawing conclusions, answering questions in a workbook, and discussing their ideas both
        within their group and with the whole class.
    </p>
    <p>
        The <em>Lecture Style</em> class (LC) version is best suited for courses that meet ~2.5 hours/week in
        lecture-style classrooms where students have desktops on which they can work. The LC version is suitable for
        courses with large enrollments, or in courses with smaller enrollments with limited meeting time and facilities.
        The content and pedagogical approach is similar to the SC version, but in the LC version: (1) students can do
        experiments requiring simple materials on their desktops as an option, but otherwise and for more extensive
        experiments, they watch videos; (2) students respond to questions (using hand-held response devices [e.g.,
        “clickers”] or smart phones) to share ideas with the whole class; and (3) the instructor manages the class time
        through a set of PowerPoint™ slides that align with the student materials.
    </p>
    <p>If your class format involves both lecture sessions and weekly laboratory meetings in a separate room, then you
        can consider implementing a <em>hybrid version</em> of the curriculum: using lecture-style materials for the
        lectures and studio-style materials for the lab periods.
    </p>
    <p>
        The table below summarizes the differences between structural features of the two versions. To see examples of
        both versions, click on one of the following links: <strong>Developing Model of Magnetism</strong> (<a
                target="_blank"
                href="https://s3.amazonaws.com/nextgenpet/web-docs/review-activities/studio-style-class/module-mse/um-a3-student-materials.pdf">Studio
            Style</a>,

        <a target="_blank"
                href="https://s3.amazonaws.com/nextgenpet/web-docs/review-activities/lecture-style-class/module-mse/um-l3-student-materials.pdf">Lecture
            Style</a>),

        <strong>Interactions and Forces</strong>

        (<a target="_blank"
                href="https://s3.amazonaws.com/nextgenpet/web-docs/review-activities/studio-style-class/module-fm/ufm-a1-student-materials.pdf">Studio
            Style</a>,

        <a target="_blank"
                href="https://s3.amazonaws.com/nextgenpet/web-docs/review-activities/lecture-style-class/module-fm/ufm-l1-student-materials.pdf">Lecture
            Style</a>). See also the <strong>Design Principles</strong> table below that summarizes the differences in
        how each version implements the design features of the curriculum.
    </p>

    <table class="table table-bordered table-hover table-responsive">
        <thead>
        <tr>
            <th>Feature</th>
            <th>Studio-style class (SC)</th>
            <th>Lecture-style class (LC)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Meeting time</td>
            <td>~5 hrs/wk; 75 hrs/semester, typically 2.5 hour classes</td>
            <td>~2.5 hrs/wk; 38 hrs/semester, typically 75 minute classes</td>
        </tr>
        <tr>
            <td>Class activity</td>
            <td>Small group guided inquiry facilitated by instructor</td>
            <td>Instructor-led guided inquiry lessons with interactive components</td>
        </tr>
        <tr>
            <td>Student interactions</td>
            <td>Small group & whole class discussion</td>
            <td>Near neighbor discussion and electronic polling with ‘clickers’</td>
        </tr>
        <tr>
            <td>Source of evidence</td>
            <td>Hands-on experiments/ simulations in small groups/ some movies of experiments and simulations</td>
            <td>Videos of experiments and simulations; simple hands-on experiments (optional)</td>
        </tr>
        <tr>
            <td>Duration of activity</td>
            <td>90-150 min, several ideas</td>
            <td>25-75 min, several ideas</td>
        </tr>
        <tr>
            <td>Consensus</td>
            <td>End of unit</td>
            <td>End of lesson</td>
        </tr>
        <tr>
            <td>Extensions (Homework)</td>
            <td>Computer-based plus online quiz</td>
            <td>Computer-based plus online quiz</td>
        </tr>
        </tbody>
    </table>
    <p>
        The following table shows how the design principles are put into in the studio-style class and lecture-style
        class versions of <em>Next Gen PET</em>.
    </p>
    <table class="table table-bordered table-hover table-responsive">
        <thead>
        <tr>
            <th>Design Principle</th>
            <th>Studio-style class (SC)</th>
            <th>Lecture-style class (LC)</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1. Learning builds on prior knowledge.</td>
            <td>Questions within activities are designed to elicit and build on students’ initial ideas.</td>
            <td>Similar to SC.</td>
        </tr>
        <tr>
            <td>2. Learning is a complex process.</td>
            <td>Big ideas/science practices (e.g. writing explanations) developed within & across units. A variety of
                question types guide students’ thinking. Extensions (homework) are computer-based tutorials that include
                online quizzes
            </td>
            <td>Similar to SC, except students do not write their own explanations; instead they evaluate carefully
                crafted explanations for accuracy. Extensions are the same as SC.
            </td>
        </tr>
        <tr>
            <td>3. Learning is facilitated through interaction with tools.</td>
            <td>Students use hands-on materials, data acquisition tools and simulations, and answer questions on
                activity sheets.
            </td>
            <td>Students watch videos of experiments, demos and simulations, do simple hands-on activities (optional);
                answer questions with ‘clickers’ and on lesson sheets
            </td>
        </tr>
        <tr>
            <td>4. Learning is facilitated through interactions with others</td>
            <td>Students engage in small group and whole class discussions.</td>
            <td>Students discuss thinking w/ neighbors, limited sharing with whole class.</td>
        </tr>
        <tr>
            <td>5. Learning is facilitated through establishment of certain specific behavioral practices and
                expectations.
            </td>
            <td>Written prompts/instructor comments support expectations of providing evidence, active participation,
                and responsibility for learning.
            </td>
            <td>Similar to SC except the degree of participation is less and students are expected to reach consensus at
                end of each lesson.
            </td>
        </tr>
        </tbody>
    </table>

@stop