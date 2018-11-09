@extends('layouts.two-column')

@section('pageTitle', 'Studio Style Class')

@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Table of Contents</h3>

        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th>A#</th>
                <th>Activity (A)/Extension (Ext) Title</th>
                <th>Time/Format <sup>1</sup></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center" colspan="3">
                    <strong>Activities and Extensions</strong>
                </td>
            </tr>
            <tr>
                <td>A1</td>
                <td>Variables and Controls</td>
                <td>100 min</td>
            </tr>
            <tr>
                <td>Ext A</td>
                <td>Scientific Questions and Measurement</td>
                <td>Online</td>
            </tr>
            <tr>
                <td>Ext B</td>
                <td>Variables and Data Tables</td>
                <td>Online</td>
            </tr>
            <tr>
                <td>A2</td>
                <td>Conducting Fair Tests</td>
                <td>35 min</td>
            </tr>
            <tr>
                <td>Ext C</td>
                <td>More about Scientific Investigation</td>
                <td>35 min</td>
            </tr>
            <tr>
                <td>A3</td>
                <td>Practice Investigations</td>
                <td>75 min</td>
            </tr>
            <tr>
                <td>A4</td>
                <td>Investigation Project</td>
                <td>75 min</td>
            </tr>
            </tbody>
        </table>
        <p>
            <sup>1</sup>
            <small>Planning & Conducting Investigations extensions come in two different formats. Reading extensions are articles for students to read as homework. Online extensions have the same format as the (online) extensions in the content modules.</small>
        </p>
    </section>

@stop