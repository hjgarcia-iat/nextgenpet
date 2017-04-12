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

    <section id="pdf-content"
             class="pdf-content"></section>
    <section id="html-content"
             class="html-content">

        <h3>Waves, Sound &amp; Light Module - Teaching &amp; Learning</h3>
        <p>Each Teaching and Learning lesson and extension in the Module WSL (Waves, Sound and Light) cluster is listed below, along with a brief summary, the NGSS alignment, estimated class time needed (for lessons) and the format (for extensions), and the pre-requisite TL activities (if any).  Below each description is a suggestion for when you should conduct the in-class lesson or assign the extension.  There is a list of the NGSS science and engineering practices and the crosscutting concepts following the table.</p>
        <p>
            Note that Extension L is a group project involving working with children. This project typically takes 2-3 weeks from initial assignment to the time the final individual and group reports are turned in. Although the physical science content (light and sound) is associated with Units WS and L, by the time students are done with the project, the class will (probably) be on a different unit. Thus, the follow-up Lesson 9, where students reflect on their interactions with the children they interviewed, will not be connected to your current unit. (Note that, despite the ordering below, Extension M and Lesson 8 are likely to be completed before the work required for Extension L is done.)
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
                    <td>Ext K</td>
                    <td>Explanations and Solutions – Preparation for Lesson 7</td>
                    <td>WSL</td>
                    <td>6</td>
                    <td></td>
                    <td>Paper</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        This extension includes video analysis of a video of elementary school children conducting an experiment about light.  It also introduces the grade level competencies for NGSS Practice 6, constructing explanations and designing solutions.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: Before TL L7, after Unit L L2.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>L7</td>
                    <td>Shedding Light on Explanations and Solutions (NGSS Practice 6)</td>
                    <td>WSL</td>
                    <td>6</td>
                    <td></td>
                    <td>50</td>
                    <td>Ext K</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Focuses on NGSS Practice 6 (constructing explanations and designing solutions). Next Gen PET students focus on their own explanations related to light and sound phenomena. They then discuss a video (watched in Ext K) of children engaging in Practice 6 related to a science experiment with light. Finally, they consider how they might facilitate children’s participation in Practice 6 through activities related to sound and light that they will facilitate in Ext L.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>In class</strong>: After Unit L L2 and TL Ext K. [Having worked through the UWS lesson/activity on sound waves (L3) would be helpful, but not necessary.]
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext L</td>
                    <td>Guiding Explanations and Solutions</td>
                    <td>WSL</td>
                    <td>6</td>
                    <td></td>
                    <td>Child interview</td>
                    <td>Ext C, L7</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Next Gen PET students facilitate an activity where the children either construct an explanation/design and carry out an investigation around shadows, or design a solution to a problem using light and sound.  They collaborate with group members to write a report synthesizing their interview results.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: After TL Ext C, TL L7 and Unit L L2.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext M</td>
                    <td>Engaging in Argument From Evidence: Preparation for Lesson 8</td>
                    <td>WSL</td>
                    <td>7</td>
                    <td></td>
                    <td>Paper</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        This extension includes analysis of a video of elementary school children designing solutions to an engineering design challenge related to light.  It also introduces the grade level competencies for NGSS Practice 8, engaging in argument from evidence.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>: After Unit L L2/A2, before TL L8.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>L8</td>
                    <td>Arguments and Evidence (NGSS Practice 7)</td>
                    <td>WSL</td>
                    <td>7</td>
                    <td></td>
                    <td>15</td>
                    <td>Ext M</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Next Gen PET students identify how children engaged in arguing from evidence (NGSS Practice 7) in the context of developing and comparing multiple design solutions for a design challenge related to light.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>In class</strong>: At end of Unit L and after TL Ext M.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>L9</td>
                    <td>Explanations and Solutions (Reflection on Sound/Light Interview)</td>
                    <td>WSL</td>
                    <td>6</td>
                    <td></td>
                    <td>15</td>
                    <td>Ext L</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">In class discussion and reflection on the interviews with children that the Next Gen PET students conducted as part of Ext L.  Next Gen PET students identify how children constructed explanations about shadows or how they designed a communication system.</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">After students complete all reports associated with Ext L children’s interview task.</td>
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