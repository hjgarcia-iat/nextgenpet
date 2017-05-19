// create an array with nodes
var nodes = new vis.DataSet([{
    id: 1,
    label: 'A1: Interactions \nand \nMotion \n120 min',
    x: "-975",
    y: "-1100",
    description: "In this first activity students are introduced to the idea of interactions.  When two objects interact, they act on or influence each other in some observable way.  In the Initial Ideas section, students give a low-friction cart a quick shove along a track and are asked to sketch a speed-time graph on which they indicate the sections where they think the hand was in contact with the cart.  In Exploration #1 they record their visual perceptions of the motion of a cart under different circumstances, and in Exploration #2 they use a motion senor to record speed-time data for the same scenarios. Students then consider what sections on the speed-time graphs correspond to when a hand is in contact with the cart, and particularly when the finger loses contact with the cart during the initial push. They receive feedback in the form of a slow motion movie.  Finally, they are introduced to the contact push/pull type of interaction; in the Summarizing Questions, they consider what the evidence implies about the correlation between interactions and changes in motion."
}, {
    id: 2,
    label: 'A2: Motion \nand \nEnergy \n50 min',
    x: "-775",
    y: "-1100",
    description: "In this activity students begin to consider a model that associates interactions with transfers of energy and changes of different types of energy associated with objects. In the Initial Ideas section, they first learn about kinetic energy and how it is related to the speed and mass of an object (although in this curriculum the dependence on mass is not explored).  In Exploration #1 students observe a collision between a moving and stationary cart, and make inferences about how the kinetic energies of the two carts change during the collision.  They are then introduced to the energy model description of the contact push/pull (CP/P) interaction between the carts; namely, a giver/receiver (G/R) energy diagram. The simple G/R energy diagram for this collision then leads to a brief description of the conservation of energy.  Finally, students learn about chemical potential energy and how it decreases in a person when the person engages in a CP/P interaction with an object. In the Summarizing Questions, they practice using these ideas and consider why it makes sense, in terms of energy transfer, that a pushed cart stops speeding up as soon as the hand loses contact with it."
}, {
    id: 3,
    label: 'A3: Slowing \nand \nStopping\n120 min',
    x: "-600",
    y: "-1100",
    description: "In this activity students consider why moving objects tend to slow down, and learn about friction as a type of contact push/pull interaction and how to incorporate it in their developing energy model.  The topic of friction is introduced in the Initial Ideas by considering children sliding on a wet plastic sheet. In Exploration #1 students make a simple observation by rubbing their hands together; watch some infrared movies; and then conclude that when objects rub together or slide over one another, both objects warm up.  They learn about thermal energy, a property of objects associated with their temperature, and how to incorporate it into G/R energy diagrams. In Exploration #2 students consider how the motion of a cart is affected when the friction between the cart and the track is increased.  They conclude that when the amount of friction increases, the cart slows down at a greater rate.  Finally they consider what would happen to the motion of a cart if frictional effects could be eliminated, an idealized situation modeled by a computer simulation.  In the Summarizing Questions they practice using their developing ideas, including writing a more formal explanation for what happens during a friction-type CP/P interaction."
}, {
    id: 4,
    label: 'A4: Friction \nas an \nInteraction\n70 min',
    x: "-600",
    y: "-950",
    description: "In this lesson students learn about three mechanisms that can cause energy to be transferred between objects of different temperatures: heat conduction, IR radiation and convection. They incorporate these mechanisms into their energy model and consider the implications for the interactions of warm objects with their surroundings. In Exploration #1 students draw G/R energy diagrams for each of the mechanisms, and are then told that usually they can group all three under the general classification of heat interactions.  (Having the one generic name for all three mechanisms means that students do not need to worry about which of the three types are relevant for a given situation.)  In Exploration #2 students consider interactions between warm objects and their cooler surroundings, a common situation.  In that case, there are heat interactions between the object and its surroundings, and they need to be included on G/R energy diagrams to make them complete and accurate. In the Summarizing Questions they add such interactions to their energy description of an object that warms up as a result of its involvement in a friction-type CP/P interaction."
}, {
    id: 5,
    label: 'A5: Keeping Track \nof Energy in \nElectric Circuit \nInteractions\n120 min',
    x: "-600",
    y: "-800",
    description: "In this activity students examine systems of interacting objects involving different types of electric circuits and their surroundings. In the Initial Ideas section they learn about the electric circuit interaction involving a dry-cell battery connected to a bulb (which both warm up) and consider a question about energy conservation in this case.  In Exploration #1 they learn about the light interaction and then consider a G/R energy diagram for a whole system comprising the battery, bulb, light receivers, and the surroundings. In Explorations #2 and #3 they learn about other sources of (electrical) energy—solar cells and generators—and other types of energy receivers that are involved in the electric circuit interaction—light bulbs, buzzers, motor/fans, and heaters. They draw and/or evaluate several G/R energy diagrams that trace the flow of energy through more systems of interacting energy sources, receivers, and surroundings. All energy diagrams are qualitative; no energy quantities are used.  They consider two states of the system: one when the temperatures (and thermal energies) of the interacting objects in the electric circuit are increasing—the transient state—and another when all objects in the circuit have reached their operating temperatures (their thermal energies are constant)—the equilibrium state."
}, {
    id: 6,
    label: 'A6: More on \nKeeping Track \nof Energy\n80 min',
    x: "-775",
    y: "-800",
    description: "In this activity students are introduced to energy efficiency and use it to quantify energy diagrams and verify the idea of energy conservation numerically. In the Initial Ideas students consider a question about how amounts of energy flow through a system. Then in Exploration #2 they are introduced to efficiency, defining it as the percentage of the energy input that is transferred out of a device through a useful interaction. They practice using this idea in different contexts. In Exploration #2 and the Summarizing Questions they return to qualitative G/R energy diagrams they drew in A5 to trace energy flow through systems of interacting objects and quantify the diagrams by adding numerical values for all energy increases, decreases, and transfers.  To carry out their quantitative analyses, they use both the efficiencies of objects and the law of conservation of energy.  In each case, the problem statement needs to provide them with an initial amount of energy that is either transferred into the first object in the system or represents the energy decrease if the first object is a dry cell battery.  Students then fill in the remaining energy values.  They also consider the efficiency of the system as a whole."
}, {
    id: 7,
    label: 'A7: Conservation \nof Energy\n50 min',
    x: "-975",
    y: "-800",
    description: "In this short activity students consider a different formulation of the law of conservation of energy and use it to analyze different systems/subsystems that they have seen before. Students first see a way a system can be identified by drawing a box around its elements on a G/R energy diagram. The first system they see has an energy input but no output, and thus the amount of energy input to the system is equal to the total amount of energy changes in the system. The second example has no energy input or output and they see that the total energy change in the system is zero (there are offsetting negative and positive changes). The third example has equal energy inputs and outputs, with no energy changes in the system. The last example has an energy input, an energy output, and energy changes in the system. From this students come up with a general relationship that ‘Energy Input’ = ‘Energy Output’ + ‘Energy Changes’ and in the Summarizing Questions show that this works for all the systems they have examined in this activity."
}, {
    id: 10,
    label: 'A8: Engineering \nDesign: The \nSolar Shower\n60 min',
    x: "-975",
    y: "-950",
    description: "In this engineering design activity students need to apply what they had learned about the three methods for transferring energy due to temperature differences to design a solar shower that will collect water, heat it and keep it warm until it can be used.   The activity leads students through three simpler design challenges before they need to design the shower for the grand challenge. In each of these challenges students need to either make a decision or analyze a system and then justify it in terms of what they had learned in A5.  First, they decide whether a clear plastic bag or a black plastic bag would be most effective in heating the water inside it.  Second, they need to explain how a container with a clear glass top can both warm up water inside it and keep the water warm for long periods of time. Third, they decide what materials and color would be best for a two-tank system, where the purpose of the first tank it to collect and warm up water and the purpose of the second (and connected) tank is to keep water warm for long periods of time."
}, {
    id: 8,
    label: 'Ext A: Representing \nMotion on \nSpeed-Time \nGraphs',
    x: "-865",
    y: "-1200",
    description: "Students learn about how the slope of the speed-time graph is interpreted as the (time) rate of change of speed, both for speeding up and slowing down. They are asked questions to help them distinguish between the ordinate (speed) and the slope (rate of change of speed) values on the speed-time graph. They also practice making connections between the observed motion of an object and its representation on a speed-time graph. Finally, the three main question-type icons used in lessons are described and explained: making predictions, making observations, and making sense (inferences or conclusions).",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 9,
    label: 'Ext B: Explanations \nUsing Energy \nIdeas',
    x: "-685",
    y: "-1200",
    description: "In this extension, students practice writing formal explanations for physical phenomena using the energy-based model for interactions.  They review the basic assumptions of the energy model, and then examine the framework for writing an explanation. An explanation includes both a giver/receiver energy diagram and written narrative. Then students use the standard criteria to evaluate explanations regarding the interaction (collision) between a moving cart collision and a stationary cart.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 11,
    label: 'Ext D: Scientific \nExplanations',
    x: "-475",
    y: "-1065",
    description: "The purpose of this extension is to introduce students to criteria for writing and evaluating good scientific explanations.  An explanation usually consists of a diagram (e.g., an energy diagram) and a written narrative.  A good written narrative usually begins with a description of the interaction(s) involved and is followed by statements about the various energy transfers and changes. The statements should be in a logical order that makes it easy to understand the explanation. The last sentence should connect some energy change to the situation being explained.  Although in this version of the curriculum (for lecture-style classes) students do not write very many explanations, they do evaluate explanations.  This extension gives them some practice identifying the parts of good explanations and evaluating explanations.  The main criterion they will use for the evaluations is the accuracy of both the diagram and the written narrative.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 12,
    label: 'Ext E: Simultaneous \nInteractions',
    x: "-465",
    y: "-1000",
    description: "In this extension students first consider how to extend the energy model of interactions to situations when an object is engaged in more than one simultaneous interaction (at the same time).  They evaluate and fill in G/R energy diagrams for several situations of this type.  Then students consider what are called chains of interactions, where the energy model describes an object that is at the same time an energy receiver for one interaction and an energy giver for another interaction, both included in the same G/R energy diagram.  When the object acts as an energy receiver, its own energy tends to increase, but when it acts as an energy giver, its own energy tends to decrease.  Students consider three different situations where the increase in energy exceeds the decrease, the energy decrease exceeds the increase, or the increase and decrease exactly balance each other.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 13,
    label: 'Ext G: Mechanisms \nfor Heat \nInteractions',
    x: "-465",
    y: "-880",
    description: "In this extension students learn about the specific mechanisms underlying heat conduction, IR radiation and convection interactions.  They learn that heat conduction occurs because at a microscopic scale particles with higher average kinetic energy at the warmer end of an object collide with neighboring particles, transferring energy to them that cause their average kinetic energies (and hence the temperature) to increase.  In this way, the average kinetic energy of particles increases all along the length of the object, causing the temperature of the object to increase all along its length.  For the IR radiation interaction students learn about vibrating objects and that vibrating electric charges in objects emit radiation. If the frequency is in a certain range the radiation is called IR radiation.  This is the main type of radiation emitted by objects that are at normal or heightened temperatures.  As an object becomes warmer, the vibrations of the charged particles in it increase, resulting in a greater intensity of IR radiation being emitted.  Finally, students learn about the convection interaction that results with two regions within a fluid (liquid or gas) are at different temperatures, and the warmer fluid actually rises towards the region of cooler fluid.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 15,
    label: 'Ext I: More on \nEfficiency and \nConversation of \nEnergy',
    x: "-1100",
    y: "-875",
    description: "In this extension, students practice using the Law of Conservation of Energy, as expressed below: <em>Energy transferred into system = Energy transferred from system + Energy changes within system</em> They apply this form in different situations to determine the amounts of energy involved in different parts of the system. They consider two situations: one involving an electric circuit consisting of a battery and a bulb, and one involving a block sliding across a table.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}]);
var nodes2 = new vis.DataSet([{
    id: 1,
    label: 'A1: Elastic \nObjects and \nEnergy\n70 min',
    x: "-975",
    y: "-1000",
    description: "In Unit EM, students learned how to describe the interactions between objects that touch each other in terms of giver/receiver (G/R) energy diagrams.  In this unit they will learn about potential energy stored within objects (elastic) or fields (magnetic, electric, and gravitational).  Beginning with the most tangible context, in Exploration #1 this activity has students first consider the contact push/pull interactions between a rigid object and an elastic object, like a rubber band or spring.  They learn how to describe such interactions in terms of energy and are introduced to elastic potential energy. In Exploration #2, by observing interactions between a rubber band and two carts (hands-on), and between a spring and two carts (movies), they conclude that when a stretchy object becomes more/less compressed (or stretched), the elastic potential energy stored in it increases/decreases.  They represent the interactions by drawing G/R energy diagrams.  Finally, students also consider the relative motion of two carts of very different masses when connected by a stretchy object."
}, {
    id: 2,
    label: 'A2: Comparing \nMagnetic and \nStatic Electric \nInteractions (optional)\n50 min',
    x: "-800",
    y: "-1000",
    description: "[This lesson is intended for students who have not worked through the units on building models of magnetism and static electricity in Module MSE.] In this activity students perform some simple experiments with magnets, sticky tape, and some other objects (or they watch videos of the static electricity experiments) to investigate some properties of the magnetic and static electric interactions, and consider how they are similar and how they are different.  In Exploration #1 they see that different kinds of materials can be involved in magnetic interactions and static electric interactions. In Exploration #2 they investigate how two magnets interact with each other and compare this to how two statically charged objects interact with each other, and in Exploration #3 they see how easy, or difficult, it is to demagnetize/discharge objects. This evidence should lead them to conclude that the two interactions are different and thus need to be treated separately."
}, {
    id: 3,
    label: 'A3: Magnetic \nand Static Electric \nInteractions and \nEnergy\n110 min',
    x: "-600",
    y: "-1000",
    description: "This activity introduces students to ‘action-at-a-distance’ interactions and how to represent them in terms of ideas about energy.  Exploration #1 focuses on the magnetic interaction. Students attach two magnets to low friction carts and examine how they can affect each other (attract or repel) without touching.  They consider possible mechanisms for how magnets can affect each other without touching.  They conduct experiments and watch movies that provide evidence refuting two suggested mechanisms (charged particles moving between magnets; air acting as an agent to produce magnetic effects).  Afterwards, they are introduced to magnetic fields.  Exploration #2 introduces the energy description of the magnetic interaction, including the idea that magnetic potential energy (MPE) is stored in the magnetic field. Students draw G/R energy diagrams showing how energy can be transferred between the magnetic field and the two magnets with a corresponding change in MPE in the former and kinetic energy changes in the latter. Finally, they use analogical reasoning to describe the static electric interaction in terms of energy and read how this relates to the idea of chemical potential energy. In the Summarizing Questions, they consider a case in which energy is transferred to the magnetic field rather than from it."
}, {
    id: 4,
    label: 'A4: Gravitational \nInteractions\n80 min',
    x: "-600",
    y: "-800",
    description: "This activity introduces students to the gravitational interaction and its description in terms of energy.  In the Initial Ideas and Exploration #1, students consider the motion of a falling object and whether it is involved in an interaction; they conclude that it is.  They are introduced to the term ‘gravitational interaction’ and then, in Exploration #2, consider four possible mechanisms for Earth’s gravity: (1) Earth’s magnetic field; (2) Earth’s atmosphere; (3) Earth’s rotation; and (4) the presence of a ‘field’ of some type.  Then students watch videos and answer questions that end up refuting the first three possible mechanisms; they are then introduced to the idea of a gravitational field, which arises because objects have mass. Exploration #3 introduces students to the energy description of gravitational interactions. They draw G/R energy diagrams that are analogous to the ones they drew in A3 (for magnetic and static electric interactions).  In this case, however, one of the interacting ‘objects’ is the gravitational field (which stores gravitational potential energy) and the other objects are Earth and a falling object. In the Summarizing Questions they consider the case of a ball that is thrown upward and slows down as it rises."
}, {
    id: 6,
    label: 'A5: Electromagnetic \nInteractions\n80 min',
    x: "-785",
    y: "-800",
    description: "In this activity, students learn how magnets can produce electric effects and how electric charges can produce magnetic effects.  In Exploration #1, students use a simulator to see that lighting up a bulb in an electric circuit is evidence that electric charges in the wires are moving. They then construct a simple electric circuit with a wire wound around a magnetic compass, and observe that the compass needle rotates only when the bulb is lit. From this they infer that moving charges (an electric current) create a magnetic field.   In Exploration #2, students learn that when electric charges are moving, an electric field that causes that movement must be present.  Then they watch a movie of a real magnet being moved around near a coil of wire connected to a galvanometer. They also use a simulator to move a magnet back and forth near a wire coil connected to a bulb. From these observations they infer that a magnet creates an electric field only when it is moving.  Finally they read about electromagnetic interactions and, in Exploration #3, construct a small motor and consider the internal components of a generator. In the Summarizing Questions they explain how an electromagnet works."
}, {
    id: 7,
    label: 'A6 ED: Engineering \nDesign: Storing \nEnergy from \nBraking\n70 min',
    x: "-975",
    y: "-800",
    description: "Braking is a mechanism that essentially converts the kinetic energy of vehicles into thermal energy, a form of energy that isn’t usually useful. In this engineering design activity, students brainstorm a way to convert a vehicle’s kinetic energy into a form that can be later converted back into kinetic energy. They are given goals (vehicle decreases in KE while another object increases in a different type of energy; that energy can later be converted into the KE of the vehicle) and constraints (the stored energy should be contained on the vehicle itself; the vehicle’s performance when not braking shouldn’t be impaired). Students are given a couple examples of designs that work for a bicycle and a toy car, and then examine four interactions in which KE is stored as different types of energy.  They then examine a electric circuit with a hand-cranked generator and learn how a capacitor can store energy. Finally, in small groups students design a system in which an electric circuit interaction involving a capacitor accomplishes the goals of the activity’s challenge."
}, {
    id: 8,
    label: 'Ext A: More on\nElastic Energy',
    x: "-900",
    y: "-1085",
    description: "This extension provides students with additional experience working with the idea of elastic potential energy.  They first consider a tennis ball striking a tennis racket, causing both the ball and the racket mesh to change shape.  Then they consider additional situations involving a rubber band stretched between two low-friction carts on a track.  In both cases they identify the appropriate giver/receiver energy diagrams.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 9,
    label: 'Ext B: Representing \nMagnetic \nPoles and \nElectric Charges \n(optional)',
    x: "-700",
    y: "-1105",
    description: "[Students should work through this extension only if they had also worked through Activity 2 during class.] In this extension students first watch a movie from a PhET simulator, where a compass is moved around the area of a bar magnet, and from that infer which end of the compass needle is a North Pole.  Then they watch a series of movies involving interactions between two charged pieces of sticky tape, and between an acrylic sheet and a Styrofoam plate that are rubbed together.  Finally, they are introduced to a simple model representation of charges in the acrylic and Styrofoam.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 10,
    label: 'Ext C: Exploring \nMagnetic and \nElectric Fields',
    x: "-500",
    y: "-900",
    description: "In this extension students first use the PhET ‘magnet and compass’ simulation to explore the magnetic field in the region around a bar magnet.  Then they use the PhET ‘charges and field’ simulation to explore the electric field in the region around an electric charge.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 12,
    label: 'Ext D: Exploring \nGravitational \nPotential Energy',
    x: "-685",
    y: "-715",
    description: "In this extension students work with the PhET ‘Energy Skate Park’ simulation to explore what happens to the kinetic energy of a skateboarder and the gravitational potential energy of the system when the skateboarder moves along different arrangements of tracks.  As the skateboarder moves up and down along the track, the simulation shows the corresponding changes in the kinetic energy and gravitational potential energy.  As long as there is no loss of energy to the surroundings because of heat interactions (an ideal track), any increases (decreases) in the kinetic energy correspond to equal decreases (increases) in gravitational potential energy.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 14,
    label: 'Ext E: More on \nElectromagnetic \nInteractions',
    x: "-885",
    y: "-715",
    description: "In this extension students use the PhET ‘Generator’ simulation to explore several different situations.  First, they explore what happens to the strength of the magnetic field if the strength of a bar magnet is changed.  Second, they work with a simulated electromagnet to determine how the magnetic field strength depends both on the number of loops and the voltage of the battery.  Third, they explore how the brightness of a bulb connected to some wire loops (a pickup coil) depends on how quickly a nearby magnet is moved and how close the magnet is to the loops.  Finally they work with a simulated generator that consists of a rotating magnet connected to a wheel whose rotational speed is determined by the flow of water striking it from a faucet.  They explore how the value of the voltage induced in a nearby pickup coil depends on both the rotational speed of the magnet (connected to the wheel) and the number of loops in the pickup coil.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}]);
// create an array with edges
var edges = new vis.DataSet([{
    from: 1,
    to: 2
}, {
    from: 2,
    to: 3
}, {
    from: 3,
    to: 4
}, {
    from: 4,
    to: 5
}, {
    from: 5,
    to: 6
}, {
    from: 6,
    to: 7
}, {
    from: 7,
    to: 10
}]);
// create an array with edges
var edges2 = new vis.DataSet([{
    from: 1,
    to: 2
}, {
    from: 2,
    to: 3
}, {
    from: 3,
    to: 4
}, {
    from: 4,
    to: 6
}, {
    from: 6,
    to: 7
}]);
var container = document.getElementById('canvas');
var container2 = document.getElementById('canvas2');
// provide the data in the vis format
var data = {
    nodes: nodes,
    edges: edges
};
var data2 = {
    nodes: nodes2,
    edges: edges2
};
var options = {
    "physics": {
        enabled: false
    },
    interaction: {
        dragNodes: false,
        dragView: false,
        zoomView: false
    },
    edges: {
        arrows: {
            to: true
        },
        color: {
            highlight: '#9bc48a',
        }
    },
    nodes: {
        shape: 'box',
        borderWidthSelected: 10,
        borderWidth: 10,
        color: {
            border: '#b9cde5',
            background: '#b9cde5',
            highlight: {
                border: '#9bc48a',
                background: '#9bc48a'
            },
            hover: {
                border: '#b9cde5',
                background: '#b9cde5'
            }
        },
        shapeProperties: {
            borderRadius: 0
        }
    }
};
var network = new vis.Network(container, data, options);
var network2 = new vis.Network(container2, data2, options);
network.on("click", function(params) {
    var $canvas = $(params.event.target.parentNode.parentNode);
    var ids = params.nodes;
    var clickedNodes = nodes.get(ids);
    if (clickedNodes.length > 0) {
        var label = clickedNodes[0].label;
        var description = clickedNodes[0].description;
        setUpDrawer($canvas, label, description);
        scrollWindow($canvas);
    }
});
network2.on("click", function(params) {
    var $canvas = $(params.event.target.parentNode.parentNode);
    var ids = params.nodes;
    var clickedNodes = nodes2.get(ids);
    if (clickedNodes.length > 0) {
        var label = clickedNodes[0].label;
        var description = clickedNodes[0].description;
        setUpDrawer($canvas, label, description);
        scrollWindow($canvas);
    }
});

function setUpDrawer(canvas, label, description) {
    canvas.next('div.canvas-drawer').html('<h4>' + label + '</h4><p>' + description + '</p>');
}

function scrollWindow(canvas) {
    var distance = canvas.prev('div.canvas-header').offset().top - 20 + 'px';
    $('html, body').animate({
        scrollTop: distance
    });
}