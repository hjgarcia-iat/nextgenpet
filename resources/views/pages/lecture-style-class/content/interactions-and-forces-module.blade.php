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
        <h3>Interactions and Forces Module</h3>

        <p>
            The main purpose of this module is to introduce students to the force model description of interactions. In
            the Interactions and Energy Module students learned how to describe interactions in terms of energy. They
            drew giver/receiver energy diagrams to describe the energy that is transferred between interacting objects
            and the resulting energy changes that occur within the objects. The big idea from the energy module was the
            law of conservation of energy. In this module, students learn how to describe interactions in terms of
            forces (defined as the push or pull of one object on another). They draw force diagrams to describe the
            strength and direction of the force(s) acting on an object and the speed arrow showing the speed and
            direction of motion of the object at a particular moment in time. The big idea from this module in Newton’s
            Second Law of Motion, rate of change of speed = net force on object/mass of object. Students also learn
            about Newton’s First and Third Laws. </p>
        <p>
            In Unit FM, students consider the affect that a single force has on the motion of an object. They learn that
            the speed of an object only changes when a force is acting on it, and that the rate of change of speed
            depends on force strength and the object’s mass. This leads to a statement of Newton’s Second Law valid for
            single forces. The second unit, Unit CF, focuses on three main ideas (Newton’s three Laws of Motion). For
            the first three lessons, students learn how to deal with situations where two or more forces simultaneously
            act on an object by combining them into a single ‘net’ force. This leads to a general statement of Newton’s
            Second Law. Situations where the forces are balanced and the net force is zero leads to a statement of
            Newton’s First Law. In the fourth lesson students consider the mutual forces between two objects that are
            interacting, and this leads to a statement of Newton’s Third Law. </p>
        
        <h4>Unit FM: Force-based Model for Interactions</h4>
        <p>
            Unit FM focuses on introducing students to the force model for describing interactions. The unit considers
            single forces, first horizontally directed and then vertically directed (gravitational). Lesson 1 considers
            two issues: (1) what happens to the motion of an object when an impulsive force acts on it and when the
            force stops acting on it; and (2) whether a moving object implies that a force must be acting on it in the
            direction of its motion. Lesson 2 extends the situation to a constant, continuous force acting on an object
            and the motion that results. In Lesson 3 students consider forces acting in a direction opposite to the
            motion of the object, and in Lesson 4 they consider whether friction is a force. In Lesson 5 they explore
            the effects of changing the strength of the force acting on an object and changing the mass of the object.
            At the end of Lesson 5 they are introduced to Newton’s Second Law for single forces. Finally, in Lesson 6
            they consider falling objects and the gravitational force, and focus their attention on how to explain why
            objects of different masses all fall with the same rate of increasing speed (ignoring air drag
            effects). </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])

        <h4>Unit CF: Combinations of Forces</h4>
        <p>
            In this unit, students consider how to analyze situations where more than two forces are simultaneously
            exerted on an object. In the first lesson they learn how to treat a combination of forces as a single force,
            called the net force. The net force has the same effect on the motion of an object as the original
            combination of forces. This allows students to generalize Newton’s Second Law that they learned about in
            Unit FM by replacing the word ‘force’ with ‘net force.’ The focus in the first lesson is on unbalanced
            forces. In the second lesson students focus on the effects that balanced forces have on the motion of an
            object, and at the end are introduced to Newton’s First Law of Motion. In the third lesson they analyze
            several situations involving friction. In an extension assignment for that lesson students analyze
            situations where an object is moving vertically, and they consider the effects of air drag. In the fourth
            lesson students learn about the relative strengths and directions of forces that two interacting objects
            exert on each other (Newton’s Third Law). Finally, in the engineering design lesson students figure out how
            to design a whirligig that falls more slowly than the original model presented to them, and they need to
            explain why their solution works in terms of the ideas learned during the two units of this module. </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/lecture-if.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop