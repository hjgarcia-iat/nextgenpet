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
        The <em>Framework for K-12 Science Education</em> and <em>NGSS</em> include Science and Engineering Practices. According to the Framework, "Engineering and technology are featured alongside the natural sciences...for two critical reasons: (1) to reflect the importance of understanding the human-built world and (2) to recognize the value of better integrating the teaching and learning of science, engineering, and technology." Engineering practices largely overlap with scientific practices. Scientists pose questions and answer them through inquiry, while engineers specify problems and solve them through design. This distinction is reflected in two of the eight NGSS practices: asking questions (for science) and defining problems (for engineering); and constructing explanations (for science) and designing solutions (for engineering).
        </p>
        <p>
        The inclusion of engineering practices is new for many teachers. To help prepare future teachers, each <em>Next Gen PET</em> module includes one or two engineering design activities that require application of the module's physical science content, and engage students in the engineering practices promoted in the NGSS. The engineering design challenges provide an opportunity for students to apply the physical science they have learned toward solving a practical problem. Each challenge involves engineering practices from the <em>NGSS</em>.
        </p>
        <p>
        Below is a list of <em>Next Gen PET</em>'s eleven engineering design challenges and how they connect to the modules. The label 'SC' indicates that the activity is used in the studio-style class version of the curriculum only, not the lecture-style class version.
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
                        <td><strong>Is the US Losing Its Edge?</strong> Students apply a model of magnetism to design a magnetic levitation system.</td>
                    </tr>
                    <tr>
                        <td>Unit SE: Developing a Model for Static Electricity (SC)</td>
                        <td><strong>Refueling Safety</strong>: Students consider why static discharge when refueling a car, and then develop procedures and devices for safe aircraft refueling.</td>
                    </tr>
                    
                    <tr>
                        <td>Unit EM: Energy-based Model for Interactions</td>
                        <td><strong>No More Cold Showers</strong>. Students design a solar shower that is energy efficient, warming the water efficiently and keeping it warm for long periods of time.</td>
                    </tr>
                    <tr>
                        <td>Unit PEF: Potential Energy and Fields (SC)</td>
                        <td><strong>Story Energy from Braking</strong>: After considering how different interactions could be used to slow a moving vehicle and store its energy for recovery later, students design a system based on an electrical capacitor.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit FM: Force-based Model for Interactions (SC)</td>
                        <td><strong>A Better Car Bumper</strong>: Students consider the function of a low-impact car bumper, and then incorporate it in a bumper design.</td>
                    </tr>
                    <tr>
                        <td>Unit CF #1: Combinations of Forces</td>
                        <td>
                            <em>Safety on the Docks</em>: Conduct a series of online simulations of forces and motion to develop safety lessons for dockworkers.
                        </td>
                    </tr>
                    <tr>
                        <td>Unit CF: Combinations of Forces</td>
                        <td><strong>Inspiration from Nature</strong>: Students modify the design of a 'Whirligig' so that if falls much more slowly.</td>
                    </tr>
                    <tr>
                        <td>Unit WS: Mechanical Waves and Sound (SC)</td>
                        <td><strong>Locating an Earthquake</strong>. Students design an array of seismometers that will help them locate the epicenter of an earthquake.</td>
                    </tr>
                    <tr>
                        <td>Unit L: Electromagnetic Waves and Light</td>
                        <td><strong>Measuring the Moon's Distance</strong>. After reading about lunar laser ranging, students design a combination of mirrors in both two and three dimensions that will reflect an incoming light beam back parallel to itself for a range of incident angles.</td>
                    </tr>
                    <tr>
                        <td>Unit PC: Physical Changes</td>
                        <td><strong>Evaluate Ballonet Designs</strong>. A ballonet is an inflatable balloon inside a blimp that enables the blimp to rise and fall and maintain pressure while the temperature of the air changes during the day. Students compare different designs to see which will do the job.</td>
                    </tr>
                    <tr>
                        <td>Unit CR: Chemical Reactions (SC)</td>
                        <td><strong>Which Hand Warmer is for Me?</strong> A Pugh Chart or Decision Matrix is a systematic way to choose a solution to a problem. In this task students choose between several different chemical hand warmers.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    
    </section>
@stop