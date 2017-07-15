@extends('layouts.two-column')
@section('pageTitle','Studio Style Class')
@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop
@section('content')
    
    <section id="pdf-content"
             class="pdf-content"></section>
    <section id="html-content"
             class="html-content">
        <h3>Table of Contents with Time Estimates</h3>
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm">
                <thead>
                    <tr>
                        <th style="width: 60px;">A#</th>
                        <th>Activity (A)/Extension (Ext) Title</th>
                        <th style="width: 100px;">Time/
                            <br>
                            Format
                            <sup>1</sup>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3"
                            class="text-center">General Activities and Extensions
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"
                            class="text-center">
                            <strong>
                                <em>Introductory Cluster (to precede the first implementation of any other TL activities & extensions)</em></strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Ext A</td>
                        <td>The Next Generation Science Standards and Next Gen PET</td>
                        <td>Reading</td>
                    </tr>
                    <tr>
                        <td>Ext B</td>
                        <td>Engineering and the Next Generation Science Standards</td>
                        <td>Reading</td>
                    </tr>
                    <tr>
                        <td>A1</td>
                        <td>Teaching and Learning Science</td>
                        <td>35 min</td>
                    </tr>
                    <tr>
                        <td>Ext C</td>
                        <td>Conducting Interviews with Children</td>
                        <td>Reading</td>
                    </tr>
                    <tr>
                        <td colspan="3"
                            class="text-center">
                            <strong>
                                <em>Post-Introductory Cluster</em></strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Ext P</td>
                        <td>Crosscutting Concepts: Systems and System Models / Energy and Matter</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>Ext R</td>
                        <td>Crosscutting Concepts: Stability & Change / Scale, Proportion & Quantity</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>Ext S</td>
                        <td>Crosscutting Concept: Patterns</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>A12</td>
                        <td>Teaching and Learning Science II</td>
                        <td>35 min</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-sm">
                <thead>
                    <tr>
                        <th style="width: 60px;">A#</th>
                        <th>Activity (A)/Extension (Ext) Title</th>
                        <th style="width: 100px;">Time/
                            <br>Format
                            <sup>1</sup></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="highlight">
                        <td colspan="3"
                            class="text-center">Content Module Clusters
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"
                            class="text-center">
                            <strong><em>Module MSE Cluster</em></strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Ext D</td>
                        <td>Conducting Interviews with Children about Magnetism</td>
                        <td>Interview</td>
                    </tr>
                    <tr>
                        <td>Ext E</td>
                        <td>Teaching and Learning Engineering Design: Children Designing a Maglev System</td>
                        <td>Online</td>
                    </tr>
                    <tr>
                        <td>A2</td>
                        <td>Models, Magnets and Children’s Ideas</td>
                        <td>35 min</td>
                    </tr>
                    <tr>
                        <td colspan="3"
                            class="text-center">
                            <strong>
                                <em>Module IE Cluster</em>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Ext F</td>
                        <td>Dealing with Data: Preparation for TL Activity 3</td>
                        <td>Paper</td>
                    </tr>
                    <tr>
                        <td>A3</td>
                        <td>Questions, Problems, and Evidence</td>
                        <td>45 min</td>
                    </tr>
                    <tr>
                        <td>Ext G</td>
                        <td>Energy and Evidence: Interviewing Children about Energy</td>
                        <td>Interview</td>
                    </tr>
                    <tr>
                        <td>A4</td>
                        <td>Reflecting on Interview about Energy</td>
                        <td>20 min</td>
                    </tr>
    
    
                    <tr>
                        <td colspan="3"
                            class="text-center">
                            <strong>
                                <em>Module IF Cluster</em>
                            </strong>
                        </td>
                    </tr>
                    <tr>
                        <td>Ext H</td>
                        <td>Facilitating Investigations: Preparation for Activity 5</td>
                        <td>Paper</td>
                    </tr>
                    <tr>
                        <td>A5</td>
                        <td>Planning and Carrying out Investigations</td>
                        <td>20 min</td>
                    </tr>
                    <tr>
                        <td>Ext I</td>
                        <td>Forces, Friction, and Facilitating Investigations: Working with Children on Parachute Task</td>
                        <td>Interview</td>
                    </tr>
                    <tr>
                        <td>Ext J</td>
                        <td>Reading: Common Ideas about Force and Motion</td>
                        <td>Reading</td>
                    </tr>
            
                    <tr>
                        <td>A6</td>
                        <td>Facilitating Investigations</td>
                        <td>45 min</td>
                    </tr>
                    <tr>
                        <td colspan="3"
                            class="text-center">
                            <strong>
                                <em>Module WSL Cluster</em>
                            </strong>
                        </td>
                    </tr>
            
                    <tr>
                        <td>Ext K</td>
                        <td>Explanations and Solutions: Preparation for Activity 7</td>
                        <td>Paper</td>
                    </tr>
                    <tr>
                        <td>A7</td>
                        <td>Shedding Light on Explanations and Solutions</td>
                        <td>60 min</td>
                    </tr>
                    <tr>
                        <td>Ext L</td>
                        <td>Guiding Explanations and Solutions: Interviewing Children about Sound and/or Light</td>
                        <td>Interview</td>
                    </tr>
                    <tr>
                        <td>Ext M</td>
                        <td>Engaging in Argument from Evidence: Preparing for Activity 8</td>
                        <td>Paper</td>
                    </tr>
                    <tr>
                        <td>A8</td>
                        <td>Arguments and Evidence (NGSS Practice 7)</td>
                        <td>20 min</td>
                    </tr>
                    <tr>
                        <td>A9</td>
                        <td>Explanations and Solutions</td>
                        <td>20 min</td>
                    </tr>
                    <tr>
                        <td colspan="3"
                            class="text-center">
                            <strong>
                                <em>Module MI Cluster</em>
                            </strong>
                        </td>
                    </tr>
    
                    <tr>
                        <td>Ext N</td>
                        <td>Obtaining, Evaluating and Communicating Information: Preparation for TL Activity 10</td>
                        <td>Paper</td>
                    </tr>
                    <tr>
                        <td>A10</td>
                        <td>Obtaining, Evaluating and Communicating Information</td>
                        <td>20 min</td>
                    </tr>
                    <tr>
                        <td>Ext O</td>
                        <td>Creating and Communicating a Process: Working with Children and Playdough</td>
                        <td>Interview</td>
                    </tr>
                    <tr>
                        <td>A11</td>
                        <td>Creating and Communicating a Process</td>
                        <td>20 min</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <p>
            <sup>1</sup>
            Teaching & Learning extensions come in four different formats. <strong>Reading</strong> extensions are articles for students to read as homework. Online extensions have the same format as the (online) extensions in the content modules. <strong>Interview</strong> extensions are projects that involve interviewing and/or engaging in instructional activities with children, and typically take a few weeks. <strong>Paper</strong> extensions need to be downloaded, (optionally) printed, and completed between two classes.

        </p>
    </section>

@stop