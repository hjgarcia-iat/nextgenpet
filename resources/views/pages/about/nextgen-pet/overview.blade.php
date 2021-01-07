@extends('layouts.two-column')

@section('pageTitle', 'Overview')

@section('sidebar')
    @include('home._sidebar')
@stop

@section('banner')
    @include('home._slider')
@stop

@section('content')
    <h2>NGSS and Next Gen PET: Overview</h2>
    <p>The Next Gen PET curriculum materials were developed to help students to develop a deep understanding of many physical science ideas using a pedagogical structure that engages them in practices that closely mirror those of scientists. As such, the materials have been aligned with the three dimensions of the
        <a href="https://www.nap.edu/catalog/13165/a-framework-for-k-12-science-education-practices-crosscutting-concepts" target="_blank">Framework for K-12 Science Education</a> and the
        <a href="https://www.nextgenscience.org/" target="_blank">Next Generation Science Standards</a> (NGSS):</p>

    <ul>
        <li>Engagement in Science and Engineering Practices (SEPs), </li>
        <li>Application of Crosscutting Concepts (CCs), and </li>
        <li>Addressing selected fundamental Disciplinary Core Ideas (DCIs) in physical science.</li>
    </ul>
    <p>By being immersed in the guided-inquiry pedagogy of the Next Gen PET materials, as a matter of course students engage in the many of the SEPs and consider many of the CCs in the context of physical science. The particular middle- and high-school levels DCIs addressed are those that have explicit connections to K-5 DCIs, as well as those that offer unifying themes. These DCIs form the overarching learning goals for the Next Gen PET curriculum materials. In addition, each of these DCIs was broken down and teased out into several target ideas for the particular activities/lessons within each unit. These lists of target ideas are available under the Instructor-only sections of this site. (You must first register with Activate Learning before you can access the Instructor sections of the Next Gen PET site.)</p>
    <p>Nineteen states plus the District of Columbia (representing over 36% of students nationwide) have adopted the NGSS. In addition, nineteen other states (representing another 29% of students nationwide) other states have developed their own standards based on the Framework, explicitly incorporating the three dimensions. Thus, the Next Gen PET materials are aligned closely with the K-12 standards for physical science education of nearly two-thirds of U.S. K-12 students.</p>
    <p>The following sections give an overview of which SEPs, CCs and DCIs are addressed in each unit of the materials. </p>
    <p>
        <a href="{{ url('about/nextgen-pet/science-and-engineering-practices') }}">Science and Engineering Practices</a></p>
    <p>
        <a href="{{ url('about/nextgen-pet/crosscutting-concepts') }}">Crosscutting Concepts</a></p>
    <p>
        <a href="{{ url('about/nextgen-pet/disciplinary-core-ideas') }}">Disciplinary Core Ideas</a></p>
    <p>In addition, the Teaching & Learning Activities (see Overview link) explicitly address the Science and Engineering Practices and the Crosscutting Concepts. </p>

@stop
