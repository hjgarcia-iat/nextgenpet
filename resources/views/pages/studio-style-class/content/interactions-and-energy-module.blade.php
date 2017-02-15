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
    
    <section id="pdf-content"
             class="pdf-content"></section>
    <section id="html-content"
             class="html-content">
        <h3>Interactions and Energy Module</h3>
        <p>This module focuses on developing students’ understanding of the energy model for describing interactions, including the law of the conservation of energy (COE).  It introduces a diagrammatic representation of the energy transfers between interacting objects and the energy changes within objects. In Unit EM students learn about various types of interactions (contact push/pull, light, heat, electric circuit) and different forms of energy associated with them. As students learn about more interactions, the corresponding G/R ([energy] giver/[energy] receiver) energy diagrams become more complex, describing the flow of energy through a system of interacting objects; they are eventually quantified using the idea of efficiency.  In Unit PEF, which introduces the idea of potential energy, students first examine interactions involving elastic objects. They then extend this idea to describe magnetic, electrostatic, and gravitational interactions using the energy model and become familiar with the concept of fields. Finally, they also examine electromagnetic interactions.
        </p>
        <h4>Unit EM: Energy-based Model for Interactions</h4>
        <p>Unit EM focuses on introducing students to the energy model for describing interactions. Students are first shown a simple giver/receiver energy diagram to represent the contact push/pull interaction between two colliding carts. From there, through successive activities students learn about additional types of interactions (light, heat, electric circuit) and additional forms of energy (thermal, chemical potential energy). The corresponding G/R energy diagrams become more complex, describing the flow of energy through a system of interacting objects. Initially, all energy diagrams are qualitative, simply describing the flow of energy through a system of interacting objects. When students learn about energy efficiency, they are able to quantify the G/R energy diagrams by calculating the energy amounts corresponding to each part of the diagram. By the end of the unit the students are expected to describe a chain of interactions between several objects (mainly in an electric circuit) by drawing the appropriate G/R energy diagram, quantifying it (assuming they know how much energy was available at the start), calculating the overall efficiency of the system, and validating the conservation of energy quantitatively. The unit ends with an engineering design activity in which students consider a solar shower installation and how it can be made more efficient.
        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])
        <h4>Unit PEF: Potential Energy and Fields</h4>
        <p>As the name implies, Unit PEF focuses on potential energy and fields.  The first activity introduces students to the interaction between an elastic object (rubber band or spring) and another object.  Students learn about elastic potential energy and draw energy diagrams describing the interactions.  In the next activity students are introduced to magnetic and static electric interactions; that is, how magnets affect each other and how electrically charged objects affect each other.  That activity is optional; if students have already studied those interactions in the magnetism and static electricity module (Module MSE), then the activity can be skipped.  Otherwise, students need to learn about those interactions to prepare for the following activity. Activity 3 introduces ‘action-at-a-distance’ interactions, and how to describe them in terms of energy.  Specifically, students learn how to describe the magnetic and static electric interactions using giver/receiver energy diagrams. They learn about magnetic fields and magnetic potential energy, and about electric fields and electric potential energy.  In the fourth activity they are introduced to the gravitational interaction and gravitational potential energy.  In Activity 5 they learn about electromagnetic interactions: how moving electric charges can create a magnetic field and how moving magnets can create an electric field. Activity 6 asks students to apply their ideas in an engineering design context to design a regenerative braking system.
        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/studio-ie.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet"
          href="{{ asset('css/vis.min.css') }}">
@stop