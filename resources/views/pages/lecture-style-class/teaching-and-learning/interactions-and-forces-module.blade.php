@extends('layouts.two-column')

@section('pageTitle')
    Lecture Style Class
@stop
@section('sidebar')
    @include('pages.lecture-style-class._sidebar')
@stop
@section('banner')
    @include('pages.lecture-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">

        <h3>Teaching &amp; Learning &mdash; Module IF Cluster</h3>
        <p>
            Click on the lesson titles below to view or download the lessons in PDF format. The extensions below can be
            found on the <a href="http://nextgenpet.sdsu.edu/extensions/index_tl.html" target="_blank">Teaching &amp;
                Learning Extensions page</a>
        </p>
        <p>Each Teaching and Learning lesson and extension in the Module IF (Interactions and Forces) cluster is listed
            below, along with a brief summary, the NGSS alignment, estimated class time needed (for lessons) and the
            format (for extensions), and the pre-requisite TL activities (if any). Below each description is a
            suggestion for when you should conduct the in-class lesson or assign the extension. There is a list of the
            NGSS science and engineering practices and the crosscutting concepts following the table.</p>
        <p>
            Note that Extension I is a group project involving working with children. This project typically takes 2-3
            weeks from initial assignment to the time the final individual and group reports are turned in. Although the
            physical science content (forces on a parachute) is associated with Unit CF, by the time students are done
            with the project, the class will (probably) be on a different unit. Thus, the follow-up Lesson 6, where
            students reflect on their interactions with the children they interviewed, will not be connected to your
            current unit. </p>

        <table class="table table-bordered table-hover table-sm table-responsive">
            <thead>
            <tr>
                <th></th>
                <th>Title</th>
                <th>NPG Modules</th>
                <th>NGSS Practices<sup>*</sup></th>
                <th>NGSS CC<sup>#</sup></th>
                <th>Time or Format</th>
                <th>Pre-req</th>
            </tr>
            </thead>
            <tbody>
            <tr class="highlight">
                <td>Ext H</td>
                <td>Facilitating Investigations - Prep for Lesson 5</td>
                <td>IF</td>
                <td>3</td>
                <td></td>
                <td>Paper</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    Next Gen PET students analyze a video in which children conduct experiments to assess how three
                    variables affect parachute speed, paying attention to the student and teacher actions. This is
                    reflected on in TL L5 and Next Gen PET students facilitate a similar lesson in Ext I. This extension
                    also includes the table of grade level competencies for carrying out investigations.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>Assign</strong>: Before TL L5. Either after or concurrently with Unit CF Ext D (assigned
                    after UCF L3).
                </td>
            </tr>
            <tr class="highlight">
                <td>L5</td>
                <td class="cell-link">
                    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/lecture/Module_IF_Cluster/TL_Lesson_5.pdf" target="_blank">Planning
                        and Carrying Out Investigations (NGSS Practice 3)</a></td>
                <td>IF</td>
                <td>3</td>
                <td></td>
                <td>15</td>
                <td>Ext H</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    Introduces students to NGSS Practice 3 (planning and carrying out investigations). Next Gen PET
                    students reflect on a video they watched in Ext H where children tested three variables related to
                    the design of a parachute. They identify how the children engaged in the practice. They also
                    consider their role (as students) and their instructor’s role in conducting investigations in Next
                    Gen PET. This activity also models a lesson they will teach in Ext I.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>In class</strong>: After students complete Unit CF Ext D (which is assigned after UCF L3)
                    and TL Ext H.
                </td>
            </tr>
            <tr class="highlight">
                <td>Ext I</td>
                <td>Forces, Friction, and Facilitating Investigations</td>
                <td>IF</td>
                <td>1,3,4,6</td>
                <td></td>
                <td>Child interview</td>
                <td>Ext C, L5</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    Next Gen PET students interview children about their ideas about designing investigations in the
                    context of a challenge to design a better parachute. The Next Gen PET students guide the children in
                    developing testable questions and then on deciding how to test their question. They collaborate with
                    group members to write a report synthesizing their interview results.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>Assign</strong>: After TL Ext C, TL L5, Unit CF L4 and Unit FM L6 (focusing on the
                    gravitational force).
                </td>
            </tr>
            <tr class="highlight">
                <td>Ext J</td>
                <td>Common Ideas about Force and Motion</td>
                <td>IF</td>
                <td></td>
                <td></td>
                <td>Reading</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    Short reading about common ideas that children and adults have about force and motion.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>Assign</strong>: After Unit CF L2.
                </td>
            </tr>
            <tr class="highlight">
                <td>L6</td>
                <td class="cell-link">
                    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/lecture/Module_IF_Cluster/TL_Lesson_6.pdf" target="_blank">Facilitating
                        Investigations (NGSS Practice 3)</a></td>
                <td>IF</td>
                <td>1,3,4</td>
                <td></td>
                <td>25</td>
                <td>Ext I</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    In class discussion and reflection on the interviews with children that the Next Gen PET students
                    conducted as part of Ext I. Students then look at NGSS Practices 1, 3, and 4 (asking questions,
                    planning and carrying out investigations, analyzing and interpreting data) and reflect on where
                    their own instruction in Ext I fell on the learner directed/teacher directed continuum in the
                    context of these practices. Finally, they consider how the parachute activity helped develop
                    children’s understanding of scientific content.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>In class</strong>: After students complete all reports associated with Ext I children’s
                    interview task.
                </td>
            </tr>
            </tbody>
        </table>

        <h5>
            <sup> * </sup> NGSS Science and Engineering Practices </h5>
        <ol>
            <li>
                Asking questions (for science) and defining problems (for engineering).
            </li>
            <li>
                Developing and using models.
            </li>
            <li>
                Planning and carrying out investigations.
            </li>
            <li>
                Analyzing and interpreting data.
            </li>
            <li>
                Using mathematics and computational thinking.
            </li>
            <li>
                Constructing explanations (for science) and designing solutions (for engineering).
            </li>
            <li>
                Engaging in argument from evidence.
            </li>
            <li>
                Obtaining, evaluating, and communicating
            </li>
        </ol>
        <h5>
            <sup> # </sup> NGSS Crosscutting Concepts </h5>
        <ol>
            <li>
                Patterns
            </li>
            <li>
                Cause and effect: Mechanism and explanation,
            </li>
            <li>
                Scale, proportion, and quantity,
            </li>
            <li>
                Systems and system models,
            </li>
            <li>
                Energy and matter: Flows, cycles, and conservation
            </li>
            <li>
                Structure and function, and
            </li>
            <li>
                Stability and change.
            </li>
        </ol>
    </section>
@stop