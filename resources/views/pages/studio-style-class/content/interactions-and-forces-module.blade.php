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
        <h3>Interactions and Forces Module</h3>
        <p>The main purpose of this module is to introduce students to the force model description of interactions. In the Interactions and Energy Module students learned how to describe interactions in terms of energy. They drew giver/receiver energy diagrams to describe the energy that is transferred between interacting objects and the resulting energy changes that occur within the objects. The big idea from the energy module was the law of conservation of energy. In this module, students learn how to describe interactions in terms of forces (defined as the push or pull of one object on another). They draw force diagrams to describe the strength and direction of the force(s) acting on an object and the speed arrow showing the speed and direction of motion of the object at a particular moment in time. The big idea from this module in Newton’s Second Law of Motion, rate of change of speed = net force on object/mass of object. Students also learn about Newton’s First and Third Laws.
        </p>
        <p>
            In Unit FM, students consider the affect that a single force has on the motion of an object. They learn that the speed of an object only changes when a force is acting on it, and that the rate of change of speed depends on force strength and the object’s mass. This leads to a statement of Newton’s Second Law. The second unit, Unit CF, focuses on two main ideas. For the first two activities, students learn how to deal with situations where two or more forces simultaneously act on an object by combining them into a single ‘net’ force. Situations where the forces are balanced and the net force is zero leads to a statement of Newton’s First Law. In the third activity students consider the mutual forces between two objects that are interacting, and this leads to a statement of Newton’s Third Law.

        </p>
        <h4>Unit FM: Force-based Model for Interactions</h4>
        <p>In this unit students first develop their understanding of what is meant by force and how it is related to a contact push/pull interaction. They consider how the force-based and energy-based models are related and should come to understand that in such interactions energy is transferred to or from an object only when a force is acting on it. They develop the ideas that the speed of an object increases or decreases depending on whether the force is acting in the same direction as, or the opposite direction to, the object’s motion. From this they infer that if no forces act on an object, its speed will remain constant. This also allows them to infer that friction is a force that acts on a moving object in the opposite direction to its motion. They use an analogy to understand how such a force can be produced by two surfaces rubbing together.
        </p>
        <p>
            Next, students investigate how changing the force strength and mass of the object affects the rate at which the speed of an object changes. They use these qualitative results to identify an appropriate algebraic expression that relates force strength and mass to the rate of change of speed. Finally, they use their ideas to explain how it is that objects of different mass all fall together (with the same rate of increasing speed) in terms of the strength of the gravitational force and their masses.

        </p>
        <div id="canvas" class="canvas">

        </div>
        <div class="canvas-drawer">
            Select an activity or extension to get more information.
        </div>
        

        <h4>Unit CF: Combinations of Forces</h4>
        <p>
            In this unit students consider how to analyze situations where more than two forces are simultaneously exerted on an object. In the first activity they learn how to treat a combination of forces as a single force, called the net force. The net force has the same effect on the motion of an object as the original combination of forces. This allows students to generalize Newton’s Second Law that they had learned in the previous unit by replacing the word ‘force’ with ‘net force.’ The focus in the first activity is on unbalanced forces. In the second activity students focus on the effects that balanced forces have on the motion of an object. In the third lesson students learn about the relative strengths and directions of forces that two interacting objects exert on each other (Newton’s Third Law). In the extension that follows, they consider the difference between balanced forces and Newton’s Third Law. In the fourth activity they consider how to explain phenomena using force ideas. Finally, in the engineering design activity students figure out how to design a Whirligig that falls more slowly than the original model presented to them, and they need to explain why their solution works in terms of the ideas learned during the two units of this module.

        </p>
        <div id="canvas2" class="canvas">

        </div>
        <div class="canvas-drawer">
            Select an activity or extension to get more information.
        </div>
        
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/studio-if.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop