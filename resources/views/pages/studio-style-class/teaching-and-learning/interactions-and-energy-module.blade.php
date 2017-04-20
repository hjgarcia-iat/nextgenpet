@extends('layouts.two-column')

@section('pageTitle')
    Studio Style Class
@stop
@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Teaching &amp; Learning &mdash; Module IE Cluster</h3>
        <p>Each Teaching and Learning activity and extension in the Module IE (Interactions and Energy) cluster is listed below, along with a brief summary, the NGSS alignment, estimated class time needed (for activities) and the format (for extensions), and the pre-requisite TL lessons (if any).  Below each description is a suggestion for when you should conduct the in-class activities or assign the extension.  There is a list of the NGSS science and engineering practices and the crosscutting concepts following the table.</p>
        <p>Note that Extension G is a group project involving the interviewing of children. This project typically takes 2-3 weeks from initial assignment to the time the final individual and group reports are turned in. Although the physical science content (energy) is associated with Unit EM, by the time students are done with the project, the class will (probably) be on a different unit. Thus, the follow-up Activity 4, where students reflect on their interactions with the children they interviewed, will not be connected to your current unit.</p>

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
                    <td>Ext F</td>
                    <td>Questions, Problems, and Data – Preparation for Activity 3</td>
                    <td>IE/All</td>
                    <td>1,4</td>
                    <td></td>
                    <td>Paper</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">This extension prepares students for in class Lesson/Activity 3. Students watch and take notes on a short (7 min) EiE video in which elementary school teachers address issues that arise in their classrooms around data collection. They then read about NGSS Practices 1 (asking questions for science and defining problems for engineering) and 4 (analyzing and interpreting data). </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: Before TL A3.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>A3</td>
                    <td class="cell-link">
                        <a target="_blank" href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/studio/Module_IE_Cluster/TL_Activity_3.pdf">Questions, Problems, and Evidence (NGSS Practices 1 and 4)</a></td>
                    <td>IE/All</td>
                    <td>1,4</td>
                    <td></td>
                    <td>50min</td>
                    <td>Ext F</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">Students compare science and engineering and then look at what constitutes testable questions (in science) and how design problems lead to testable solutions (in engineering). This is NGSS Practice 1. In the second half they look at Practice 4 (analyzing and interpreting data) and compare their experience in Next Gen PET with the grade level expectations for children related to that practice. The final part of the activity is a class discussion about a short video they should watch as homework (as part of Ext F).</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>In class</strong>: After TL Ext F. In Unit EM, after A4. The content is general enough to be assigned during a different unit if you don’t do Unit EM.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext G</td>
                    <td>Energy and Evidence: Interviewing Children about Energy</td>
                    <td>IE</td>
                    <td>4,7</td>
                    <td></td>
                    <td>Child Interview</td>
                    <td>Ext C, A3</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">Next Gen PET students interview children about their ideas about energy. They also provide the children with some age-appropriate representations of data relating to changing temperatures of a liquid and ask students to draw some conclusions.  The NGP students collaborate with their group to produce a report synthesizing the results of their interviews.</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: After TL Ext C, TL A3 and Unit EM A4.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>A4</td>
                    <td class="cell-link">
                        <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/studio/Module_IE_Cluster/TL_Activity_4.pdf" target="_blank">Reflecting on Interview about Energy</a></td>
                    <td>IE</td>
                    <td>4</td>
                    <td></td>
                    <td>15 min</td>
                    <td>Ext G</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">In class discussion and reflection on the interviews with children that the Next Gen PET students conducted as part of Ext G. Next Gen PET students identify how children think about energy and how these ideas are similar and different from their own ideas. They also discuss how children think about data and how those ideas relate to the NGSS grade level expectations. </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: After students complete all reports associated with Ext G children’s interview task.
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