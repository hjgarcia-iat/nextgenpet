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
                        <td colspan="3" class="text-center"><em>Unit M: Developing a Model for Magnetism (~9 Hours)</em></td>
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
                        <td colspan="3" class="text-center"><em>Unit SE: Developing a Model for Static Electricity (~ 10 hours )</em>
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
    
       
        
    </section>

@stop