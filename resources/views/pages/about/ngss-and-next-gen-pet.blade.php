@extends('layouts.two-column')

@section('pageTitle','NGSS and Next Gen PET')

@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')
    
    <section class="html-content">
        <p>
        The
        <em>Next Gen PET</em> materials are aligned with the physical science disciplinary core ideas, crosscutting concepts, and science and engineering practices in the National Research Council (NRC) K-12 Science Education Framework and Next Generation Science Standards (NGSS). The tables below provide more information on this alignment.
        <em>Next Gen PET</em> students will be prepared for teaching elementary-level science in alignment with the NGSS. However,
        <em>Next Gen PET</em> can be used to prepare teachers for teaching with any state standards that include a focus on both science content and practices.
        </p>
        <p>
        <em>Next Gen PET</em> consists of five modules: (1) Module MSE: Developing Models for Magnetism and Static Electricity; (2) Module IE: Interactions and Energy; (3) Module IF: Interactions and Forces; (4) Module WSL: Waves, Sound and Light; and (5) Module MI: Matter and Interactions. Each module includes two engineering design activities requiring application of the module’s physical science content.
        </p>
        <p>
        The Teaching & Learning Activities (see Overview link) explicitly address the Science and Engineering Practices and the Crosscutting Concepts.
        </p>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NGSS DCI</th>
                        <th>NGP module</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>PS2.B: Types of Interactions</td>
                        <td>MSE: Magnetism and Static Electricity; <br>IF: Interactions and Forces</td>
                    </tr>
                    <tr>
                        <td>PS3: Energy</td>
                        <td>IE: Interactions and Energy</td>
                    </tr>
                    <tr>
                        <td>PS2: Motion and Stability: Forces and Interactions</td>
                        <td>IF: Interactions and Forces</td>
                    </tr>
                    <tr>
                        <td>PS4: Waves and Their Applications</td>
                        <td>WSL: Waves, Sound, and Light</td>
                    </tr>
                    <tr>
                        <td>PS1: Matter and Its Interactions</td>
                        <td>MI: Matter and Interactions</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3>Science and Engineering Practices</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NGSS SEP</th>
                        <th>NGP module</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Asking questions / Defining Problems</td>
                        <td>All modules</td>
                    </tr>
                    <tr>
                        <td>Developing and using models</td>
                        <td>MSE focuses on developing and using models; students primarily use models in other modules</td>
                    </tr>
                    <tr>
                        <td>Planning and carrying out investigations</td>
                        <td>Students carry out investigations in all modules</td>
                    </tr>
                    <tr>
                        <td>Analyzing and interpreting data</td>
                        <td>All modules</td>
                    </tr>
                    <tr>
                        <td>Using mathematics and computational thinking</td>
                        <td>Students use some mathematics and computational thinking in IE, IF, and WSL</td>
                    </tr>
                    <tr>
                        <td>Constructing explanations / Designing solutions</td>
                        <td>All modules (especially in the studiostyle class version)</td>
                    </tr>
                    <tr>
                        <td>Engaging in argument from evidence</td>
                        <td>All modules</td>
                    </tr>
                    <tr>
                        <td>Obtaining, evaluating, and communicating information</td>
                        <td>All modules</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <h3>Crosscutting concepts</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NGSS CC</th>
                        <th>NGP module</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Patterns</td>
                        <td>All modules</td>
                    </tr>
                    <tr>
                        <td>Cause and effect: mechanism and explanation</td>
                        <td>All modules, especially MSE</td>
                    </tr>
                    <tr>
                        <td>Scale, proportion, and quantity</td>
                        <td>IE, IF, WSL, MI</td>
                    </tr>
                    <tr>
                        <td>Systems and system models</td>
                        <td>All modules, especially IE</td>
                    </tr>
                    <tr>
                        <td>Energy and Matter: Flows, cycles, and conservation</td>
                        <td>All modules, especially IE and MI</td>
                    </tr>
                    <tr>
                        <td>Structure and function</td>
                        <td>MSE, WSL, and MI</td>
                    </tr>
                    <tr>
                        <td>Stability and change</td>
                        <td>All modules, especially IF</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    @stop