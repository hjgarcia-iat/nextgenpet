@extends('layouts.two-column')
@section('pageTitle','Lecture Style Class')
@section('sidebar')
    @include('pages.lecture-style-class._sidebar')
@stop
@section('banner')
    @include('pages.lecture-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Teaching &amp; Learning &mdash; Module MI Cluster</h3>
        <p>
            Click on the lesson titles below to view or download the lessons in PDF format. The extensions below can be
            found on the <a href="http://nextgenpet.sdsu.edu/extensions/index_tl.html" target="_blank">Teaching &amp;
                Learning Extensions page</a>
        </p>
        <p>
            Each Teaching and Learning lesson and extension in the Module MI (Matter and Interactions) cluster is listed
            below, along with a brief summary, the NGSS alignment, estimated class time needed (for lessons) and the
            format (for extensions), and the pre-requisite TL activities (if any). Below each description is a
            suggestion for when you should conduct the in-class lesson or assign the extension. There is a list of the
            NGSS science and engineering practices and the crosscutting concepts following the table. </p>
        <p>
            Note that Extension O is a group project involving working with children. This project typically takes 2-3
            weeks from initial assignment to the time the final individual and group reports are turned in. Although the
            physical science content (physical changes of matter) is associated with Unit PC, by the time students are
            done with the project, the class will (probably) be on a different unit. Thus, the follow-up Lesson 11,
            where students reflect on their interactions with the children they interviewed, will not be connected to
            your current unit. </p>

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
                <td>Ext N</td>
                <td>Obtaining, Evaluating, and Communicating Information: Prep for Lesson 10</td>
                <td>MI</td>
                <td>8</td>
                <td></td>
                <td>Paper</td>
                <td>-</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    This extension includes a video analysis of videos of elementary school children deciding on
                    criteria for good quality play dough and communicating ideas about how to make play dough. It also
                    introduces Practice 8, obtaining, evaluating and communicating information.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>Assign</strong>: After Unit PC L4, before TL L10.
                </td>
            </tr>
            <tr class="highlight">
                <td>L10</td>
                <td class="cell-link">
                    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/lecture/Module_MI_Cluster/TL_Lesson_10.pdf" target="_blank">Obtaining,
                        Evaluating, and Communicating Information (NGSS Practice 8)</a></td>
                <td>MI</td>
                <td>8</td>
                <td></td>
                <td>20 min</td>
                <td>Ext N</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    Next Gen PET students focus on NGSS Practice 8 (obtaining, evaluating, and communicating,
                    information). They reflect how they engaged in this practice in Next Gen PET and how children
                    engaged in this practice, and the ways that teachers facilitate children’s engagement in this
                    practice. This also prepares them for the lesson they will facilitate as part of Ext O.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>In class</strong>: After Unit PC L4 and TL Ext N.
                </td>
            </tr>
            <tr class="highlight">
                <td>Ext O</td>
                <td>Creating and Communicating a Process</td>
                <td>MI</td>
                <td>8</td>
                <td></td>
                <td>Child Interview</td>
                <td>Ext C, L10</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">Next Gen PET students conduct a short lesson with students where they make a
                    non-Newtonian substance using cornstarch and water (oobleck). They practice helping children
                    communicate ideas (Practice 8). They collaborate with group members to write a report synthesizing
                    their work with the children.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>Assign</strong>: After TL Ext C, TL L10 and near the end of Unit PC.
                </td>
            </tr>
            <tr class="highlight">
                <td>L11</td>
                <td class="cell-link">
                    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/lecture/Module_MI_Cluster/TL_Lesson_11.pdf" target="_blank">Creating
                        & Communicating a Process (Reflection on Oobleck Interview)</a></td>
                <td>MI</td>
                <td>8</td>
                <td></td>
                <td>20 min</td>
                <td>Ext O</td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">In class discussion and reflection on their interactions with children that the Next Gen
                    PET students conducted as part of Ext O. Next Gen PET students identify how children effectively
                    communicated their ideas.
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="6">
                    <strong>In class</strong>: After students complete all reports associated with Ext O children's
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