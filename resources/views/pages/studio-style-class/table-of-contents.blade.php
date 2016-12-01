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
        <h3>Table of Contents with Time Estimates</h3>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A#</th>
                        <th>Activity (A) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Magnetism and Static Electricity Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center"><em>Unit M: Developing a Model for Magnetism (~9 Hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Modeling and the Mystery Tube</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Exploring Magnetic Effects</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext A<sup>1</sup></td>
                        <td>Exploring the Region Around a Magnet</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Developing a Model for Magnetism</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Evaluating Magnetism Models</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Better Model for Magnetism</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Explaining Phenomena involving Magnetism</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Explaining Another Magnetic Phenomenon</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>A6 ED</td>
                        <td>Engineering Design: The Maglev System</td>
                        <td>80</td>
                    </tr>
                    
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit SE: Developing a Model for Static Electricity (~ 10 hours )</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Exploring Static Electric Effects</td>
                        <td>90</td>
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
                        <td>A2</td>
                        <td>Developing a Model for Static Electricity</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Representing Uncharged Objects in Your Model</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>What do the Charged Entities Represent?</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Refining Your Model for Different Materials</td>
                        <td>110</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>What Happens When a Charged Object is Discharged?</td>
                        <td>online</td>
                    </tr>
                    
                    <tr>
                        <td>A5</td>
                        <td>Interactions Between Charged and Uncharged Objects</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>A6</td>
                        <td>Explaining Phenomena Involving Static Electricity</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>A7</td>
                        <td>Engineering Design: Refueling Safety</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A#</th>
                        <th>Activity (A) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Interactions and Energy Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit EM: Energy-based Model for Interactions (~11 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Interactions and Motion</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Representing Motion on Speed-Time Graphs</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Motion and Energy</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Explanations using Energy Ideas.</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Slowing and Stopping</td>
                        <td>120</td>
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
                        <td>A4</td>
                        <td>Friction as an Interaction</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>Ext G</td>
                        <td>Mechanisms for Heat Interactions</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Keeping Track of Energy in Electric Circuit Interactions</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>A6</td>
                        <td>More on Keeping Track of Energy</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>A7</td>
                        <td>Conservation of Energy</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext I</td>
                        <td>More on Efficiency and Conservation of Energy</td>
                        <td>online</td>
                    </tr>
                    
                    <tr>
                        <td>A8</td>
                        <td>Engineering Design: The Solar Shower</td>
                        <td>60</td>
                    </tr>
                    
                    
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit PEF: Potential Energy and Fields (~7/8 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Elastic Objects and Energy</td>
                        <td>70</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>More on Elastic Energy</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Comparing Magnetic and Static Electric Interactions (optional)</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>More on Magnetic and Static Electric Interactions (optional)</td>
                        <td>online</td>
                    </tr>
                    
                    <tr>
                        <td>A3</td>
                        <td>Magnetic and Static Electricity Interactions and Energy</td>
                        <td>110</td>
                    </tr>
                    
                    <tr>
                        <td>Ext C</td>
                        <td>Exploring Magnetic and Electric Fields</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Gravitational Interactions and Energy</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Exploring Gravitational Potential Energy</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Electromagnetic Interactions</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>More on Electromagnetic Interactions</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A6 ED</td>
                        <td>Engineering Design: Storing Energy from Braking</td>
                        <td>70</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A#</th>
                        <th>Activity (A) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Interactions and Forces Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit FM: Force-based Model for Interactions (~10 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Interactions, Force and Motion</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Force Diagrams</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Motion with a Continuous Force</td>
                        <td>110</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Pushing a Skateboarder</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Pushes and Slowing Down</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Connecting Force and Energy Models</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Forces and Friction</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>How Does Friction Work?</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Changing Force Strength and Mass</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>Changing Direction</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A6</td>
                        <td>Falling Objects</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>A7</td>
                        <td>Engineering Design: A Better Car Bumper</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit CF: Combinations of Forces (~7 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Combinations of Forces</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Newton’s Second Law</td>
                        <td>online</td>
                    </tr>
                    
                    <tr>
                        <td>A2</td>
                        <td>Balanced Forces</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>More on Balanced Forces</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Balanced and Unbalanced Forces</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Comparing Forces During Interactions</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext F</td>
                        <td>Newton’s Third Law and Balanced Forces</td>
                        <td>online</td>
                    </tr>
                    
                    <tr>
                        <td>A4</td>
                        <td>Explaining Phenomena Using Force Ideas</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext DS</td>
                        <td>More on Vertical Motion</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Engineering Design: Inspiration from Nature</td>
                        <td>90</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A#</th>
                        <th>Activity (A) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Waves, Sound and Light Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit WS: Mechanical Waves and Sound (~7 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Wave Pulses</td>
                        <td>120</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Continuous Waves</td>
                        <td>50</td>
                    </tr>
                    
                    <tr>
                        <td>Ext A</td>
                        <td>How Do Waves Move?</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Two-Dimensional Waves</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Reflection of 2D Waves</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Sound Waves</td>
                        <td>60</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Seismic Waves</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Engineering Design: Locating an Earthquake</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit L: Light and Color (~7 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Pinholes and Shadows</td>
                        <td>110</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Drawing Light Ray Diagrams for Pinholes and Shadows</td>
                        <td>online</td>
                    </tr>
                
                    <tr>
                        <td>A2</td>
                        <td>Reflection of Light</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Further Investigations of Mirror Reflections and Images</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Refraction of Light</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Color</td>
                        <td>110</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Engineering Design: Measuring the Moon’s Distance</td>
                        <td>60</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A#</th>
                        <th>Activity (A) Title</th>
                        <th>~Time (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3" class="text-center">Matter and Interactions Module</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit PC: Physical Changes (~15 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>An Introduction to Pressure</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Introduction to Spreadsheets and Graphing</td>
                        <td>online</td>
                    </tr>
                
                    <tr>
                        <td>A2</td>
                        <td>Pressure and the Amount of Gas</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Pressure-Volume Relationship</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Pressure and Temperature Relationship</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Gas Law Graphing</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Explanations Involving Gases</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Properties of Liquids</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>A6</td>
                        <td>More on Liquids and Characteristic Properties</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>A7</td>
                        <td>Solids and SPT</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Energy Involved in Heating Substances and Phase Changes</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A8</td>
                        <td>Density</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>SPT and Density of Gases, Liquids and Solids</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A9</td>
                        <td>Mixing and Solubility</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext F</td>
                        <td>Using Characteristic Physical Properties of Matter</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A10</td>
                        <td>Explanations Involving Physical Changes</td>
                        <td>90</td>
                    </tr>
                
                    <tr>
                        <td colspan="3"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center">
                            <em>Unit CR: Chemical Reactions (~15 hours)</em>
                        </td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Physical Changes vs. Chemical Reactions</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Classification of Matter</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>Separating Mixtures Using Physical Properties</td>
                        <td>online</td>
                    </tr>
                
                    <tr>
                        <td>A3</td>
                        <td>Evidence of Chemical Reaction</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Reaction Rates and Temperature</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Conservation of Mass and SPT</td>
                        <td>90</td>
                    </tr>
                
                    <tr>
                        <td>Ext C</td>
                        <td>Collision Theory and Chemical Reactions</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Chemical Reactions and Energy Transfer</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Reaction Rate and Energy Diagrams</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A6</td>
                        <td>Elements and the Periodic Table</td>
                        <td>90</td>
                    </tr>
                    
                    <tr>
                        <td>Ext E</td>
                        <td>Models of the Atom</td>
                        <td>online</td>
                    </tr>
                    <tr>
                        <td>A7</td>
                        <td>Atoms, Ions, and the Periodic Table</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>A9</td>
                        <td>Molecular Structure (Supplemental)</td>
                        <td>110</td>
                    </tr>
                    <tr>
                        <td>A10</td>
                        <td>Using the Class Consensus to Explain Observations</td>
                        <td>90</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

@stop