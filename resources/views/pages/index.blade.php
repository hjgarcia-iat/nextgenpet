@extends('layouts.two-column')

@section('pageTitle')
| Home
@stop

@section('sidebar')
    @include('home._sidebar')
    @stop

@section('banner')
    @include('home._slider')
    @stop

@section('content')
    <h3>About</h3>
    
    <p>
    <strong class="highlight">Science courses or science methods courses</strong>
    <em>Next Gen PET</em> is intended primarily for university courses in physics or physical science for prospective elementary teachers. There is sufficient material for a one-semester (quarter) course or a two-semester (two-quarter) sequence.
    <em>Next Gen PET</em> is also appropriate for general education courses on conceptual physics or physical science, science methods courses, or workshops for in-service teachers.
    <em>Next Gen PET</em> materials are flexible and modular, and instructors can use them in a variety of ways, depending on audience, time, and learning objectives.
    </p>
    <p>
    <strong class="highlight">NGSS alignment</strong> The
    <em>Next Gen PET</em> materials are aligned with the physical science disciplinary core ideas, crosscutting concepts, and science and engineering practices in the National Research Council K-12 Science Education Framework and Next Generation Science Standards (NGSS).
    <em>Next Gen PET</em> consists of five modules: (1) Developing Models for Magnetism and Static Electricity; (2) Interactions and Energy; (3) Interactions and Forces; (4) Waves, Sound and Light; and (5) Matter and Interactions.
    <em>Next Gen PET</em> students will be prepared for teaching elementary-level science in alignment with the NGSS.
    </p>
    <p>
    <strong class="highlight">Versions for small or large courses</strong>
    <em>Next Gen PET</em> is a suite of materials, with a
    <em>mStudio Style Class</em> version for small lab and discussion classroom environments of 12-36 students; and a Lecture-style Class version for lecture-style classrooms. In both versions, students draw on evidence, discuss ideas, develop, test and modify models, and engage in practices of scientific argumentation.
    </p>
    
    <p>
    <strong class="highlight">Explicit focus on teaching and learning</strong> Included
    <em>Teaching and Learning activities</em> help students make explicit connections between their own learning, the learning and teaching of children in elementary school, and the core ideas, science and engineering practices, and crosscutting concepts of the NGSS. These can be used optionally, as desired.
    </p>
    <p>
    <strong class="highlight">Integrated Engineering Design Activities</strong> Each of the five content modules includes two
    <em>Engineering Design Activities</em> requiring application of the module’s physical science content.
    </p>
    <p>
    <strong class="highlight">Research based and proven</strong>
    <em>Next Gen PET</em> has been developed over the past ten years by a team of scientists and science educators using design principles based on research on science learning.
    <em>Next Gen PET</em> uses a proven, guided-inquiry approach that engages future teachers in many of the practices of science while developing a deep understanding of core ideas of physics or physical science (physics and chemistry). Preliminary data from learning impact studies suggest that both the
    <em>Studio-style Class</em> and <em>Lecture-style Class</em> versions of
    <em>Next Gen PET</em> promote significant growth in students’ conceptual understanding. Studies of the earlier versions of
    <em>Next Gen PET</em> found significant gains in students’ conceptual understanding of core ideas from physical science and significant positive shifts in their attitudes and beliefs about the nature of science and their learning of science.
    </p>
    
    <p>
    To learn more about <em>Next Gen PET</em>'s Flexibility,
    <a href="{{ url('about/flexibility') }}">click here</a>
    </p>
    <p>
    Learn how <em>Next Gen PET</em> is Research-Based,
    <a href="{{ url('about/research-based') }}">click here</a>
    </p>
@stop
