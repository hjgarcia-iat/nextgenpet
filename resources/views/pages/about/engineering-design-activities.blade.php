@extends('layouts.two-column')

@section('pageTitle')
   Engineering Design Activities
@stop
@section('sidebar')
    @include('home._sidebar')
@stop
@section('banner')
    @include('home._slider')
@stop

@section('content')
    <section class="html-content">
        <p>
        The <em>Framework for K-12 Science Education</em> and NGSS include Science and
        <em>Engineering Practices</em>. According to the Framework, "Engineering and technology are featured alongside the natural sciences... for two critical reasons: (1) to reflect the importance of understanding the human-built world and (2) to recognize the value of better integrating the teaching and learning of science, engineering, and technology." Engineering practices largely overlap with scientific practices. Scientists pose questions and answer them through inquiry, while engineers specify problems and solve them through design. This distinction is reflected in two of the eight NGSS practices: asking questions (for science) and defining problems (for engineering); and constructing explanations (for science) and designing solutions (for engineering).
        </p>
        <p>
        The inclusion of engineering practices is new for many teachers. To help prepare future teachers, each
        <em>Next Gen PET</em> module includes two or three engineering design activities that require application of the module’s physical science content, and engage students in the engineering practices promoted in the NGSS. The engineering design challenges provide an opportunity for students to apply the physical science they have learned toward solving a practical problem. Each challenge involves engineering practices from the NGSS.
        </p>
        <p>
        Below is a list of
        <em>Next Gen PET</em>’s eleven engineering design challenges and how they connect to the modules.
        </p>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Units within Modules</th>
                        <th>Engineering Design Challenges</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-md-3">Unit M: Developing a Model for Magnetism</td>
                        <td>
                            <strong>Is the US Losing Its Edge?</strong> Apply a model of magnetism to prevent accidents on maglev trains.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit SE: Developing a Model for Static Electricity</td>
                        <td>
                            <em>Refueling Safety</em>: Design a safety device to avoid explosions on airplanes during refueling due to static electricity
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Unit EM: Energy-based Model for Interactions</td>
                        <td>
                            <em>No More Cold Showers</em>. The task is to decide which device will be more effective at providing warm water without electricity
                        </td>
                    </tr>
                    <tr>
                        <td>Unit PEF: Potential Energy and Fields</td>
                        <td>
                            <em>The Head Butt Dilemma</em>: Make a decision about whether to ban teens from head butting during soccer or allowing it but requiring them to use headgear.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit FM: Force-based Model for Interactions</td>
                        <td>
                            <em>Fuel Efficiency Standards</em>: Decide from among competing ideas for how to enable an auto company’s products to meet new federal fuel efficiency standards.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit CF #1: Combinations of Forces</td>
                        <td>
                            <em>Safety on the Docks</em>: Conduct a series of online simulations of forces and motion to develop safety lessons for dockworkers.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit CF #2: Combinations of Forces</td>
                        <td>
                            <em>Inspiration from Nature</em>: Design a landing craft inspired by a maple seed; with a hands-on extension.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit WS: Mechanical Waves and Sound</td>
                        <td>
                            <em>Seafloor Mapping</em>. Analyze aerial images of wave patterns to locate shallow regions so as to provide warnings for ships navigating the continental shelf.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit L: Electromagnetic Waves and Light</td>
                        <td>
                            <em>Seeing Around Corners</em>. Build a simple periscope, then design a different periscope that is more complex. Study images of images in a two-mirror system.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit PC: Physical Changes</td>
                        <td>
                            <em>Evaluate Ballonet Designs</em>. A ballonet is an inflatable balloon inside a blimp, which maintains pressure while the temperature of the air changes during the day. The task is to compare different designs to see which will do the job.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit CR: Chemical Reactions</td>
                        <td>
                            <em>Which Hand Warmer is for Me</em>? A Pugh Chart or Decision Matrix is a systematic way to choose a solution to a problem. The example given is to choose between several different chemical hand warmers.
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    
    </section>
@stop