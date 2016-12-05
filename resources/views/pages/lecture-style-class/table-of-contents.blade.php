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
        <h3>Table of Contents with Time Estimates</h3>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>L#</th>
                        <th>Lesson (L) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Magnetism and Static Electricity Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><em>Unit M: Developing a Model for Magnetism (~7 Hours)</em></td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Modeling and the Mystery Tube</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>L2</td>
                        <td>Exploring Magnetic Effects</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext A<sup>1</sup></td>
                        <td>Exploring the Region Around a Magnet</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Developing a Model for Magnetism</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Evaluating Magnetism Models</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Better Model for Magnetism</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>L5</td>
                        <td>Explaining Phenomena involving Magnetism</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>L6 ED</td>
                        <td>Engineering Design: Is the US Losing Its Edge?</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>L7 (optional)</td>
                        <td>Exploring Static Electrics Effects [Only for classes not doing Unit SE]</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><em>Unit SE: Developing a Model for Static Electricity (~5 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Exploring Static Electric Effects</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Which Charge is Which?</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>The Law of Electric Charges</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L2</td>
                        <td>Developing a Model for Static Electricity</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Representing Uncharged Objects in Your Model</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Electroscope and Negatively (–) Charged Object</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>What do the Charged Entities Represent?</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Refining Your Model for Different Materials</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>What Happens When a Charged Object is Discharged?</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext F</td>
                        <td>Interactions Between Charged and Uncharged Objects</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L5</td>
                        <td>Explaining Phenomena Involving Static Electricity</td>
                        <td>45</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <sup>1</sup>Extensions (Ext’s) are online, interactive homework activities.
    
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>L#</th>
                        <th>Lesson (L) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Interactions and Energy Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><em>Unit EM: Energy-based Model for Interactions (~7.5 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Interactions and Motion</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Representing Motion on Speed-Time Graphs</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L2</td>
                        <td>Motion and Energy</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Describing Interactions in Terms of Energy</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Slowing and Stopping</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Scientific Explanations</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>Simultaneous Interactions</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Friction as an Interaction</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext F</td>
                        <td>Effects of Friction</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L5</td>
                        <td>Warming and Cooling</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Ext G</td>
                        <td>Mechanisms for Heat Interactions</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L6</td>
                        <td>Keeping Track of Energy in Electric Circuit Interactions</td>
                        <td>75</td>
                    </tr>
    
                    <tr>
                        <td>Ext H</td>
                        <td>More on Keeping Track of Energy</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L7</td>
                        <td>More on Keeping Track of Energy</td>
                        <td>65</td>
                    </tr>
                    <tr>
                        <td>L8 ED</td>
                        <td>Engineering Design: No More Cold Showers</td>
                        <td>75</td>
                    </tr>
                    
                    
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit PEF: Potential Energy and Fields (~5.5 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Elastic Objects and Energy</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>More on Elastic Energy</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L2</td>
                        <td>Comparing Magnetic and Static Electric Interactions (optional)</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>More on Magnetic and Static Electric Interactions (optional)</td>
                        <td>online</td>
                    </tr>
    
                    <tr>
                        <td>L3</td>
                        <td>Magnetic and Static Electricity Interactions and Energy</td>
                        <td>65</td>
                    </tr>
    
                    <tr>
                        <td>Ext C</td>
                        <td>Exploring Magnetic and Electric Fields</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Gravitational Interactions and Energy</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Exploring Gravitational Potential Energy</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L5</td>
                        <td>Electromagnetic Interactions</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>More on Electromagnetic Interactions</td>
                        <td>online</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
    
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>L#</th>
                        <th>Lesson (L) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Interactions and Forces Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit FM: Force-based Model for Interactions (~4.5 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Interactions, Force and Motion</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Force Diagrams</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L2</td>
                        <td>Motion with a Continuous Force</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Pushing a Skateboarder</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Pushes and Slowing Down</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Connecting Force and Energy Models</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Forces and Friction</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>How Does Friction Work?</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L5</td>
                        <td>Changing Force Strength and Mass</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>Changing Direction</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L6</td>
                        <td>Falling Objects</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit CF: Combinations of Forces (~4 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Combinations of Forces</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Newton’s Second Law</td>
                        <td>online</td>
                    </tr>
    
                    <tr>
                        <td>L2</td>
                        <td>Balanced Forces</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>More on Balanced Forces</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Situations Involving Friction</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Balanced and Unbalanced Forces</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>More on Vertical Motion (includes air drag)</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Comparing Forces During Interactions</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>Newton’s Third Law and Balanced Forces</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L5 ED</td>
                        <td>Engineering Design: Inspiration from Nature</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>L#</th>
                        <th>Lesson (L) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Waves, Sound and Light Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit WS: Mechanical Waves and Sound (~4 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Properties of Waves</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>How Do Waves Move?</td>
                        <td>online</td>
                    </tr>
    
                    <tr>
                        <td>L2</td>
                        <td>Two-Dimensional Waves</td>
                        <td>55</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>An Analogy for Refraction.</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Reflection of 2D Waves</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Sound Waves</td>
                        <td>65</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Seismic Waves</td>
                        <td>online</td>
                    </tr>
                    
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit L: Light and Color (~6 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Pinholes and Shadows</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Drawing Light Ray Diagrams for Pinholes and Shadows</td>
                        <td>online</td>
                    </tr>
                
                    <tr>
                        <td>L2</td>
                        <td>Reflection of Light</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Further Investigations of Mirror Reflections and Images</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Refraction of Light</td>
                        <td>75</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Color</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>L5 ED</td>
                        <td>Engineering Design: Measuring the Moon’s Distance</td>
                        <td>75</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>L#</th>
                        <th>Lesson (L) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Matter and Interactions Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit PC: Physical Changes (~6.5 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Pressure</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>Ext G</td>
                        <td>Effects due to air pressure</td>
                        <td>online</td>
                    </tr>
                
                    <tr>
                        <td>L2</td>
                        <td>The Small Particle Theory of Gases</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext H</td>
                        <td>Properties of Gases and SPT</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Pressure and SPT</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext I</td>
                        <td>Mass, Volume and Density</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Liquids and SPT</td>
                        <td>45</td>
                    </tr>
    
                    <tr>
                        <td>Ext J</td>
                        <td>Sinking and Floating</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L5</td>
                        <td>Solids, SPT and Energy</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext K</td>
                        <td>Rates of Warming of Different Materials</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L6</td>
                        <td>Changes of State</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext L</td>
                        <td>Explanations involving Heating and Cooling</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L7</td>
                        <td>Changes of State and SPT</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext M</td>
                        <td>Heating Curves and SPT</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L8 Ed</td>
                        <td>Engineering Design: Evaluate Ballonet Designs</td>
                        <td>~60</td>
                    </tr>
                    
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit CR: Chemical Reactions (~6 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>L1</td>
                        <td>Physical Changes vs. Chemical Reactions</td>
                        <td>45</td>
                    </tr>
                    
                    <tr>
                        <td>Ext A</td>
                        <td>Separating Mixtures Using Physical Properties</td>
                        <td>online</td>
                    </tr>
                
                    <tr>
                        <td>L2</td>
                        <td>Chemical Reactions and Conservation of Mass</td>
                        <td>35</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Reaction Rates and Temperature</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L3</td>
                        <td>Chemical Reactions, Conservation of Mass, and SPT</td>
                        <td>45</td>
                    </tr>
                    
                    <tr>
                        <td>Ext F</td>
                        <td>Balancing chemical equations</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L4</td>
                        <td>Chemical Reactions and Energy Transfer</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>L5</td>
                        <td>Classifying and Organizing Elements</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>Ext G</td>
                        <td>Characteristic Properties</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L6</td>
                        <td>Periodic Trends and the Elements</td>
                        <td>40</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>Models of the Atom</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L7</td>
                        <td>Atoms, Ions, and the Periodic Table</td>
                        <td>45</td>
                    </tr>
                    <tr>
                        <td>L8</td>
                        <td>Electrons and Chemical Bonding</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Ext H</td>
                        <td>Atomic Structure, the Periodic Table, and Isotopes</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext I</td>
                        <td>Bond Types and the Chemical Structure of Materials</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>L9</td>
                        <td>Using the Class Consensus to Explain Observations</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@stop