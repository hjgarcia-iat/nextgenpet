@extends('layouts.two-column')

@section('pageTitle', 'Ordering Next Gen PET Materials')

@section('sidebar')
    @include('home._sidebar')
@stop

@section('content')
    <p>Once you decide which of the Next Gen PET units you wish to order for your class, your bookstore person should
        contact Activate Learning by either telephone or email:</p>
    <ul>
        <li>Phone: 646-502-5231</li>
        <li>Email: <a href="mailto:info@activatelearning.com">info@activatelearning.com</a></li>
    </ul>
    <p>
        Below are the ISBN numbers for the various units that your bookstore person will need in placing the order. You
        can choose to implement all <a href="{{ url('studio-style-class') }}">Studio Style</a> units, all
        <a href="{{ url('lecture-style-class') }}">Lecture Style</a> units, or a combination of the two (e.g., if
        you teach a class that has both lecture and laboratory components). See <a
                href="{{ url('about/implementation-versions') }}">Implementation Versions</a> for more
        information.
    </p>
    <h3>Studio Style Class</h3>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>Unit Name</th>
            <th>ISBN Number</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2" class="text-center"><em>Magnetism and Static Electricity Module</em></td>
        </tr>
        <tr>
            <td>Unit M: Developing a Model for Magnetism</td>
            <td>978-1-68231-347-3</td>
        </tr>
        <tr>
            <td>Unit SE: Developing a Model for Static Electricity</td>
            <td>978-1-68231-348-0</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Interactions and Energy Module</em></td>
        </tr>
        <tr>
            <td>Unit EM: Energy-based Model for Interactions</td>
            <td>978-1-68231-343-5</td>
        </tr>
        <tr>
            <td>Unit PEF: Potential Energy and Fields</td>
            <td>978-1-68231-344-2</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Interactions and Forces Module</em></td>
        </tr>
        <tr>
            <td>Unit FM: Force-based Model for Interactions</td>
            <td>978-1-68231-345-9</td>
        </tr>
        <tr>
            <td>Unit CF: Combinations of Forces</td>
            <td>978-1-68231-346-6</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Waves, Sound, and Light Module</em></td>
        </tr>
        <tr>
            <td>Unit WS: Mechanical Waves and Sound</td>
            <td>978-1-68231-349-7</td>
        </tr>
        <tr>
            <td>Unit L: Light and Color</td>
            <td>978-1-68231-350-3</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Matter and Interactions</em></td>
        </tr>
        <tr>
            <td>Unit PC: Matter and Interactions</td>
            <td>978-1-68231-351-0</td>
        </tr>
        <tr>
            <td>Unit CR: Chemical Reactions</td>
            <td>978-1-68231-352-7</td>
        </tr>
        </tbody>
    </table>

    <h3>Lecture Style Class</h3>
    <table class="table table-bordered table-sm">
        <thead>
        <tr>
            <th>Unit Name</th>
            <th>ISBN Number</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2" class="text-center"><em>Magnetism and Static Electricity Module</em></td>
        </tr>
        <tr>
            <td>Unit M: Developing a Model for Magnetism</td>
            <td>978-1-68231-337-4</td>
        </tr>
        <tr>
            <td>Unit SE: Developing a Model for Static Electricity</td>
            <td>978-1-68231-338-1</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Interactions and Energy Module</em></td>
        </tr>
        <tr>
            <td>Unit EM: Energy-based Model for Interactions</td>
            <td>978-1-68231-333-6</td>
        </tr>
        <tr>
            <td>Unit PEF: Potential Energy and Fields</td>
            <td>978-1-68231-334-3</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Interactions and Forces Module</em></td>
        </tr>
        <tr>
            <td>Unit FM: Force-based Model for Interactions</td>
            <td>978-1-68231-335-0</td>
        </tr>
        <tr>
            <td>Unit CF: Combinations of Forces</td>
            <td>978-1-68231-336-7</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Waves, Sound, and Light Module</em></td>
        </tr>
        <tr>
            <td>Unit WS: Mechanical Waves and Sound</td>
            <td>978-1-68231-339-8</td>
        </tr>
        <tr>
            <td>Unit L: Light and Color</td>
            <td>978-1-68231-340-4</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"><em>Matter and Interactions</em></td>
        </tr>
        <tr>
            <td>Unit PC: Matter and Interactions</td>
            <td>978-1-68231-341-1</td>
        </tr>
        <tr>
            <td>Unit CR: Chemical Reactions</td>
            <td>978-1-68231-342-8</td>
        </tr>
        </tbody>
    </table>
@stop
