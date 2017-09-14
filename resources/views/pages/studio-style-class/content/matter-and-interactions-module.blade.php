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
        <h3>Matter and Interactions Module</h3>
        <p>
            The main purpose of this module is to introduce students to theories and models that can help explain some
            of the properties of materials, changes in those properties, and interactions between materials. The ‘small
            particle theory’ is used in the Physical Changes Unit to account for the properties of gases, liquids, and
            solids, and changes in state. In each of these physical changes, the identities of the materials, as well as
            their masses, remain the same. In the Chemical Reactions Unit, students consider situations where the
            identities of the materials change. They learn how to classify materials according to macroscopic
            properties, and learn that mass is conserved even during chemical reactions. Students then learn about the
            small particle theory for chemical reactions, and how elements and compounds are composed of small
            particles—atoms, molecules, and formula units. They can then ‘explain’ why mass is conserved in chemical
            reactions (or physical changes) in terms of the same number of atoms of the reactants and products in the
            chemical reaction. Students then explore how materials are classified and organized according to their
            physical and chemical properties (Periodic Table), and how the organization can be explained in terms of
            atoms and ions and the behavior of valence electrons. Finally, they use a simple model to describe ionic and
            covalent bonds and explain (in simple cases) the chemical composition of molecules and formula units.
        </p>
        
        <h4>Unit PC: Physical Changes</h4>
       
        <p>The purpose of this unit is to introduce students to the small particle theory of gases, liquids, and solids.
            Through experiments, demonstrations, and movies, they observe macroscopic phenomena and then, with the aid
            of computer simulations, try to explain the phenomena in terms of small particle theory (SPT). The focus is
            on physical changes only, not chemical reactions. Therefore, the internal structure of ‘particles’ (atoms
            and molecules) is not relevant. Students first consider gases and investigate changes in the macroscopic
            quantities of pressure, volume, temperature, and mass. This leads them to a mathematical statement of the
            relationship between these quantities (the Ideal Gas Law). They are also introduced to the small particle
            theory of gases, and how to ‘explain’ macroscopic changes in gases in terms of small particles. They learn
            that the macroscopic relationship they found has a small particle accounting. Then they consider liquids,
            and the change of state from gas to liquid; and they examine the differences between the SPT for liquids and
            gases. They are introduced to the concept of characteristic physical properties, which are unique for
            different forms of matter and can be used to distinguish substances from one another. They focus
            particularly on the characteristic property of density. Students also examine solids in terms of the SPT,
            and the differences between solids and liquids. They examine the role of energy in physical changes, and
            come up with energy models for the heating and cooling of substances, and for changes of state between
            solids, liquids, and gases. Finally, students use the class summary ideas to develop explanations of
            everyday physical changes.
        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])
        <h4>Unit CR: Chemical Reactions</h4>
        <p>
            In Unit PC, students used the small particle model to explain changes to materials (gases, liquids or
            solids) that do not involve changes to the physical identities of the materials. In this unit, they explore
            what happens when materials interact in a way such that their chemical identities change. These interactions
            are called chemical reactions.
        </p>
        <p>
            Students learn about the evidence supporting the claim that a chemical reaction has occurred. Then they
            learn to classify materials as pure substances (elements and compounds), and mixtures (solutions and
            heterogeneous mixtures) according to macroscopic criteria. Next they gather evidence to conclude that mass
            is conserved during chemical reactions as well as during physical changes. Then they learn about the small
            particle theory of chemical reactions, and that elements and compounds are composed of small
            particles—atoms, molecules, and formula units. They become familiar with both pictorial and chemical
            equation representations of reactions, which ‘explain’ conservation of mass during reactions in terms of
            small particles, and consider energy transfer in both exothermic and endothermic reactions.
        </p>
        <p>
            Students learn about how elements can be classified and organized, and develop a general understanding of
            the organization of the Periodic Table. Then they learn how the macroscopic organization of the Periodic
            Table can be simply ‘explained’ in terms of atoms, ions, and the behavior of valence electrons. They use the
            Lewis Dot Diagram Model to describe both ionic and covalent bonding, which provides students with insight
            into why molecules or formula units are comprised of very specific numbers of different atoms. Finally, they
            use what they have learned to explain everyday chemical and physical phenomena.
        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop
@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/studio-mi.js') }}"></script>
@stop