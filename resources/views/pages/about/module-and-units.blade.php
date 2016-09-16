<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.partials.meta')
        @include('layouts.partials.styles')
    </head>
    <body>
        
        @include('layouts.partials.mobile_nav')
        
        @include('layouts.partials.header')
        
        @include('layouts.partials.title')
        
        
        @include('home._slider')
        
        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Overview</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 visible-md visible-lg">
                    @include('home._sidebar')
                </div>
                <div class="col-md-8">
                    <section class="html-content">
                        <h3>Modules &amp; Units</h3>
    
    
                        <p>
                        <em>Next Gen PET</em> consists of five modules: (1) Module MSE: Developing Models for Magnetism and Static Electricity; (2) Module IE: Interactions and Energy; (3) Module IF: Interactions and Forces; (4) Module WSL: Waves, Sound and Light; and (5) Module MI: Matter and Interactions. Each module includes two engineering design activities requiring application of the module’s physical science content.
                        </p>
                        
                        <p>
                        <em>Next Gen PET</em> also includes <em>Teaching and Learning activities</em> to help students make explicit connections between their own learning; the learning and teaching of children in elementary school; and the core ideas, science and engineering practices, and crosscutting concepts of the NGSS.
                        </p>
                        <p>
                        Each module has two versions, one for small, studio-style classes that are able to accommodate extensive laboratory work and discussion, and one for lecture-style classes. Both versions use the same extensive set of online tutorial-style homework assignments, called <em>Extensions</em>.
                        </p>
                        <p>
                        Instructors can choose which modules to include, whether or not to include <em>Engineering Design</em> activities, whether or not to include <em>Teaching and Learning activities</em>, and which instructional format to use. This allows instructors to tailor their course to match their content focus, meeting time, classroom setting, and students’ interests.
                        </p>
                        <h3>Module MSE</h3>
                        <p>
                        Module MSE focuses on developing models for magnetism and static electricity. In the first unit, students iteratively propose, test, and revise models for magnetism. They ultimately arrive at the “alignment model,” which can explain all the class observations (the alignment model is similar to the domain model, but simpler). The second unit engages students in a similar process for static electric phenomena. Developing these explanatory models engages students in several practices of the Next Generation Science Standards, notably developing and using models, and promotes the crosscutting concept <em>cause and effect: mechanism and explanation</em>.
                        </p>
                        <h3>Module IE</h3>
                        <p>
                        Module IE deals with energy in the context of different types of interactions, kinetic and potential energy, conservation of energy, and fields. In Unit EM, students explore energy concepts in various interactions, including contact interactions (pushes, pulls, and friction), heat interactions, and electric circuits. Giver/Receiver Energy diagrams are used to describe the transfer or transformation of energy. Conservation of energy is introduced early in the case of two objects interacting, and then expanded to account for more complex chains of interactions between multiple objects (including the surroundings). The model is ultimately made quantitative.
                        </p>
                        <p>
                        Unit PEF introduces potential energy in the context of elastic objects, and then builds off this concrete example to introduce potential energy associated with non-contact forces (magnetism, static electricity, electromagnetism, and gravity). The concept of fields is used as a model for action at a distance and the associated potential energies.
                        </p>
                        <h3>Module IF</h3>
                        <p>
                        Module IF focuses on interactions and forces. Unit FM treats interactions, force, and motion for single forces; Unit CF deals with combinations of forces. Unit FM begins by introducing forces and their relationship with interactions and energy. The connection between force and motion is explored for short-duration forces, continuous forces, and backward forces; later the effects of mass and force strength are included. These are synthesized into Newton’s second law. The unit ends with a treatment of the vertical motion of falling objects (ignoring air resistance).
                        </p>
                        <p>
                        In Unit CF, students examine combination of forces, including balanced and unbalanced forces, arriving at the idea of net force. The unit includes a treatment of the horizontal motion of objects experiencing frictional forces, and the vertical motion of falling objects with air resistance. The unit culminates with Newton’s third law.
                        </p>
                        <h3>Module WSL</h3>
                        <p>
                        Module WSL begins with mechanical waves and sound (Unit WS), starting with pulses and then introducing the wave model for continuous waves. Refraction, reflection, water waves, sound waves, and seismic waves are all treated. Unit L covers light. It includes a brief discussion of electromagnetic waves, but mainly focuses on phenomena involving visible light using a ray model: pinholes and shadows, reflection, refraction and color.
                        </p>
                        <h3>Module MI</h3>
                        <p>
                        The Matter and Interactions module includes a unit on physical changes (Unit PC) and chemical reactions (Unit CR). The small particle theory (SPT), or sometimes the small particle model, is a major focus of the module. Unit PC begins with gasses; the relationships between pressure, volume, temperature, and amount of gas; and SPT as an explanatory model. The second half of Unit PC deals with the SPT for liquids and solids, and changes of state.
                        </p>
                        <p>
                        Unit CR deals with types of matter (elements, mixtures, and compounds), physical changes versus chemical reactions, and conservation of mass. Students connect the macroscopic properties of matter with the SPT. The unit culminates with the atomic model as a basis for organizing the periodic table.
                        </p>
                    </section>
                </div>
            </div>
        </div>
        
        @include('layouts.partials.footer')
        @include('layouts.partials.scripts')
    </body>
</html>
