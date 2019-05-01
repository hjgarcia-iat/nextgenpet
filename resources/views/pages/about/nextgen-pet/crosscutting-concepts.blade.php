@extends('layouts.two-column')

@section('pageTitle', 'Crosscutting Concepts')

@section('sidebar')
    @include('home._sidebar')
@stop

@section('banner')
    @include('home._slider')
@stop

@section('content')
    <p>Many of the CCs are addressed implicitly by having students employ them in the course of participating in the Next Gen PET activities/lessons. (A few selected CCs are addressed explicitly in some units and these are indicated in the Target Ideas for those particular units.) The table below shows the units in which students are expected employ each of the seven CCs in both formats of the Next Gen PET materials (X). (A unit key is available below the table.)</p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Code</th>
            <th>Narrative</th>
            <th colspan="10">Unit Addressed</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2">
                <em>
                    <strong>Crosscutting Concepts</strong>
                </em>
            </td>
            <td>
                <strong>M</strong>
            </td>
            <td>
                <strong>SE</strong>
            </td>
            <td>
                <strong>EM</strong>
            </td>
            <td>
                <strong>PEF</strong>
            </td>
            <td>
                <strong>FM</strong>
            </td>
            <td>
                <strong>CF</strong>
            </td>
            <td>
                <strong>WS</strong>
            </td>
            <td>
                <strong>L</strong>
            </td>
            <td>
                <strong>PC</strong>
            </td>
            <td>
                <strong>CR</strong>
            </td>
        </tr>
        <tr>
            <td>CC1</td>
            <td>
                <em>Patterns</em>
                . Observed patterns of forms and events guide organization and classification, and they prompt questions about relationships and the factors that influence them.
            </td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>

        <tr>
            <td>CC2</td>
            <td>
                <em>Cause and effect: Mechanism and explanation</em>
                . Events have causes, sometimes simple, sometimes multifaceted. A major activity of science is investigating and explaining causal relationships and the mechanisms by which they are mediated. Such mechanisms can then be tested across given contexts and used to predict and explain events in new contexts.
            </td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>CC3</td>
            <td>
                <em>Scale, proportion, and quantity</em>
                . In considering phenomena, it is critical to recognize what is relevant at different measures of size, time, and energy and to recognize how changes in scale, proportion, or quantity affect a system’s structure or performance.
            </td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>CC4</td>
            <td>
                <em>Systems and system models</em>
                . Defining the system under study—specifying its boundaries and making explicit a model of that system—provides tools for understanding and testing ideas that are applicable throughout science and engineering.
            </td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>

        <tr>
            <td>CC5</td>
            <td>
                <em>Energy and matter: Flows, cycles, and conservation</em>
                . Tracking fluxes of energy and matter into, out of, and within systems helps one understand the systems’ possibilities and limitations.
            </td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>

        <tr>
            <td>CC6</td>
            <td>
                <em>Structure and function</em>
                . The way in which an object or living thing is shaped and its substructure determine many of its properties and functions.
            </td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>CC7</td>
            <td>
                <em>Stability and change</em>
                . For natural and built systems alike, conditions of stability and determinants of rates of change or evolution of a system are critical elements of study.
            </td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>
        </tbody>
    </table>

    <p>
        <em>Unit key</em>
        :
        <strong>M</strong>
        : Developing a Model of Magnetism;
        <strong>SE</strong>
        : Developing a Model of Static Electricity;
        <strong>EM</strong>
        : Energy Model of Interactions;
        <strong>PEF</strong>
        : Potential Energy and Fields;
        <strong>FM</strong>
        : Force Model of Interactions;
        <strong>CF</strong>
        : Combinations of Forces;
        <strong>WS</strong>
        : Mechanical Waves and Sound;
        <strong>L</strong>
        : Light and Color;
        <strong>PC</strong>
        : Physical Changes;
        <strong>CR</strong>
        : Chemical Reactions.
    </p>
@stop
