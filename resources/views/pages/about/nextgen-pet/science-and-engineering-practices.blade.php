@extends('layouts.two-column')

@section('pageTitle', 'Science & Engineering Practices')

@section('sidebar')
    @include('home._sidebar')
@stop

@section('banner')
    @include('home._slider')
@stop

@section('content')
    <p>Each of the eight SEPS in the NGSS has sub-themes that are developed across the grade-bands. For the most part, these are addressed implicitly in Next Gen PET activities/lessons by simply having students engage in them. (A few selected SEPs are addressed explicitly in Units M and SE, and they are indicated in the Target Ideas for those particular units.) The table below shows the SEP sub-themes that students are expected to engage in to a significant degree in both the studio- and lecture-style formats of the material (X) or only in the studio-style format (S). (A unit key is available below the table.)</p>

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
                    <strong>Practice 1: Asking Questions and Defining Problems</strong>
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
            <td>Practice 1.C</td>
            <td>Ask questions that challenge the premises of arguments, interpretations of data, or suitability of an engineering design.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td colspan="2">
                <em>
                    <strong>Practice 2: Developing and Using Models</strong>
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
            <td>Practice 2.A</td>
            <td>Evaluate the merits and limitations of models in order to select one that best fits the available evidence.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>Practice 2.B</td>
            <td>Based on evidence, develop and revise models that can be used to describe phenomena and make predictions.</td>
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
            <td>Practice 2.C</td>
            <td>Use a model to make predictions, test ideas, and solve problems.</td>
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
            <td colspan="2">
                <em>
                    <strong>Practice 3: Planning and Carrying Out Investigations</strong>
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
            <td>Practice 3.C</td>
            <td>Conduct investigations and/or make observations to provide evidence that addresses scientific questions.</td>
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
            <td colspan="2">
                <em><strong>Practice 4: Analyzing and Interpreting Data</strong></em>
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
            <td>Practice 4.A </td>
            <td>Record, analyze, and interpret data in varied formats to address scientific questions.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>Practice 4.B</td>
            <td>Analyze data using logical reasoning and/or mathematical tools to address scientific and engineering questions.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>Practice 4.D</td>
            <td>Compare and contrast data from different sources to identify similarities and differences.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>Practice 4.E</td>
            <td>Use data analysis in the optimization of an engineering design.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">s</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>

        <tr>
            <td colspan="2">
                <em><strong>Practice 5: Using Mathematics and Computational Thinking</strong></em>
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
            <td>Practice 5.C</td>
            <td>Use mathematical representations to support claims and/or explanations.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
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
            <td>Practice 5.D</td>
            <td>Use mathematical tools to address scientific and engineering questions and solve problems.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>

        <tr>
            <td colspan="2">
                <em><strong>Practice 6: Constructing Explanations and Designing Solutions</strong></em>
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
            <td>Practice 6.A</td>
            <td>Construct explanations based on evidence and models that predict and describe phenomena.</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
        </tr>
        <tr>
            <td>Practice 6.B</td>
            <td>Construct explanations using ideas that emerge from (class) consensus.</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
        </tr>
        <tr>
            <td>Practice 6.C</td>
            <td>Apply scientific reasoning to assess how data supports an explanation or conclusion.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>Practice 6.D</td>
            <td>Use scientific ideas to develop/refine/optimize an engineering design.</td>
            <td class="text-center">x</td>
            <td class="text-center">s</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>

        <tr>
            <td colspan="2">
                <em><strong>Practice 7: Engaging in Argument from Evidence</strong></em>
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
            <td>Practice 7.A</td>
            <td>Use evidence to evaluate the claims and reasoning used in an argument.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>Practice 7.B</td>
            <td>Respectfully provide and/or receive critiques on scientific arguments based on reasoning and evidence.</td>
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
            <td>Practice 7.C</td>
            <td>Use data and evidence to construct/support an argument or counter-argument.</td>
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
            <td>Practice 7.D</td>
            <td>Make claims about engineering design solutions based on evidence and scientific principles.</td>
            <td class="text-center">x</td>
            <td class="text-center">s</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">s</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">s</td>
        </tr>

        <tr>
            <td colspan="2">
                <em><strong>Practice 8: Obtaining, Evaluating, and Communicating Information</strong></em>
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
            <td>Practice 8.D</td>
            <td>Communicate information in multiple formats (e.g. written, orally, diagrams ...)</td>
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
