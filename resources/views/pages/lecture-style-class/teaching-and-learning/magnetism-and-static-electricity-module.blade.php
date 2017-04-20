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

        <h3>Teaching &amp; Learning &mdash; Module MSE Cluster</h3>
        <p>
            Each Teaching and Learning lesson and extension in the Module MSE (Developing Models for Magnetism and Static Electricity) cluster is listed below, along with a brief summary, the NGSS alignment, estimated class time needed (for lessons) and the format (for extensions), and the pre-requisite TL activities (if any).  Below each description is a suggestion for when you should conduct the in-class lesson or assign the extension.  There is a list of the NGSS science and engineering practices and the crosscutting concepts following the table.
        </p>
        <p>
            Note that Extension D is a group project involving the interviewing of children. This project typically takes 2-3 weeks from initial assignment to the time the final individual and group reports are turned in. Although the physical science content (magnetism) is associated with Unit M, by the time students are done with the project, the class will (probably) be on a different unit. Thus, the follow-up Lesson 2, where students reflect on their interactions with the children they interviewed, will not be connected to your current unit.
        </p>

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
                    <td>Ext D</td>
                    <td>Interviewing Children about Magnetism</td>
                    <td>MSE</td>
                    <td>2</td>
                    <td>-</td>
                    <td>Child inter-views</td>
                    <td>Ext C</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        In this extension, Next Gen PET students interview children about their ideas about magnetism. Each Next Gen PET student should interview a different child. They then work in small groups to write up a report that synthesizes information gathered from the interviews.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: After TL Ext C, Unit M L5/A5.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext E</td>
                    <td>Teaching and Learning Engineering Design </td>
                    <td>MSE/All</td>
                    <td>All</td>
                    <td></td>
                    <td>Online</td>
                    <td>L1</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        An online extension that introduces students to engineering design as described by the NGSS and to engineering design used in the Engineering is Elementary (EiE) materials. Students will be watching EiE classroom videos as part of many of the TL extensions throughout Next Gen PET curriculum. In this activity they watch two videos of children designing Mag Lev train systems.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: After TL L1 and before first engineering design lesson or activity.  In Unit M, before L6. If first ED activity is not in Units M or PEF, instructor may want to talk briefly about the law of magnetic poles and maglev trains before assigning Ext E.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>L2</td>
                    <td class="cell-link">
                        <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/lecture/Module_MSE_Cluster/TL_Lesson_2.pdf" target="_blank">Models, Magnets and Children’s Ideas (NGSS Practice 2)</a></td>
                    <td>MSE</td>
                    <td>2</td>
                    <td></td>
                    <td>25 min</td>
                    <td>Ext D</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        In class discussion and reflection on the interviews with children that the Next Gen PET students conducted as part of Ext D. Next Gen PET students also look at drawings of children’s models as a way to think about assumptions and approximation used in models. Comparing children’s ideas across multiple ages provides Next Gen PET students an opportunity to think about how ideas develop over time.  The focus is on NGSS Practice 2 (developing and using models).
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>In class</strong>: After students complete all reports associated with Ext D children’s interview task.
                    </td>
                </tr>
            </tbody>
        </table>

        <h5>
            <sup>
                *
            </sup>
            NGSS Science and Engineering Practices
        </h5>
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
            <sup>
                #
            </sup>
            NGSS Crosscutting Concepts
        </h5>
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