@extends('layouts.two-column')

@section('pageTitle', 'Modules &amp; Units')
@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')

    <section class="html-content">
        <p>The
            <em>Next Gen PET</em>
           set of materials includes ten content units, organized into five modules focusing on developing models for magnetism and static electricity, energy, forces, waves (including sound and light), and chemistry. The units include
            <em>engineering design activities</em>
           that require application of the unit’s physical science content. There are also two sets of optional materials: Teaching and Learning and Planning and Conducting Investigations. The
            <em>teaching and learning</em>
           activities are designed to help students make explicit connections between their own learning; the learning and teaching of children in elementary school; and the core ideas, science and engineering practices, and crosscutting concepts of the NGSS. The
            <em>planning and conducting investigations</em>
           activities help students plan and conduct experimental investigations.
        </p>
        <p>All the materials are available in two versions: one for small, studio-style classes that are able to accommodate extensive laboratory work and discussion, and one for lecture-style classes. Both versions use the same extensive set of online tutorial-style homework assignments, called
            <em>Extensions</em>
           .
        </p>
        <p>Instructors can choose which units to include in their courses, whether or not to include
            <em>Engineering Design</em>
           activities, whether or not to include
            <em>Teaching and Learning</em>
           activities, whether or not to include
            <em>Planning and Conducting Investigations</em>
           activities, and which instructional format to use (or whether to use a combination of formats). This allows instructors to tailor their course to match their content focus, meeting times, classroom settings, and students’ interests.
        </p>

        <p>Below are brief summaries of the ten units within the five content modules. The units can be ordered individually from
            <em>Activate Learning</em>
           .
        </p>
        <h4>MODULE MSE: Developing Models for Magnetism and Static Electricity</h4>
        <p>
            <em>Either Unit M or Unit SE can be implemented by itself, independent of the other unit.</em>
        </p>
        <ul>
            <li>
                <strong>Developing a Model of Magnetism</strong>
                (Unit M) has students iteratively propose, test, and revise models for magnetism. They ultimately arrive at the "alignment model," which can explain all the class observations (the alignment model is similar to the domain model, but simpler).
            </li>
            <li>
                <strong>Developing a Model of Static Electricity</strong>
                (Unit SE) engages students in a model-building process for static electric phenomena, where they separately develop models to account for the behavior of non-conducting and conducting materials.
            </li>
        </ul>
        <h4>MODULE IE: Interactions and Energy</h4>
        <p>
            <em>Although Unit EM can be implemented by itself, it is a pre-requisite for Unit PEF.</em>
        </p>
        <ul>
            <li>
                <strong>Energy Model of Interactions</strong>
                (Unit EM) has students explore energy concepts in various interactions, including contact interactions (pushes, pulls, and friction), heat interactions, and electric circuits. Giver/receiver energy diagrams are used to describe the transfer or transformation of energy. Conservation of energy is introduced early in the case of two objects interacting, and then expanded to account for more complex chains of interactions between multiple objects (including the surroundings). The model is ultimately made quantitative.
            </li>
            <li>
                <strong>Potential Energy and Fields</strong>
                (Unit PEF) introduces potential energy in the context of elastic objects, and then builds off this concrete example to introduce potential energy associated with non-contact forces (magnetism, static electricity, and gravity). The concept of fields is used as a model for action at a distance and the associated potential energies.
            </li>
        </ul>
        <h4>MODULE IF: Interactions and Forces</h4>
        <p>
            <em>Unit FM is a pre-requisite for Unit CF. Both units are usually implemented together.</em>
        </p>
        <ul>
            <li>
                <strong>Force Model of Interactions</strong>
                (Unit FM) treats interactions, forces, and motion for single forces. The unit begins by introducing forces and their relationship with interactions and energy. The connection between force and motion is explored for short-duration forces, continuous forces, and backward forces; later, the effects of mass and force strength are included. These are synthesized into Newton’s Second Law. The unit ends with a treatment of the vertical motion of falling objects (ignoring air resistance).
            </li>
            <li>
                <strong>Combinations of Forces</strong>
                (Unit CF) extends Newton’s Second Law to multiple forces. Students examine combinations of forces, including balanced and unbalanced forces, to arrive at the idea of net force (and Newton’s First Law). The unit includes a treatment of the horizontal motion of objects experiencing frictional forces, and the vertical motion of falling objects with air resistance. The unit culminates with Newton’s Third Law.
            </li>
        </ul>
        <h4>MODULE WSL: Waves, Sound and Light</h4>
        <p>
            <em>Either Unit WS or Unit L can be implemented by itself, independent of the other unit.</em>
        </p>
        <ul>
            <li>
                <strong>Mechanical Waves and Sound</strong>
                (Unit WS) starts with pulses and then introduces the wave model for continuous waves. Refraction, reflection, water waves, sound waves, and seismic waves are all treated.
            </li>
            <li>
                <strong>Light and Color</strong>
                (Unit L) includes a brief discussion of electromagnetic waves, but mainly focuses on phenomena involving visible light using a ray model: pinholes and shadows, reflection, refraction, and color.
            </li>
        </ul>
        <h4>MODULE MI: Matter and Interactions</h4>
        <p>
            <em>Although Unit PC can be implemented by itself, it is a pre-requisite for Unit CR.</em>
        </p>
        <ul>
            <li>
                <strong>Physical Changes</strong>
                (Unit PC) focus on the application of the small particle theory (SPT) to account for physical properties and changes in materials. It begins with gases; the relationships between pressure, volume, temperature, and the amount of gas; and SPT as an explanatory model. The second half of Unit PC deals with the SPT for liquids and solids; thermal expansion and contraction; and changes of state.
            </li>
            <li>
                <strong>Chemical Reactions</strong>
                (Unit CR) deals with types of matter (mixtures, elements, and compounds); physical changes versus chemical reactions; and conservation of mass and energy in chemical reactions. Students connect the macroscopic properties of matter with the SPT. The unit culminates with the atomic model as a basis for organizing the periodic table and describing different types of molecular bonds.
            </li>
        </ul>
    </section>

@stop