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
        <h3>Matter and Interactions Module</h3>
        <p>The main purpose of this module is to introduce students to theories and models that can help explain some of
            the properties of materials, changes in those properties, and interactions between materials. The 'small
            particle theory' is used in the Physical Changes Unit to account for the properties of gases, liquids, and
            solids, and changes in state. In each of these physical changes the identities of the materials as well as
            their mass remains the same. In the Chemical Reactions Unit, students consider situations where the
            identities of the materials change. They learn how to classify materials according to macroscopic
            properties, and learn that mass is conserved even during chemical reactions. Students then learn about the
            small particle theory for chemical reactions, and how elements and compounds are composed of small
            particles—atoms, molecules, and formula units. They can then 'explain' why mass is conserved in chemical
            reactions (or physical changes) in terms of these small particles. Students then explore how materials are
            classified and organized according to their physical and chemical properties (Periodic Table), and how the
            organization can be explained in terms of atoms and ions and the behavior of valence electrons. Finally,
            they use a simple model to describe ionic and covalent bonds and explain (in simple cases) the chemical
            composition of molecules and formula units. </p>
        <p>
            For a viewable-only version of all the student lessons for this module,
            <a href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/lecture/Module_MI_Lecture-Style_watermark.pdf" target="_blank">
                click here</a>. These copies cannot be distributed to students, but are for your use only.</p>
        <h4>Unit PC: Physical Changes</h4>
        <p>The purpose of this unit is to introduce students to the small particle theory of gases, liquids, and solids.
            They observe movies of macroscopic phenomena and computer simulations of those phenomena, and then try to
            explain the phenomena in terms of the small particle theory. The focus is on physical changes only, not
            chemical reactions. Therefore, the internal structure of 'particles' (atoms and molecules) is not relevant.
            Students first consider gases and investigate changes in the macroscopic quantities of pressure, volume,
            temperature, and mass. This leads them to a statement of the 'Gas Properties Relationship' (a form of the
            Ideal Gas Law). They are then introduced to the small particle theory of gases, and how to 'explain'
            macroscopic changes in gases in terms of small particles. They learn that temperature is related to the
            average kinetic energy of particles and that the 'Gas Properties Relationship' has a small particle
            accounting, the 'SPT Gas Properties Relationship.' Then they consider liquids, solids, and changes of state,
            first exploring macroscopic relationships and then explaining them in terms of small particle theory. </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])


        <h4>Unit CR: Chemical Reactions</h4>
        <p>
            In Unit PC, students used the small particle model to explain changes to materials (gases, liquids or
            solids) that do not involve changes to the physical identities of the materials. In this unit, they explore
            what happens when materials interact in a way such that their chemical identities change. These interactions
            are called chemical reactions. </p>
        <p>
            Students learn about the evidence supporting the claim that a chemical reaction has occurred. Then they
            learn to classify materials as elements, compounds, and homogenous and heterogeneous mixtures according to
            macroscopic criteria. Next they gather evidence to conclude that mass is conserved during chemical
            reactions. Then they learn about the small particle theory of chemical reactions, and that elements and
            compounds are composed of small particles—atoms, molecules, and formula units. They become familiar with
            both pictorial and chemical equation representations of reactions, which 'explain' conservation of mass
            during reactions in terms of small particles, and consider energy transfer in both exothermic and
            endothermic reactions. </p>
        <p>Students learn about how elements can be classified and organized, and develop a general understanding of the
            organization of the Periodic Table. Then they learn how the macroscopic organization of the Periodic Table
            can be simply 'explained' in terms of atoms, ions, and the behavior of valence electrons. They use the Dot
            Diagram Model to describe both ionic and covalent bonding, which provides students with insight into why
            molecules or formula units are comprised of very specific numbers of different atoms. Finally, they use what
            they have learned to evaluate explanations of chemical and physical phenomena. </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop


@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/lecture-mi.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop