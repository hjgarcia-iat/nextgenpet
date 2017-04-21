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
        <h3>Waves, Sound &amp; Light Module</h3>
        <p>
            The main purpose of this module is to introduce students to a wave model by studying different types of
            waves and phenomena that can be explained in terms of waves. In the unit on waves and sound (Unit WS),
            students are introduced to properties of mechanical waves in one dimension (waves along a string or spring),
            two dimensions (water waves) and three dimensions (sound waves and earthquake waves). Wave properties
            include amplitude, frequency, wavelength, and wave speed. They also learn about both transverse and
            longitudinal waves. The unit on light (Unit L) begins with a very brief introduction to electromagnetic
            waves, describing visible light as an example. In the remainder of the first lesson students use the light
            ray model to explore pinhole and shadow phenomena. They continue using the light ray model to learn about
            reflection and refraction of light. In the fourth lesson they learn about how the eye/brain system perceives
            color and explore both color addition of lights and color subtraction with color filters. Students can
            perform some simple experiments in the first and fourth lessons of Unit L, but if the materials are not
            available, the instructor can show movies of all the experiments.

        </p>
        <p>
            For a viewable-only version of all the student lessons for this module,
            <a href="https://s3.amazonaws.com/nextgenpet/web-docs/content-modules/lecture/Module_WSL_Lecture-Style_watermark.pdf" target="_blank">
                click here</a>. These copies cannot be distributed to students, but are for your use only.</p>
        <h4>Unit WS: Mechanical Waves and Sound</h4>
        <p>This unit introduces students to a wave model. In its three lessons, they learn about the properties of
            (mechanical) waves in one dimension (waves along a string), two dimensions (water waves), and three
            dimensions (sound waves). Rather than perform experiments, students collect their evidence from movies of
            PhET simulations. They learn about transverse and longitudinal waves; that the frequency of the wave is the
            same as that of the source; that the wave speed depends only on the properties of the medium; and that for a
            constant wave speed, the frequency and wavelength are inversely related. In the homework extensions for this
            unit, they learn about people waves, reflection and refraction of water waves, and earthquake waves. </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])
        <h4>Unit L: Light and Color</h4>
        <p>At the start of the first lesson, students are told that light is a special type of wave motion known as an
            electromagnetic wave, and that visible lights waves are electromagnetic waves in a specific range of
            frequencies/wavelengths. Then students are told to assume that light travels in straight lines and that its
            behavior can be represented by drawing light ray diagrams. Students then investigate pinhole images and
            simple shadows and consider how their presence provides evidence for the straight-line behavior of light. In
            the second lesson, students study reflection of light from both shiny surfaces (Law of Reflection) and from
            non-shiny white surfaces, like a piece of white paper. Extension B provides additional contexts for students
            to study how light behaves when reflecting, including how mirror images are formed. In the third lesson,
            students use a simple approximation to Snell’s Law of Refraction to describe how light changes direction
            when traveling between air and a transparent solid or liquid material. Finally, in Lesson 4 students study
            light and color. They are told to approximate the color spectrum by assuming it consists of three bands
            corresponding to different ranges of wavelengths: red band for the longest wavelengths, green for the middle
            range, and blue band for the shortest. After a description of the three-color receptors in the eye
            responsible for the first stage in the perception of color, students learn about color addition of lights.
            Finally they explore how color gels work, rules for color subtraction, and how color objects are perceived
            as specific colors. In the engineering design lesson, students design a system of mirrors (retro reflector)
            that can reflect light that is parallel to the incoming light. In this unit students can perform some simple
            hands-on experiments and then watch movies of other experiments (more challenging to do), or they can watch
            movies of all the experiments. </p>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
    </section>
@stop


@section('scripts')
    <script src="{{ asset('js/vis.min.js') }}"></script>
    <script src="{{ asset('js/contentjs/lecture-wsl.js') }}"></script>
@stop

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/vis.min.css') }}">
@stop