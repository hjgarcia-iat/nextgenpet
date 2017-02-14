// create an array with nodes
var nodes = new vis.DataSet([
    {id      : 1,
        label: 'L1: Interactions, \nForce and \nMotion\n60 min',
        x    : "-900",
        y    : "-1000",
        description: "In this lesson, students are introduced the idea of describing interactions in terms of forces.  Students consider two important issues regarding impulsive forces (quick pushes or pulls): (1) When does the force of a quick push stop acting on an object? (2) When an object is moving, must there be a force pushing it in the direction of its motion?  These two issues are addressed in L1 because research has shown that the underlying ideas are problematic for students.  Students commonly think that during a push, ‘force’ is transferred to an object and is then thereafter carried by the object. They also commonly assume speed implies force; that is, if an object is moving there must be a force causing it to move.  The lesson provides both evidence and opportunities for students to think about these issues, but it is unlikely that all students will leave the lesson with a Newtonian understanding.  Hopefully, they will develop that understanding as they continue through the unit. In the last part of the lesson students are encouraged to compare both an energy description and a force description of the same interaction as a way of helping them distinguish between energy and force ideas."
    },
    {id      : 2,
        label: 'L2: Motion \nwith a Continuous \nForce\n35 min',
        x    : "-675",
        y    : "-1000",
        description: "In this lesson, students consider the motion of an object subject to a constant and continuous force.  First they consider how to produce a force that is constant and continuous.  Pushing a cart with your hand does not seem to work, but using a fan unit to push the cart does work.  Then students obtain evidence that a continuous (and constant) force will cause an object to speed up continuously (at a constant rate) (assuming there are no other forces acting on the object)."
    },
    {id      : 3,
        label: 'L3: Pushes \nand Slowing \nDown\n40 min',
        x    : "-485",
        y    : "-1000",
        description: "In this lesson, students consider what happens to a moving cart if a force acts on it that is opposite in direction to the motion.  In Part 1 students investigate what happens when the so-called ‘backward force’ is impulsive (quick shove), and in Part 2 they consider what happens when the ‘backward force’ is continuous.  In both cases, when the backward force acts on the object, the object slows down. "
    },
    {id      : 4,
        label: 'L4: Forces \nand Friction\n35 min',
        x    : "-485",
        y    : "-875",
        description: "In this lesson students consider what friction is.  They know friction tends to slow objects down, but they may not know that it is a force pointing in a direction opposite to the motion of the object.   To find out, students compare speed-time graphs for a cart moving in one direction with a fan exerting a force on it in the other direction (after the cart is given a shove to start it moving) with the speed-time graph for a moving cart with a friction pad attached and pressing against the track.  They observe that both speed-time graphs are very similar.  Assuming similar effects have similar causes, students can conclude that friction behaves like a backwards force that acts on a moving object and causes it to slow down (if it’s the only force acting on the object)."
    },
    {id      : 5,
        label: 'L5: Changing \nForce Strength \nand Mass\n40 min',
        x    : "-675",
        y    : "-875",
        description: "During the previous four lessons students considered the effect on an object’s motion when a force (any force) acted on it.  In this lesson students consider how the motion of the object might be affected by changing either the strength of the force being exerted on it and/or the mass of the object itself.  First students consider changes in the force strength. For most students, the results are intuitive: increasing the force strength will increase the rate at which the object changes its speed.  Then students focus on the effects of changing an object’s mass.  When the force is in the same direction as the object’s motion, most students realize that a more massive object will speed up at a lesser rate.  The situation when the force opposes the motion is more challenging for students.  Based on the evidence, they conclude that in the latter case, the more massive object slows down at a lesser rate than the less massive object.  Finally students quantify the above results and end up with a mathematical model representing Newton’s Second Law for a single force acting on an object of a given mass:  Rate of change in speed = strength of force/mass of object."
    },
    {id      : 6,
        label: 'L6: Falling \nObjects\n50 min',
        x    : "-900",
        y    : "-875",
        description: "In this lesson, students learn about the gravitational force on falling objects.  Thinking about the effects of gravity being caused by a force of the Earth on an object is challenging for students because they don’t ‘feel’ the force; they just know that objects fall down when not supported.  First students watch a movie of a falling basketball and its speed-time graph.  Because the speed is constantly increasing, students conclude that there must be a force acting on the ball, and that Earth is the object that interacts with the ball.  Then they investigate whether a falling object’s mass affects the rate at which its speed increases. Students watch a movie where pairs of objects of different masses are dropped together and conclude that all objects fall at the same rate of increasing speed regardless of mass (ignoring air drag). They consider whether the gravitational force strength on a falling object depends on its mass, and conclude that the more massive the object, the stronger the gravitational force.  Finally, students put everything together to develop an understanding of why more massive objects fall at the same rate of change in speed as less massive objects. This also follows from Newton’s Second Law."
    },
    {
        id       : 7,
        label    : 'Ext A: Force \nDiagrams',
        x        : "-775",
        y        : "-1075",
        description: "In this extension, students are introduced to units of force (N) and to force diagrams. Each force diagram includes a force arrow and a motion (speed) arrow.",
        color    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        hover    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        }
    },
    {
        id   : 8,
        label: 'Ext B: Pushing a \nSkateboarder',
        x    : "-575",
        y    : "-1075",
        description: "In this extension, students consider the speed-time and force-time graphs for a situation where a skateboarder is pushed for a short duration of time.",
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
        label: 'Ext C: Connecting \nForce and Energy \nModels',
        x    : "-345",
        y    : "-935",
        description: "In this extension, students consider several situations where they analyze an interaction between two objects in terms of an energy model approach (using G/R energy diagrams) and a force model approach (using force diagrams).  They then consider the differences between an energy-based explanation of a phenomenon and a force-based explanation.",
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
        label: 'Ext D: How Does \nFriction Work?',
        x    : "-575",
        y    : "-800",
        description: "In Lesson 4 students concluded that friction was a ‘backwards’ force on a moving object.  In this extension, students consider analogies (sandpaper and sticky notes) for how friction works; that is, they consider what the mechanism is for the ‘backward’ force called friction that a surface exerts on a moving object.  They also briefly consider the air resistance (air drag) on a moving car that is caused by the air pushing against the moving object in a direction opposite to its motion.",
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
        label: 'Ext E: Changing \nDirection',
        x    : "-800",
        y    : "-800",
        description: "So far in this unit students have studied the motion of objects moving along one dimension (horizontally).  Forces were exerted either along or opposite to the direction of motion.  In this extension, students consider what happens to the motion of a moving object if a force is exerted sideways to the motion.  They watch movies of a hovercraft puck (which moves across smooth surfaces on a cushion of air to minimize friction), and observe what happens when there are repeated sideways taps exerted on the puck.  Essentially the same situation is depicted in a simulation movie, showing taps (with force arrows) on a soccer ball following an octagonal path. Then they watch a movie of a simulation and consider what happens when a continuous sideways force is acting on a moving object (it moves in a circular path).  Finally, they are asked what happens if the continuous sideways force is suddenly removed.",
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
        label: 'L1: Combination of \nForces\n50 min',
        x    : "-925",
        y    : "-1000",
        description: "In this lesson, students learn how to analyze situations where there are two or more forces simultaneously acting on an object (in one dimension only) and the forces are unbalanced.  By viewing a series of simulations, students consider what single force could replace a combination of forces acting on an object to produce the exact same motion.  This single force is called the ‘net force,’ and students figure out how to calculate the net force given the directions and strengths of all the forces acting on the object. By the end of the lesson, students learn they can apply Newton’s Second Law to a situation where there is a combination of forces acting on an object by simply replacing the term ‘force’ with ‘net force.’  ",
    },
    {id      : 2,
        label: 'L2: Balanced \nForces\n40 min',
        x    : "-755",
        y    : "-1000",
        description: "In this lesson, students consider the special situation where the forces acting on an object are balanced; that is, the sum of the strengths of the forces acting on an object in one direction equals the sum of the strengths of the forces acting on the same object in the opposite direction.  They consider both an object at rest and an object already moving.  Students conclude that when balanced forces act on an object in motion, the object continues to move at the same speed (in the same direction).  At the end of the lesson, students are introduced to Newton’s First Law of Motion. ",
    },
    {id      : 3,
        label: 'L3: Situations \nInvolving Friction\n50 min',
        x    : "-600",
        y    : "-1000",
        description: "In this lesson students consider three situations involving a fan cart with a friction pad attached.  In the first scenario, the fan strength exceeds the strength of the backward frictional force; in the second scenario, the cart starts at rest with the two forces of equal strength; and in the third scenario, the oppositely directed forces remain of equal strength and the experimenter gives the cart a shove.  In each case students need to decide if the forces are unbalanced or balanced, and then draw an appropriate force diagram. In the Summarizing Questions, students consider two scenarios involving a person pushing against a sofa. ",
    },
    {id      : 4,
        label: 'L4: Comparing \nForces During \nInteractions\n50 min',
        x    : "-600",
        y    : "-800",
        description: "In this lesson, students consider the strength and direction of the forces that two objects exert on each other during an interaction.  Students consider various scenarios, watch movies to collect evidence, and conclude that regardless of the relative masses or speeds of the interacting objects, the forces that the interacting objects exert on each other are always equal in strength and oppositely directed.  This is Newton’s Third Law.  At the end of the lesson, the students consider the difference between the implications of the Third Law on two interacting objects and the implications of balanced forces on a single object.",
    },
    {id      : 5,
        label: 'L5 ED: Engineering \nDesign: Inspiration \nfrom Nature\n60 min',
        x    : "-800",
        y    : "-800",
        description: "In this engineering design lesson, students are presented with a model whirligig that they can cut out and allow to fall.  Their challenge is to design a better whirligig, one that falls more slowly to the ground (while remaining stable).  They need to construct two possible solutions, test them experimentally, and then explain in terms of Newton’s Second Law why their best model falls more slowly than the original model.",
    },
    {
        id   : 8,
        label: 'Ext A: Newton\'s \nSecond \n Law',
        x    : "-835",
        y    : "-1075",
        description: "In this extension students apply the more general case of Newton’s Second Law (using net force) to various situations.",
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
        label: 'Ext B: More on \nBalanced \n Forces',
        x    : "-675",
        y    : "-1075",
        description: "In this extension, students practice analyzing several situations involving balanced forces.  The last part of the extension discusses Newton’s First Law.",
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
        label: 'Ext C: Balanced \nand Unbalanced \nForces',
        x    : "-465",
        y    : "-935",
        description: "In this extension students review how objects behave when subjected to balanced and unbalanced forces, and then focus on situations involving friction.",
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
        label: 'Ext D: More on \nVertical Motion \n(Air Drag)',
        x    : "-465",
        y    : "-865",
        description: "In this extension students apply Newton’s Second Law to situations involving vertical motion.  They first analyze tossing a ball upwards, then an object sitting on a table, and finally a moving elevator.  Then they consider air drag and how it affects the motion of a falling object, including a discussion of terminal velocity. ",
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
        label: 'Ext E: Newton\'s \nThird Law and \nBalanced Forces',
        x    : "-685",
        y    : "-725",
        description: "In this extension students first consider several situations where they need to apply Newton’s Third Law: colliding carts, walking, and rocket propulsion.  Then they consider the difference between action-reaction pair forces (acting on two different object) and balanced forces (acting on a single object), which is often confusing to students.",
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
    }
]);

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
        to: 5
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
