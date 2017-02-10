// create an array with nodes
var nodes = new vis.DataSet([
    {id      : 1,
        label: 'L1: Interactions and \nMotion\n35 min',
        x    : "-1000",
        y    : "-1100",
        description: "In this first lesson students are introduced to the idea of interactions.  When two objects interact, they act on or influence each other in some observable way.  In Part 1 students observe a low-friction cart being given a quick shove along a track and are asked to sketch a speed-time graph.  Then they compare their graph with one produced by a motion detector. In Part 2 students consider where on the speed-time graph corresponds to when the finger lost contact with the cart, and are given some feedback.  Finally, they are introduced to the contact push/pull interaction."
    },
    {id      : 2,
        label: 'L2: Motion and \nEnergy\n40 min',
        x    : "-800",
        y    : "-1100",
        description: "In this lesson students first learn about kinetic energy and how it is related to the speed and mass of an object (although in this curriculum the dependence on mass is not explored).  In Part 1 they observe a (movie of a) collision between a moving and stationary cart, describe the behavior of the carts with speed-time graphs, and make inferences about how the kinetic energies of the launched and target carts change during the collision.  Students are then introduced to the energy model description of the push/pull interaction between the carts; namely, a giver/receiver energy diagram. The simple G/R energy diagram for this collision then leads to a brief description of the conservation of energy.  Finally, students learn about chemical potential energy and how it decreases in a person when the person engages in a push/pull interaction with an object."
    },
    {id      : 3,
        label: 'L3: Slowing and \nStopping\n40 min',
        x    : "-600",
        y    : "-1100",
        description: "In the first two lessons of this unit students were considering objects that were speeding up.  In this lesson they consider objects that are slowing down.  In Part 1 they make a simple observation by rubbing their hands together, watch some movies, and then conclude that when objects rub together or slide over one another, both objects warm up.  In Part 2 they learn about thermal energy, a property of objects, and that an object warming up is associated with an increase in the thermal energy of the object (and vice versa).  They then represent this idea using a Giver/Receiver energy diagram."
    },
    {id      : 4,
        label: 'L4: Friction as \nan Interaction\n40 min',
        x    : "-600",
        y    : "-950",
        description: "In Part 1 of this lesson students learn that friction is a type of a contact/push pull interaction and they consider how the motion of a cart is affected when the amount of friction between the cart and the track is increased.  They conclude that when the amount of friction is increased, the cart slows down at a greater rate.  In Part 2 students consider what happens to the motion of a cart when the amount of friction is reduced to zero, an idealized situation that is modeled with a computer simulation."
    },
    {id      : 5,
        label: 'L5: Warming and \nCooling\n80 min',
        x    : "-600",
        y    : "-850",
        description: "In Part 1 of this lesson students learn that friction is a type of a contact/push pull interaction and they consider how the motion of a cart is affected when the amount of friction between the cart and the track is increased.  They conclude that when the amount of friction is increased, the cart slows down at a greater rate.  In Part 2 students consider what happens to the motion of a cart when the amount of friction is reduced to zero, an idealized situation that is modeled with a computer simulation."
    },
    {
        id   : 6,
        label: 'L6: Keeping Track \n of Energy in Electric \nCircuit Interactions\n75 min',
        x    : "-800",
        y    : "-850",
        description: "In this lesson students are first introduced to the idea of a system of interacting objects.  Then they learn about the electric circuit interaction and the light interaction.  They also learn about various sources of (electrical) energy—the dry cell battery, solar cells and generator—and various types of energy receivers that are involved in the electric circuit interaction—light bulb, buzzer and motor/fan. They draw and/or evaluate several G/R energy diagrams that trace the flow of energy through a system of interacting energy sources, receivers and surroundings.  All the energy diagrams are qualitative; no energy quantities are used.  They consider two states of the system: one where the temperatures of the interacting objects in the electric circuit are increasing (and their thermal energies are increasing), and another where all objects in the circuit have reached their operating temperatures (and their thermal energies are constant)."
    },
    {id      : 7,
        label: 'L7: More on Keeping \nTrack of Energy\n65 min',
        x    : "-1000",
        y    : "-850",
        description: "In this lesson students are first introduced to the idea of efficiency, defining it as the percentage of the energy input that is transferred out of a device because of a useful interaction.  For dry cell batteries, the efficiency is defined somewhat differently as the percentage of the decrease in stored potential energy that is transferred out of the battery by way of a useful interaction.  Then students return to some of the qualitative G/R energy diagrams they had drawn in the previous lesson to trace the flow of energy through systems of interacting objects and quantify the diagrams by adding numerical values for all the energy increases, decreases, and transfers.  To carry out their quantitative analyses, they need to make use both of the efficiencies of objects and the law of conservation of energy.  In each case, however, the problem statement always needs to provide them with an initial amount of energy that is either transferred into the first object in the system or represents the amount of energy decrease if the first object is a dry cell battery.  Students can then fill in the remaining energy values throughout the entire diagram."
    },
    {id      : 10,
        label: 'L8 ED: No More \nCold Showers\n75 min',
        x    : "-1000",
        y    : "-950",
        description: "In this engineering design lesson, students need to apply what they had learned about the three mechanisms for transferring energy due to temperature differences to design a solar shower that will collect water, heat it and keep it warm until it can be used.   The lesson leads students through three simpler design challenges before they design the shower for the grand challenge. In each of these challenges, students need to either make a decision or analyze a system and then justify it in terms of what they had learned in L5.  First they decide whether a clear plastic bag or a black plastic bag would be most effective in heating the water inside it.  Second they need to explain how a container with a clear glass top can both warm up water inside it and keep the water warm for long periods of time. Third, they decide what materials and color would be best for a two-tank system, where the purpose of the first tank is to collect and warm up water and the purpose of the second (and connected) tank is to keep water warm for long periods of time."
    },
    {
        id   : 8,
        label: 'Ext A: Representing \nMotion on Speed-Time \nGraphs',
        x    : "-900",
        y    : "-1175",
        description: "Students learn about how the slope of the speed-time graph is interpreted as the (time) rate of change of speed, both for speeding up and slowing down.  They are asked questions to help them distinguish between the ordinate (speed) and the slope (rate of change of speed) values on the speed-time graph. They also practice making connections between the observed motion of an object and its representation on a speed-time graph.  Finally, the three main question-type icons used in lessons are described and explained: making predictions, making observations, and making sense (inferences or conclusions).",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 9,
        label: 'Ext C: Describing \nInteractions in Terms \nof Energy',
        x    : "-700",
        y    : "-1175",
        description: "This short extension discusses the energy model of interactions, its basic assumptions and diagrammatic representation.  The basic assumptions are: (1) certain observable properties of an object can be associated with different types of energy; (2) from any change in an observable property we can infer a change in the corresponding type of energy; (3) during an interaction, energy can be transferred between objects; and (4) energy cannot be created or destroyed, only transferred between objects, or transformed to different types within the same object.  The last assumption is a statement of the conservation of energy. The diagrammatic representation makes that conservation explicit.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 11,
        label: 'Ext D: Scientific \nExplanations',
        x    : "-465",
        y    : "-1055",
        description: "The purpose of this extension is to introduce students to criteria for writing and evaluating good scientific explanations.  An explanation usually consists of a diagram (e.g., an energy diagram) and a written narrative.  A good written narrative usually begins with a description of the interaction(s) involved and is followed by statements about the various energy transfers and changes. The statements should be in a logical order that makes the explanation easy to understand. The last sentence should connect some energy change to the situation being explained.  Although in this version of the curriculum (for lecture-style classes) students do not write very many explanations, they do evaluate explanations.  This extension gives them some practice identifying the parts of good explanations and evaluating explanations.  The main criterion they will use for the evaluations is the accuracy of both the diagram and the written narrative.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 12,
        label: 'Ext E: Simultaneous \nInteractions',
        x    : "-465",
        y    : "-1000",
        description: "In this extension students first consider how to extend the energy model of interactions to situations when an object is engaged in more than one <strong>simultaneous interaction</strong> (at the same time).  They evaluate and fill in G/R energy diagrams for several situations of this type.  Then students consider what are called <strong>chains of interactions</strong>, where the energy model describes an object that is at the same time an energy receiver for one interaction and an energy giver for another interaction, both included in the same G/R energy diagram.  When the object acts as an energy receiver, its own energy tends to increase, but when it acts as an energy giver, its own energy tends to decrease.  Students consider three different situations where the increase in energy exceeds the decrease, the energy decrease exceeds the increase, and the increase and decrease exactly balance each other.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 13,
        label: 'Ext F: Effects of \nFriction',
        x    : "-465",
        y    : "-900",
        description: "In this extension students consider more examples of how friction affects the motion of an object.  They also consider the relationship between the amount of friction between a moving object and a surface, and the corresponding changes in the kinetic energy of the object.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 14,
        label: 'Ext G: Mechanisms \nfor Heat Interactions',
        x    : "-700",
        y    : "-775",
        description: "In this extension students learn about the specific mechanisms underlying heat conduction, infrared (IR) radiation and convection.  They learn that heat conduction occurs because at a microscopic scale particles with higher average kinetic energy at the warmer end of an object collide with neighboring particles, transferring energy to them that cause their average kinetic energy (and hence the temperature) to increase.  In this way, the average kinetic energy of particles increases all along the length of the object, causing the temperature of the object to increase all along its length.  For the IR radiation interaction students learn about vibrating objects and that vibrating electric charges in objects emit radiation. If the frequency is in a certain range, the radiation is called IR radiation.  This is the main type of radiation emitted by objects that are at normal or heightened temperatures.  As an object becomes warmer, the vibrations of the charged particles in it increase, resulting in a greater intensity of IR radiation being emitted.  Finally, students learn about the convection interaction that results when two regions within a fluid (liquid or gas) are at different temperatures, and the warmer fluid actually rises towards the region of cooler fluid.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 15,
        label: 'Ext H: More on \nKeeping Track of \nEnergy',
        x    : "-900",
        y    : "-775",
        description: "In this extension the students focus on interactions involving electrical devices that one may find in a typical home. They apply what they had learned in L6 to consider energy diagrams for chains of interactions involving (1) a television set and (2) a refrigerator.  In all cases they assume that the source of energy is from a power plant located outside the house.  After considering the television, they are introduced to the refrigerator by learning how a heat pump works and then examining G/R energy diagrams.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    }
]);

var nodes2 = new vis.DataSet([
    {id      : 1,
        label: 'L1: Elastic Objects \nand Energy\n60 min',
        x    : "-1025",
        y    : "-1000",
        description: "In Unit EM, students learned how to describe the interactions between objects that touch or connect with each other in terms of giver/receiver (G/R) energy diagrams.  In this unit they will learn about potential energy stored within objects (elastic) or fields (magnetic, electric and gravitational).  To begin, Lesson 1 has students consider the push/pull interactions between a rigid object and an elastic object, like a rubber band or spring.  They learn how to describe such interactions in terms of energy, and they are introduced to elastic potential energy. By observing several movies of interactions between a rubber band and two carts, and between a spring and two carts, they conclude that when a stretchy object becomes more/less compressed (or stretched) the elastic potential energy stored in it increases/decreases.  They represent the interactions by drawing G/R energy diagrams.  Finally, students consider the relative motion of two carts of very different masses when connected by a stretchy object.",
    },
    {id      : 2,
        label: 'L2: Comparing \nMagnetic and Static \nElectric Interactions \n(optional)\n70 min',
        x    : "-815",
        y    : "-1000",
        description: "[<em>This lesson is intended for students who have not worked through the units on building models of magnetism and static electricity in Module MSE</em>.] In this lesson students either perform some simple experiments with magnets, sticky tape, and some other objects, or they watch videos of the experiments, to investigate some properties of the magnetic and static electric interactions, and to consider how they are similar and how they are different.  In Part 1 they determine what kinds of materials can be involved in magnetic interactions and static electric interactions. In Part 2 they investigate how two magnets interact with each other and how two statically charged objects interact with each other. In Part 3 students obtain evidence that the two interactions are different.",
    },
    {id      : 3,
        label: 'L3: Magnetic \nand Static Electric \nInteractions and Energy\n65 min',
        x    : "-600",
        y    : "-1000",
        description: "In this lesson students are introduced to ‘action-at-a-distance’ interactions.  In Part 1 they begin by focusing on the magnetic interaction, specifically the attraction or repulsion between two magnets. They watch a movie where two magnets (attached to low friction carts) can affect each other (attract or repel) without touching.  Students are asked to consider some possible mechanisms for how one magnet can affect the other without physically touching it.  They then watch movies that provide evidence refuting two of the suggested mechanisms (emission of charged particles moving from one magnet to the other, or the air acting as an agent to produce the magnetic effect).  After that they are introduced to the idea of a magnetic field.  In Part 2 they are introduced to the energy description of the magnetic interaction, including the idea that there is magnetic potential energy stored in the magnetic field. They draw G/R energy diagrams showing how energy can be transferred between the magnetic field and the two magnets with a corresponding change in magnetic potential energy in the former and changes in kinetic energies of the latter. In Part 3 they use analogical reasoning to describe the static electric interaction in terms of energy.",
    },
    {id      : 4,
        label: 'L4: Gravitational \nInteractions and Energy\n50 min',
        x    : "-600",
        y    : "-850",
        description: "In this lesson students are introduced to the gravitational interaction and its description in terms of energy. In Part 1 of the lesson students consider whether a falling object is involved in an interaction, and conclude that it is.  In Part 2 students are introduced to the term ‘gravitational interaction’ and then consider four different possible mechanisms that could cause the Earth’s gravity: (1) the magnetic field of the Earth; (2) the atmosphere of the Earth; (3) the rotation of the Earth; and (4) the presence of a ‘field’ of some type.  Then students watch some videos and answer questions that end up refuting the first three possible mechanisms.  At the end of Part 2 they are introduced to the idea of a gravitational field, which arises because objects have mass. In Part 3 they are introduced to the energy description of the gravitational interactions and draw G/R energy diagrams that are analogous to the ones they drew in L3 (magnetic and static electric interactions).  In this case, however, one of the interacting ‘objects’ is the gravitational field (which stores gravitational potential energy) and the other ‘object’ is the system of the Earth and the falling object.",
    },
    {id      : 6,
        label: 'L5: Electromagnetic \nInteractions\n70 min',
        x    : "-850",
        y    : "-850",
        description: "In this lesson, students learn how magnets can produce electric effects and how electric charges can produce magnetic effects.  In Part 1 students are reminded that a compass needle can serve as an indicator of a magnetic field. In Part 2 they first watch a movie of a simple electric circuit being constructed that causes a bulb to glow, and then a PhET simulation movie showing charges moving around an electric circuit.  Finally, they watch a movie showing that when an electric circuit is working, a wire wound around a compass needle causes it to rotate.  From this they infer that moving charges (an electric current) can create a magnetic field.   In Part 3 they watch movies from which they can infer that an electric field can cause an electric charge to move, and conversely, that when electric charges are moving, an electric field must be present.  Then they watch a PhET simulation movie of a magnet being moved back and forth near a coil of wire connected to a bulb, and from this infer that a magnet creates an electric field only when it is moving.  In summary, this lesson introduces students to electromagnetic interactions.",
    },
    {
        id   : 8,
        label: 'Ext A: More on\nElastic Energy',
        x    : "-925",
        y    : "-1075",
        description: "This extension provides students with additional experience working with the idea of elastic potential energy.  They first consider a tennis ball striking a tennis racket, causing both the ball and the racket mesh to change shape.  Then they consider additional situations involving a rubber band stretched between two low-friction carts on a track.  In both cases they identify the appropriate giver/receiver energy diagrams.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 9,
        label: 'Ext B: Magnetic\nPoles and Electric \nCharges (optional)',
        x    : "-700",
        y    : "-1075",
        description: "[<em>Students should work through this extension only if they had also worked through Lesson 2 during class</em>.] In this extension students first watch a movie from a PhET simulator, where a compass is moved around the area of a bar magnet, and from that infer which end of the compass needle is a North Pole.  Then they watch a series of movies involving interactions between two charged pieces of sticky tape, and between an acrylic sheet and a Styrofoam plate that are rubbed together.  Finally, they are introduced to a simple model representation of charges in the acrylic and Styrofoam.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 10,
        label: 'Ext C: Exploring \nMagnetic and \nElectric Fields',
        x    : "-475",
        y    : "-925",
        description: "In this extension students first use the PhET ‘magnet and compass’ simulation to explore the magnetic field in the region around a bar magnet.  Then they use the PhET ‘charges and field’ simulation to explore the electric field in the region around an electric charge. ",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 12,
        label: 'Ext D: Exploring \nGravitational Potential \nEnergy',
        x    : "-725",
        y    : "-785",
        description: "In this extension students work with the PhET ‘Energy Skate Park’ simulation to explore what happens to the kinetic energy of a skateboarder and the gravitational potential energy of the system when the skateboarder moves along different arrangements of tracks.  As the skateboarder moves up and down along the track, the simulation shows the corresponding changes in the kinetic energy and gravitational potential energy.  As long as there is no loss of energy to the surroundings because of heat interactions (an ideal track), any increases (decreases) in the kinetic energy correspond to equal decreases (increases) in gravitational potential energy. ",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 14,
        label: 'Ext E: More on \nElectromagnetic \nInteractions',
        x    : "-925",
        y    : "-785",
        description: "In this extension students use the PhET ‘Generator’ simulation to explore several different situations.  First, they explore what happens to the strength of the magnetic field if the strength of a bar magnet is changed.  Second, they work with a simulated electromagnet to determine how the magnetic field strength depends both on the number of loops and the voltage of the battery.  Third, they explore how the brightness of a bulb connected to some wire loops (a pickup coil) depends on how quickly a nearby magnet is moved and how close the magnet is to the loops.  Finally they work with a simulated generator that consists of a rotating magnet connected to a wheel whose rotational speed is determined by the flow of water striking it from a faucet.  They explore how the value of the voltage induced in a nearby pickup coil depends on both the rotational speed of the magnet (connected to the wheel) and the number of loops in the pickup coil.",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    }
]);


// create an array with edges
var edges = new vis.DataSet([
    {from : 1,
        to: 2
    },
    {from : 2,
        to: 3
    },
    {from : 3,
        to: 4
    },
    {from : 4,
        to: 5
    },
    {from : 5,
        to: 6
    },
    {from : 6,
        to: 7
    },
    {from : 7,
        to: 10
    }
]);

// create an array with edges
var edges2 = new vis.DataSet([
    {from : 1,
        to: 2
    },
    {from : 2,
        to: 3
    },
    {from : 3,
        to: 4
    },
    {from : 4,
        to: 6
    }
]);

var container  = document.getElementById('canvas');
var container2 = document.getElementById('canvas2');
// provide the data in the vis format
var data       = {
    nodes: nodes,
    edges: edges
};
var data2      = {
    nodes: nodes2,
    edges: edges2
};

var options = {
    "physics"  : {
        enabled: false
    },
    interaction: {
        dragNodes: false,
        dragView : false,
        zoomView : false
    },
    edges      : {
        arrows: {to: true},
        color : {
            highlight: '#9bc48a',
        }
    },
    nodes      : {
        shape              : 'box',
        borderWidthSelected: 10,
        borderWidth        : 10,
        color              : {
            border    : '#b9cde5',
            background: '#b9cde5',
            highlight : {
                border    : '#9bc48a',
                background: '#9bc48a'
            },
            hover     : {
                border    : '#b9cde5',
                background: '#b9cde5'
            }
        },
        shapeProperties    : {
            borderRadius: 0
        }
    }
};


var network  = new vis.Network(container, data, options);
var network2 = new vis.Network(container2, data2, options);

network.on("click", function (params) {
    var $canvas      = $(params.event.target.parentNode.parentNode);
    var ids          = params.nodes;
    var clickedNodes = nodes.get(ids);
    var label        = clickedNodes[0].label;
    var description  = clickedNodes[0].description;
    setUpDrawer($canvas, label, description);
});

network2.on("click", function (params) {
    var $canvas      = $(params.event.target.parentNode.parentNode);
    var ids          = params.nodes;
    var clickedNodes = nodes2.get(ids);
    var label        = clickedNodes[0].label;
    var description  = clickedNodes[0].description;
    setUpDrawer($canvas, label, description);
});

function setUpDrawer(canvas, label, description) {
    canvas.next('div.canvas-drawer').html('<h4>' + label + '</h4><p>' + description + '</p>');
}

