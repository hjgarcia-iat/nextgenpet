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
        <h3>Interactions and Energy Module</h3>

        <p>The main purpose of this module is to introduce students both to various types of interactions between
            objects and to the energy model for describing those interactions. In the first unit (energy model) students
            are introduced to contact push/pull interactions, heat interactions (due to temperature differences),
            electric circuit interactions, light interactions and sound interactions. In the second unit (potential
            energy and fields) students are introduced to elastic interactions; magnetic, static electric and
            electromagnetic interactions; and gravitational interactions. </p>
        <p>The energy model is represented by a giver/receiver energy diagram, in which during the interaction ‘energy’
            is transferred from the ‘giver’ to the ‘receiver,’ the giver decreases in some type of energy and the
            receiver increases in some type (same or different) of energy. We use only the generic term ‘energy’ to
            label the actual transfer in the diagram because the transfer is not related to an observable quantity.
            However, since changes in the energy giver and receiver are directly related to observable or measurable
            changes in some quantity, those energy changes are given specific names. Thus, the energy associated with
            changes in speed is called kinetic energy; the energy change associated with changes in temperature is
            called thermal energy; the energy changes associated with changes in the distance between an object and the
            earth is called gravitational potential energy; and so forth. Inherent in the giver/receiver energy diagram
            is a visual representation of the Law of the Conservation of Energy. </p>
        <p>
            For a viewable-only version of all the student lessons for this module,
            <a href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/lecture/Module_IE_Lecture-Style_watermark.pdf" target="_blank">
                click here </a>. These copies cannot be distributed to students, but are for your use only. To order
            these content module materials for your students, contact the publisher,
            <a href="https://www.iat.com" target="_blank">It’s About Time </a>. </p>
        <h4>Unit EM: Energy-based Model for Interactions</h4>
        <p>
            Unit EM focuses on introducing students to the energy model for describing interactions. Students are first
            shown a simple giver/receiver energy diagram to represent the contact push/pull interaction between two
            colliding carts. From there, through successive lessons students learn about additional types of
            interactions (light, heat, electric circuit) and additional forms of energy (thermal, chemical potential
            energy). The corresponding G/R energy diagrams become more complex, describing the flow of energy through a
            system of interacting objects. Initially, all energy diagrams are qualitative, simply describing the flow of
            energy through a system of interacting objects. When students learn about energy efficiency, they are able
            to quantify the G/R energy diagrams by calculating the energy amounts corresponding to each part of the
            diagram. By the end of the unit the students are expected to describe a chain of interactions between
            several objects (mainly in an electric circuit) by drawing the appropriate G/R energy diagram, quantifying
            it (assuming they know how much energy was available at the start), calculating the overall efficiency of
            the system, and validating the conservation of energy quantitatively.

        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])

        <h4>Unit PEF: Potential Energy and Fields</h4>
        <p>
            As the name indicates, Unit PEF focuses on potential energy and fields. The first lesson introduces students
            to the interaction between an elastic object (rubber band or spring) and another object. Students learn
            about elastic potential energy and draw energy diagrams describing the interactions. In the next lesson
            students are introduced to magnetic and static electric interactions; that is, how magnets affect each other
            and how electrically charged objects affect each other. This lesson is optional; if students have already
            studied those interactions in the Magnetism and Static Electricity Module then the lesson can be skipped.
            Otherwise, students need to learn about those interactions in preparation for the following lessons. Lesson
            3 introduces ‘action-at-a-distance’ interactions, and how to describe them in terms of energy. Specifically,
            students learn how to describe the magnetism and static electric interactions using giver/receiver energy
            diagrams. They learn about magnetic fields and magnetic potential energy, and about electric fields and
            electric potential energy. In the fourth lesson they are introduced to the gravitational interaction and
            gravitational potential energy. Finally, in Lesson 5 they learn about electromagnetic interactions: how
            moving electric charges can create a magnetic field and how moving magnets can create an electric
            field. </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/lecture-ie.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop