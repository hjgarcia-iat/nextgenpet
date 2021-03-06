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
        <h3>Pedagogy</h3>

        <p>Each SC activity consists of four sections. The <em>Purpose</em> includes a brief introduction and a key
            question that will be answered during the activity. The <em>Initial Ideas</em> section is designed to elicit
            students' prior knowledge about the central issue of the activity. Both in the small-group and in the
            whole-class discussion that follows, students usually suggest ideas and raise issues that are explored
            later. The <em>Collecting and Interpreting Evidence</em> section includes experiments, and a sequence of
            questions to prompt students to compare their experimental observations with their predictions. The choice
            of questions was informed by the extensive literature on students' understanding of physical science. Often,
            the experimental evidence supports some of the students' initial ideas but not others. The <em>Summarizing
                Questions</em> section addresses the activity's key question, helps students recognize what they have
            learned in the activity and how their final ideas might have built on their initial ideas. </p>

        <p>As an example of the SC activity structure— and the way the <em>Next Gen PET</em> Design Principles are
            incorporated—consider Activity 1 from the Force Model Unit of the Interactions and Forces Module. The <em>Purpose</em>
            section reminds students that, in a previous unit, they described contact push/pull interactions in terms of
            energy. In Unit FM, it is explained that similar interactions will be described in terms of pushes or pulls,
            which are called forces. The activity is guided by the key question, <em>When does a force stop pushing on
                an object?</em>
        </p>

        <p>The <em>Initial Ideas</em> section asks students to think about a soccer player kicking a soccer ball. After
            the kick, the ball rolls across the grass and gradually comes to a stop. This question follows from Design
            Principle 1 (<em>Learning builds on prior knowledge</em>). Students sketch a speed-time graph for the motion
            of the ball from the moment the player's foot first comes in contact with the ball until it comes to a halt
            again. They then label on their graph where the foot was in contact with the ball and where there was a
            force pushing the ball forward. Finally, they draw pictures of the ball and show what forces (if any) they
            think are acting on the ball during the kick and also after the foot has lost contact with it, but before it
            stops. Student groups answer these questions, sketch graphs and drawings on large white boards, and then
            share their thinking with the whole class. The pedagogical purpose is to immediately begin addressing the
            common idea that 'force' is something that an object carries along with it and is transferred between
            objects when they contact each other [1-5]. For instance, it is not uncommon for students to draw an arrow
            on the after-the-kick picture representing the force from the kick. Compared to physicists, students often
            ascribe a different meaning to the word 'force,' and often talk about the 'force of an object,' as if it
            were a property of the object. This activity provides students with evidence that a force is an <em>interaction</em>
            between two objects, not something carried by an object or something associated with an individual object.
        </p>

        <p>
            The <em>Collecting and Interpreting Evidence</em> section consists of an experiment using carts, tracks, and
            motion probes, and several questions to answer. Before the experiment, students are first shown a speed-time
            graph for a cart receiving three quick pushes. They are asked to sketch a corresponding force-time graph for
            the motion. Next, students set up a motion detector and a low friction cart with a force sensor to collect
            speed-time and force-time data. They record data as they give the cart three quick pushes as it moves along
            a track. The subsequent observation and making sense question asks students whether there is a force acting
            on the cart in the periods between pushes. This supports the norm that arguments in science should be based
            on evidence (Design Principle 5: <em>Learning is facilitated through the establishment of norms</em>). To
            focus the students' attention on the relationship between the motion of the cart and whether or not there is
            a force acting on it, the activity provides the following conversation between three hypothetical students.
        </p>

        <dl class="dl-horizontal">
            <dt>Samantha:</dt>
            <dd>
                <em>The force of the hand is transferred to the cart and is carried with it. That's why the cart keeps
                    moving after the push.</em>
            </dd>

            <dt>Victor:</dt>
            <dd>
                <em>The force of the hand stops when contact is lost, but some other force must take over to keep the
                    cart moving.</em>
            </dd>
            <dt> Amara:</dt>
            <dd>
                <em>After contact is lost there are no longer any forces acting on the cart. That's why it moves
                    differently.</em>
            </dd>
        </dl>

        <p>
            Students discuss which of the three hypothetical students they agree with and why. This question usually
            elicits substantive discussion, since the three hypothetical students express commonly held views about the
            relation between force and motion. </p>

        <p>
            The <em>Summarizing Questions</em> section consists of four questions. The first question asks what happens
            to the motion of a cart when a force acts on it. The second question asks whether force is transferred from
            the hand to the cart during the interaction. The third question asks at what point the force stops acting on
            the cart when it is given a quick shove. The last question asks what is transferred from a source to a
            receiver during a contact push/pull interaction: energy, force, both, or neither. This last question tends
            to generate much discussion since it requires students to tease apart the separate concepts of force and
            energy. For each Summarizing Question, students are expected to explain their reasoning and, where
            appropriate, to cite evidence from the activity to support their answer. </p>

        <p>
            Activity 1 illustrates how <em>Next Gen PET</em> incorporates the Design Principles Students' prior
            knowledge is elicited through questions in the <em>Initial Ideas</em> section (supporting Design Principle
            1), providing opportunities for students to engage in discussions (supporting Design Principle 4). Carts,
            sensors, and computers, along with whiteboards and the student workbook, are tools that facilitate learning
            and help structure interactions (Design Principle 3). <em>Next Gen PET</em> also promotes norms (Design
            Principle 5) that ideas should be supported by experimental evidence, that scientific ideas should make
            sense, that students need to take an active role in learning, and that students are expected to contribute
            ideas to group and class discussions. On a larger scale, Activity 1 is part of a Unit that successively
            builds the complex ideas associated with force and motion (Design Principle 2). </p>

    </section>

@stop