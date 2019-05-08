@extends('layouts.two-column')

@section('pageTitle', 'Studio Style Class')

@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Planning & Conducting Activities & Extensions</h3>
        <p>
            Click on the activity titles below to view or download the activities in PDF format. The extensions below can be found on
            <a href="http://nextgenpetstudent.activatelearning.com/extensions/extensions_index_studio_pci.html">Planning & Conducting Investigations Extensions page</a>
            .
        </p>

        <p>
            <strong>Before Implementing PCI Cluster of Activities & Extensions</strong>
        </p>
        <p>The
            <em>Next Gen PET</em>
           Planning & Conducting Investigations curriculum is designed to fit within a typical Next Gen PET course.
        </p>
        <p>It can be implemented at any point in the course, but it may be useful if students have some prior understanding of the NGSS, which they can gain by working through one or more of the Teaching & Learning activities and extensions. At the very minimum, students should have read TL Extension A prior to beginning the Planning and Conducting Investigation activities and extensions. That extension provides a brief introduction to the NGSS core ideas, science and engineering practices, and crosscutting concepts. If time permits, students will develop a more comprehensive understanding of the NGSS by also working through TL Extensions B and F, and TL Activities 1 and 3.</p>

        <table class="table table-bordered">
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
                <td>A1</td>
                <td class="cell-link">
                    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/pci/pci-activity-1.pdf"
                       target="_blank">Variables and Controls
                    </a>
                </td>
                <td>All</td>
                <td>1,3</td>
                <td></td>
                <td>100 min</td>
                <td>None</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td colspan="6">Students discuss the topic of scientific questions and the concept of independent and dependent variables. To introduce experimentation, they do hands-on investigations involving a pendulum and a marshmallow blow gun. This activity is meant to introduce concepts such as experiment design, measurement uncertainty, and scientific questioning through discussion and hands-on experimentation. Not every student question should be answered here. These ideas are developed more fully later.</td>
            </tr>
            <tr>
                <td colspan="6">
                    <strong>Assign</strong>
                    : This is designed to be flexible. You may wish to motivate the NGSS base by assigning Teaching & Learning Extensions A (and maybe B).
                </td>
            </tr>
            <tr class="highlight">
                <td>Ext A</td>
                <td>Scientific Questions and Measurement</td>
                <td>All</td>
                <td>1,3</td>
                <td></td>
                <td>Online</td>
                <td>A1</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td colspan="6">This extension includes a basic discussion, with examples, of different qualities of good scientific questions. These include the ability to collect relevant data and falsifiability. The second part looks briefly at measurement precision, so that students begin to be aware that measurements have uncertainties that should be noted.</td>
            </tr>
            <tr>
                <td colspan="6">
                    <strong>Online</strong>
                    : After students complete Activity 1. Includes PCI Extension A Quiz.
                </td>
            </tr>
            <tr class="highlight">
                <td>Ext B</td>
                <td class="cell-link">Variables and Data Tables</td>
                <td>All</td>
                <td>3</td>
                <td></td>
                <td>Online</td>
                <td>A1</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td colspan="6">This extension reviews the concept of independent and dependent variables with examples. The second part looks at data table design. The online quiz has a question from each topic.</td>
            </tr>
            <tr>
                <td colspan="6">
                    <strong>Online</strong>
                    : After students complete Activity 1 and Extension A. Includes PCI Extension B Quiz.
                </td>
            </tr>
            <tr class="highlight">
                <td>A2</td>
                <td class="cell-link">
                    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/pci/pci-activity-2.pdf"
                       target="_blank">Conducting Fair Tests</a>
                </td>
                <td>All</td>
                <td>3</td>
                <td></td>
                <td>35min</td>
                <td>A1, Ext A, B</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td colspan="6">This discussion-oriented activity has no hands-on requirement, and therefore is much faster. Students address the example of what constitutes evidence that a poison ivy remedy is effective. In the last discussion, they investigate ways to improve the question of how the number of times a magnet is rubbed on a nail affects the number of paperclips that the nail can then pick up. The summary questions continue the fair test topic.</td>
            </tr>
            <tr>
                <td colspan="6">
                    <strong>Assign</strong>
                    : After completion of Extensions A and B. This shorter activity may serve to fill a small opening in your course.
                </td>
            </tr>
            <tr class="highlight">
                <td>Ext C</td>
                <td>More about Scientific Investigation</td>
                <td>All</td>
                <td>3</td>
                <td></td>
                <td>Online</td>
                <td>A2</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td colspan="6">This extension is a reading assignment about some topics that are often left out of discussions of scientific processes in school settings. Sometimes in science the answer is “I don’t know.” Sometimes all you see in the data is random variation. Sometimes you have a null result. One way not to come to the wrong conclusion is to do a double-blind study, which is also briefly mentioned. There are two questions in the online quiz after the reading. Note that this extension is not a prerequisite for the remaining two activities.</td>
            </tr>
            <tr>
                <td colspan="6">
                    <strong>Online</strong>
                    : After students complete Activity 1 and Extension A. Includes PCI Extension C Quiz.
                </td>
            </tr>
            <tr class="highlight">
                <td>A3</td>
                <td class="cell-link">
                    <a href="https://s3.amazonaws.com/nextgenpet/web-docs/pci/pci-activity-2.pdf"
                       target="_blank">Practice Investigations</a>
                </td>
                <td>All</td>
                <td>1,3</td>
                <td></td>
                <td>75min</td>
                <td>A2</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td colspan="6">This activity is an opportunity for students to put the concepts they’ve learned about planning and conducting investigations to the test. There are two short science questions asked. Half the class answers each. For the question they don’t answer, they serve as reviewers of the experimental plan. When the experiments are done, they present their results for discussion. Last, they brainstorm their own question for the final activity—coming up with a question and the materials they need serves as the summary question.</td>
            </tr>
            <tr>
                <td colspan="6">
                    <strong>Assign</strong>
                    : After students complete Activity 2. Note that the second half is the planning that leads to A4.
                </td>
            </tr>
            </tbody>
            <tr class="highlight">
                <td>A4</td>
                <td>Investigation Project</td>
                <td>All</td>
                <td>1,3,4</td>
                <td></td>
                <td>75min</td>
                <td>A3</td>
            </tr>
            <tr>
                <td rowspan="2"></td>
                <td colspan="6">In this activity, students use the materials and equipment they requested at the end of Activity 3 to perform the experiment that they designed. They review each other’s experiments using a rubric, and they present their results to each other. The activity ends with groups presenting their work to each other for discussion and questions.</td>
            </tr>
            <tr>
                <td colspan="6">
                    <strong>Assign</strong>
                    : After students complete Activity 3. Students will request experimental materials in Activity 3 that will have to be ready to go when Activity 4 is done.
                </td>
            </tr>
            </tbody>
        </table>

    </section>

@stop