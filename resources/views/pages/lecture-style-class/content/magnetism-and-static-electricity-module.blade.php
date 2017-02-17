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
        <h3>Magnetism and Static Electricity Module</h3>
        <p>
            The main purpose of this module is to engage students in several science and engineering practices, particularly developing and using models, constructing explanations and engaging in argument from evidence.  The explanatory models students develop are mechanistic, so students get extensive experience with the crosscutting concept of cause and effect: mechanism and explanation.   As students are engaged in the practices, what emerges is an understanding of magnetic and electrostatic interactions, which are part of the core physical science idea PS2B, types of interactions.
        </p>
        <p>
            The first unit in the module focuses on developing a model of magnetism. Once students have experience with the model development process, they then work through the second unit, where developing a model for static electricity is more challenging.  Whereas there is only one type of magnetic material, there are basically two types of materials involved in static electric effects: insulators and conductors. 
        </p>
        <h4>Unit M: Developing a Model for Magnetism</h4>
        <p>
            Unit M focuses on helping students develop a model that can successfully explain many different observations involving magnets. This unit provides a nice example of how models are proposed, tested and modified based on evidence. Most students will change their model several times during the unit as they keep obtaining evidence that does not support their current model. By the end of the unit, however, the class will come to consensus on a ‘small-magnet alignment model,’ which can explain a wide range of magnetism phenomena. It has many features in common with the Domain Model. In this unit students can perform some simple hands-on experiments at their desktops if materials are available, or can watch movies of all the experiments.
        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])
        <h4>Unit SE: Developing a Model for Static Electricity </h4>
        <p>
            Unit SE guides students through the development of a model for electric charges in materials that can explain the interactions between charged and uncharged objects, and between two charged objects; and includes both conductors and non-conductors. In this unit students can perform some simple hands-on experiments and then watch movies of other experiments (more challenging to do), or they can watch movies of all the experiments.
        </p>
        <p>
            The unit begins by having students explore various static electric effects and compare the static electric interaction with the magnetic interaction. Students then work through two extensions where they learn about the triboelectric series and develop an understanding of the law of electric charges. In the second lesson students propose their initial model (with + and – charges) to explain the charging of two non-conductors by rubbing, and explore the interaction of a soda can electroscope with charged and uncharged objects. In the third lesson they consider how to describe and represent uncharged objects in their model, and extend this in an extension. In the next extension they learn about a simple atomic model and which type of charge (plus or minus) is actually transferred by rubbing two uncharged non-conductors together. In the fourth lesson and two associated extensions they extend their model for both conducting and non-conducting materials and learn about discharging. By this time the class has developed a plausible model for electric charges in materials. In the fifth lesson students apply their model to explain some interesting phenomena.
        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop


@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/lecture-mse.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet"
          href="{{ asset('css/vis.min.css') }}">
@stop