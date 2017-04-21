@extends('layouts.two-column')
@section('pageTitle','Studio Style Class')
@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop

@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Magnetism and Static Electricity Module</h3>
        <p>The main purpose of this module is to engage students in several science and engineering practices,
            particularly developing and using models, constructing explanations, and engaging in argument from
            evidence.  The explanatory models students develop are mechanistic, so students get extensive experience
            with the crosscutting concept of <em>Cause and Effect: Mechanism and Explanation</em>. As students engage
            in the practices, what emerges is an understanding of magnetic interactions, which is part of the core
            physical science idea <em>PS2B, Types of Interactions</em>. </p>
        <p>
            The first unit in the module focuses on developing a model of magnetism. Once students have experience with
            the model development process they then work through the second unit, where developing a model for static
            electricity is more challenging.  Whereas there is only one type of magnetic material, there are basically
            two types of materials involved in static electric effects: insulators and conductors.  </p>
        <p>
            For a viewable-only version of all the student activities for this module,
            <a href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/studio/Module_MSE_Studio-Style_watermark.pdf" target="_blank">
                click here </a>. These copies cannot be distributed to students, but are for your use only. </p>
        <h4>Unit M: Developing a Model for Magnetism</h4>
        <p>
            Unit M focuses on helping students develop a model that can successfully explain many different observations
            involving magnets. This unit provides a nice example of how models are proposed, tested and modified based
            on evidence. Most students will change their model several times during the unit as they keep obtaining
            evidence that does not support their current model.  By the end of the unit, however, the class will come to
            consensus on a ‘small-magnet alignment model,’ which can explain a wide range of magnetic phenomena.  It has
            many features in common with the Domain model. In the last activity students apply their ideas about
            magnetism to an engineering design project involving a prototype maglev train. </p>

        @include('pages.partials._canvas',['canvasId' => 'canvas'])

        <h4>Unit SE: Developing a Model for Static Electricity</h4>
        <p>
            In Unit SE, students develop a model that can successfully explain many different observations involving
            static electricity. Unlike Unit M, where their magnetic models usually undergo a paradigm shift, in this
            unit students often start with a model involving + and – charged entities that has several appropriate
            features about it. However, they must make refinements to account for the evidence they gather, particularly
            on the different behaviors of different types of material (conductors and insulators). They then use their
            model to consider the problem of static discharge during the refueling of a car or plane and design safety
            procedures to avoid this.

        </p>

        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/studio-mse.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop