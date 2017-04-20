@extends('layouts.two-column')
@section('pageTitle','Studio Style Class')
@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop
@section('content')
    <section class="pdf-content"
             id="pdf-content"></section>
    <section class="html-content"
             id="html-content">
        <h3>
            Teaching &amp; Learning &mdash; General Activities &amp; Extensions
        </h3>
        <h5>
            Introductory Cluster
        </h5>
        <p>
            To begin the
            <em>Next Gen PET</em>
            Teaching and Learning curriculum, you should assign Extensions A and B as readings to be completed before TL
            Activity 1 is conducted in class. This first activity should be done about halfway through the first content
            unit you do. Extension C, another reading, should be assigned after the first activity and before any child
            interview activity.
        </p>
        
        <table class="table table-bordered table-hover table-sm table-responsive">
            <thead>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th>NPG Modules</th>
                    <th>NGSS Practices
                        <sup>*</sup>
                    </th>
                    <th>NGSS CC
                        <sup>#</sup>
                    </th>
                    <th>Time or Format</th>
                    <th>Pre-req</th>
                </tr>
            </thead>
            <tbody>
                <tr class="highlight">
                    <td>Ext A</td>
                    <td>Reading: The Next Generation Science Standards and Next Gen PET</td>
                    <td>All</td>
                    <td>All</td>
                    <td>All</td>
                    <td>Reading</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">Brief reading that introduces the Next Generation Science Standards (NGSS) and the
                                    relationship between performance expectations and the three dimensions that
                                    contribute to the performance expectations: disciplinary core ideas, science and
                                    engineering practices, and crosscutting concepts.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>
                        : Early in first unit of content, before TL A1. Before or concurrently with TL Ext B.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext B</td>
                    <td>Reading: Engineering and the Next Generation Science Standards</td>
                    <td>All</td>
                    <td>All</td>
                    <td>-</td>
                    <td>Reading</td>
                    <td>None</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">Brief reading that describes the three stages that the NGSS uses to describe
                                    engineering design: 1) Define and delimit problem, 2) Develop possible solutions,
                                    and 3) Optimizing the design solution. The second part of the reading describes how
                                    the 8 science and engineering practices differ between science and engineering.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>
                        : Early in first unit of content, before TL A1. After or concurrently with TL Ext A.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>A1</td>
                    <td class="cell-link">
                        <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/studio/General_Activities+_+Extensions/TL_Activity_1.pdf"
                           target="_blank">Teaching and Learning Science
                        </a>
                    </td>
                    <td>MSE/All</td>
                    <td>Intro All</td>
                    <td>Intro All</td>
                    <td>25 min</td>
                    <td>Ext A,B</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Introduction to the Next Generation Science Standards (NGSS) and how the three components
                        (Disciplinary Core Ideas, Science and Engineering Practices, and Crosscutting Concepts) are
                        interwoven in instruction. Though an example is provided from Magnetism, this lesson can be used
                        to introduce the NGSS regardless of what module or unit you start your instruction with.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>In class</strong>
                        : After TL Ext A/B, about midway through the first unit you do. If you start with Unit M, do
                        after UM A4.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext C</td>
                    <td>Conducting Interviews with Children</td>
                    <td>All</td>
                    <td>-</td>
                    <td>-</td>
                    <td>Reading</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">Brief reading that describes why and how to conduct “student thinking interviews.”
                                    Student thinking interviews are an important part of the group projects done as part
                                    of some T&L extension activities throughout Next Gen PET.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>
                        : After TL A1, before any interview extension (Ext D, G, I, L, O).
                    </td>
                </tr>
            </tbody>
        </table>
        
        <h5>
            Post-Introductory Cluster
        </h5>
        <p>
            Extensions P, Q, R, and S all deal with crosscutting concepts. Although some of their content connects them
            with specific content modules, they can be assigned during any module, at any time. Activity 12, the only
            in-class activity in this cluster, is a “sequel” of sorts to Activity 1, and just as Activity 1 (after a
            couple reading extensions) is intended to begin the Teaching and Learning curriculum, Activity 12 is
            intended to close it. It is, in essence, a reflection activity on the Teaching and Learning material covered
            during the academic term, regardless of how much of the available material you were able to include in your
            course.
        </p>
        
        <table class="table table-bordered table-hover table-sm table-responsive">
            <thead>
                <tr>
                    <th></th>
                    <th>Title</th>
                    <th>NPG Modules</th>
                    <th>NGSS Practices
                        <sup>*</sup>
                    </th>
                    <th>NGSS CC
                        <sup>#</sup>
                    </th>
                    <th>Time or Format</th>
                    <th>Pre-req</th>
                </tr>
            </thead>
            <tbody>
                <tr class="highlight">
                    <td>Ext P</td>
                    <td>Cause and Effect</td>
                    <td>MSE/All</td>
                    <td></td>
                    <td>2</td>
                    <td>Online</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Introduces the crosscutting concept of Cause and Effect. Includes everyday examples and an
                        example from magnetism as well as other sciences (life and earth science).
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>
                        : Anytime after TL A1 and before TL A12.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext Q</td>
                    <td>Systems & System Models / Matter & Energy</td>
                    <td>IE, MI/ All</td>
                    <td></td>
                    <td>4,5</td>
                    <td>Online</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Introduces the crosscutting concepts of systems and system models (CC 4) and matter and energy
                        (CC 5). Includes everyday examples and examples from energy (IE), chemistry (MI) and life
                        science.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>
                        : Anytime after TL A1 and before TL A12.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext R</td>
                    <td>Stability &amp; Change/Scale, Proportion &amp; Quantity</td>
                    <td>IF, MI/All</td>
                    <td></td>
                    <td>7,3</td>
                    <td>Online</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Introduces the crosscutting concepts stability (CC 7) and change and scale, proportion, and
                        quantity (CC3). Includes everyday examples and examples from forces (IF), chemistry (MI) and
                        earth science.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assing</strong>
                        : Anytime after TL A1 and before TL A12.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>Ext S</td>
                    <td>Patterns</td>
                    <td>WSL/All</td>
                    <td></td>
                    <td>1</td>
                    <td>Online</td>
                    <td>A1</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Introduces the crosscutting concept patterns (CC 1). Includes everyday examples and examples
                        from waves (WSL), and earth science.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>Assign</strong>
                        : Anytime after TL L1 and before TL L12.
                    </td>
                </tr>
                <tr class="highlight">
                    <td>A12</td>
                    <td class="cell-link">
                        <a href="https://s3.amazonaws.com/nextgenpet/web-docs/teaching-and-learning/studio/General_Activities+_+Extensions/TL_Activity_12.pdf"
                           target="_blank">Teaching and Learning Science II
                        </a>
                    </td>
                    <td>All</td>
                    <td></td>
                    <td>All</td>
                    <td>25 min</td>
                    <td>Below</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        Next Gen PET students reflect on what they think constitutes good science instruction. They also
                        review the crosscutting concepts of the NGSS and reflect on how they relate to the current
                        content module and a previous one.
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="6">
                        <strong>In class</strong>
                        : Near end of the semester. It would be best if students have already completed at least some of
                        the TL activities and extensions, especially Extensions P, Q, R and S (which focus on
                        crosscutting concepts).
                    </td>
                </tr>
            </tbody>
        </table>
        
        <h5>
            <sup>
                α
            </sup>
            Next Gen PET Modules
        </h5>
        <ul class="list-unstyled ml-4">
            <li>
                MSE Developing Models for Magnetism and Static Electricity
            </li>
            <li>
                IE Interactions and Energy
            </li>
            <li>
                IF Interactions and Forces
            </li>
            <li>
                WSL Waves, Sound and Light
            </li>
            <li>
                MI Matter and Interactions
            </li>
        </ul>
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
