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
        <h3>Waves, Sound &amp; Light Module</h3>
        <p>
            The main purpose of this module is to introduce students to a wave model, studying different types of waves and phenomena that can be explained in terms of waves. In the unit on waves and sound (UWS), students are introduced to properties of mechanical waves in one dimension (pulses (A1) and waves (A2) along a string or spring), two dimensions (A3, water waves) and three dimensions (A4, sound waves and A5, earthquake waves). Wave properties include amplitude, frequency, wavelength, and wave speed. They also learn about both transverse and longitudinal waves. The unit on light (UL) begins (in A1) with a very brief introduction to electromagnetic waves, describing visible light as an example. In the remainder of L1 students use the light ray model to explore pinhole and shadow phenomena. They continue using the light ray model to learn about reflection (A2) and refraction (A3) of light. In UL A4 they learn about how the eye/brain system perceives color and explore both color addition of lights and color subtraction with color filters. Engineering design activities include UWS A5, where students design a method for locating an earthquake, and UL A5, where they design a method using light to measure the
        </p>
        <h4>Unit WS: Mechanical Waves and Sound</h4>
        <p>
            This unit introduces students to a wave model. In its five lessons, they learn about the properties of (mechanical) waves in one dimension (pulses and waves along a string), two dimensions (water waves), and three dimensions (sound waves and earthquake waves). Rather than perform experiments, students collect their evidence from movies of PhET simulations. They learn about transverse and longitudinal waves; that the frequency of the wave is the same as that of the source; that the wave speed depends on the properties of the medium; and that for a constant wave speed, the frequency and wavelength are inversely related. In the homework extensions for this unit, they learn about people waves, reflection and refraction of water waves, and earthquake waves.

        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])

        <h4>Unit L: Light and Color</h4>
        <p>
            In Activity 1, students are told that light is a special type of wave motion known as an electromagnetic wave. Unlike mechanical waves, electromagnetic waves do not require a medium to travel through. Visible light occupies of tiny fraction of the entire range of electromagnetic waves, and within that range the different frequencies (wavelengths) of light are perceived as different colors.
        </p>
        <p>
            Students are told to assume that light travels in straight lines and that its behavior can be represented light ray diagrams. Students then investigate pinhole images and shadows and consider how their presence provides evidence for the straight-line behavior of light. Extension A provides additional practice drawing light ray diagrams for pinholes and shadows. In Activity 2, students study reflection of light from both shiny surfaces (Law of Reflection) and from non-shiny white surfaces, like a piece of paper. Extension B provides additional contexts for students to study how light behaves when reflecting, including how mirror images are formed. In Activity 3, students use a simple approximation to Snell’s Law of Refraction to describe how light changes direction when traveling between air and a transparent solid or liquid material.
        </p>
        <p>
            Finally, in Activity 4 students study light and color. They are told to approximate the color spectrum by assuming it consists of three bands: red for the longest wavelengths, green for the middle range, and the blue for the shortest. After a description of the three-color receptors in the eye, students learn about color addition of lights. Then they explore how color gels work, rules for color subtraction, and how color objects are perceived as specific colors. Activity 5 uses what students learned about reflection of light in an engineering design challenge to build a retroreflector that turns around a beam of light so that it travels back in the direction it came. Such a device could be used to measure the distance between Earth and the Moon.
        </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop

@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/studio-wsl.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet"
          href="{{ asset('css/vis.min.css') }}">
@stop