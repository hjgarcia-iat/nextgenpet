// create an array with nodes
var nodes = new vis.DataSet([{
    id: 1,
    label: 'A1: Interactions \nnd Force\n120 min',
    x: "-850",
    y: "-1000",
    description: "In this activity, students begin to develop their understanding of a force as a push or pull that is applied to an object during an interaction with a second object. In Initial Ideas, they think about the motion of a soccer ball that is given a kick and rolls across the grass, gradually slowing to a stop. They also identify what forces are acting on the ball both during and after the kick. During the class discussion, many different ideas are likely to emerge. In Exploration #1 students consider a cart that is given three quick pushes to increase its speed and where, on its speed-time graph, a force is pushing it forward. They gather evidence to test their thinking either by using a force sensor themselves (optional) or by watching one being used in a movie of the experiment. The evidence shows that the force of the push disappears as soon as contact is lost, but some students may be reluctant to accept this. The Summarizing Questions probe their current thinking about force and motion and whether force is a quantity that can be transferred (like energy) or not."
}, {
    id: 2,
    label: 'A2: Motion \nwith a Continuous \nForce\n110 min',
    x: "-650",
    y: "-1000",
    description: "In this activity, students examine how an object moves when a continuous constant force is applied to it. In Initial Ideas, they predict what the motion of a low-friction cart would be like if it was continuously pushed. In the Exploration, students first determine that it is difficult for a person to apply such a force, check to see if a fan unit supplies a constant force, and then use one to apply such a force to a cart. They see that a constant force produces a continuous increase in speed along the length of a single track. Then they watch a movie showing that the speed still increases along three tracks. The Summarizing Questions address what the evidence shows and then revisit the soccer ball scenario from A1. At the end of the activity, students are introduced to writing scientific explanations using ideas about force and motion."
}, {
    id: 3,
    label: 'A3: Pushes \nand Slowing \nDown\n60 min',
    x: "-485",
    y: "-1000",
    description: "In this activity, students examine how a moving object behaves when a force is applied to it in the opposite direction to its motion. In Exploration #1, they see that gentle ‘backward’ taps applied to a moving cart decrease its speed, gathering evidence either by using a force sensor themselves (optional) or by watching one being used in a movie of the experiment. In Exploration #2, they give a cart a quick push to start it moving and use a fan unit to apply a continuous force to a cart in the opposite direction to its motion. From this, they see that the speed continuously decreases until the cart reverses direction sand speeds up again. In the Summarizing Questions, they practice using the ideas they have developed in the first three activities of this unit. "
}, {
    id: 4,
    label: 'A4: Friction \nand Slowing\n90 min',
    x: "-485",
    y: "-875",
    description: "In this activity students examine the frictional force acting on moving objects. In Initial Ideas, they give their own ideas about whether friction is a force or not and how it works to slow moving objects. In Exploration #1, they compare the slowing effect of a friction pad on a low friction cart to that of a fan acting on a moving cart in the opposite direction to its motion. From the similarity of their effects, they should infer that friction is a force that acts on objects in the opposite direction to their motion. In Exploration #2, they launch a wooden block across a bare tabletop and then across sandpaper, and measure how far it travels. They then launch the block again so that it encounters a succession of vertical sticky notes that act as barriers. The sticky notes are intended as an analogy for how friction works, with the moving object encountering successive ‘bumps’, slowing it as it moves. Having now identified friction as a force that opposes motion, the last summarizing question addresses the idea that if no forces act on a moving object, it will continue moving at a constant speed."
}, {
    id: 5,
    label: 'A5: Changing \nForce Strength \nand Mass\n80 min',
    x: "-650",
    y: "-875",
    description: "In the first four activities of the unit students establish that the effect of a single force is to change an object’s speed. In this activity students examine how changing the strength of the force and the mass of the object affect the rate at which the speed changes. In Initial Ideas, they predict what (if anything) would be different about the motion of two identical low friction carts if they were pushed by forces of different strengths. In Exploration #1, they test their thinking by examining how changing the strength of a fan affects when it acts to either increase or decrease a cart’s speed. In Exploration #2, they work with another group to compare the motions of two carts with different masses, but with the same strength fan force acting on them. They then consider how they could make a more massive cart move with the same rate of increasing speed as a less massive one. In the Summarizing Questions they consider their findings, eventually deciding on an algebraic expression that would allow them to calculate the rate of change of speed for any object, given its mass and the strength of the force acting on it."
}, {
    id: 6,
    label: 'A6: Falling \nObjects\n80 min',
    x: "-825",
    y: "-875",
    description: "In this activity, students apply their ideas about force and motion to the context of falling objects. In Initial Ideas, they predict whether a soccer ball or bowling ball will hit the ground first when dropped from the same height at the same time. They explain their predictions in terms of the forces acting on the balls. In Exploration #1, they watch a simulation of a falling ball and infer from its speed-time graph that a constant-strength force acts on it. They then drop small objects of different masses from the same height at the same time and see that they fall together, suggesting that their speeds must increase at the same rate. In Exploration #2, they compare the effort it takes to support objects with different masses, inferring that the gravitational force pulling downward on an object depends on its mass. They try to reconcile their two results (objects increase speed at the same rate, regardless of mass, yet the gravitational force pulling them differs) by considering races between different mass carts on a track and translating that to vertical motion. In Exploration #3, they consider the effect of air on falling objects. The Summarizing Questions allow for further discussion of what is difficult reasoning for some."
}, {
    id: 7,
    label: 'A7: Engineering \nDesign: A Better \nCar Bumper\n80 min',
    x: "-1000",
    y: "-875",
    description: "In this engineering design activity, students are presented with a challenge to design a car bumper that will better protect pedestrians in low-speed collisions. The goal of a successful design is to (greatly) reduce the maximum strength exerted on a pedestrian at a given (low) speed. Students use the low-friction carts used earlier in this unit and Unit EM to test their designs. They are constrained to design front bumpers for these carts that are no more than 1.5 inches thick. Students begin by deciding upon at least three different materials to try, and predict which one will work best. Then they experiment using the carts, tracks, and a force probe to measure the force exerted during the collision. They begin with no bumper as a baseline, and then test each of their materials. They decide which material worked the best, and then try to optimize their solution (by changing the thickness or orientation of their bumper; combining different materials, etc.). The final challenge is for each group to test their designs against each other in a competition; then the class discusses why the winning challenge was the most effective."
}, {
    id: 10,
    label: 'Ext A: Force \nDiagrams',
    x: "-750",
    y: "-1075",
    description: "In this extension, students are introduced to units of force (N) and to force diagrams. Each force diagram includes a force arrow and a motion (speed) arrow.",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5'
    },
    hover: {
        border: '#fcd5b5',
        background: '#fcd5b5'
    }
}, {
    id: 11,
    label: 'Ext B: Pushing a \nSkateboarder',
    x: "-550",
    y: "-1075",
    description: "In this extension, students consider the speed-time and force-time graphs for a situation where a skateboarder is pushed for a short duration of time.",
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
    label: 'Ext C: Connecting \nForce and \nEnergy Models',
    x: "-350",
    y: "-950",
    description: "In this extension, students consider several situations where they analyze an interaction between two objects in terms of an energy model approach (using G/R energy diagrams) and a force model approach (using force diagrams).  They then consider the differences between an energy-based explanation of a phenomenon and a force-based explanation.",
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
    label: 'Ext D: How Does \nFriction \nWork?',
    x: "-565",
    y: "-800",
    description: "In Activity 4 students concluded that friction was a ‘backwards’ force on a moving object.  In this extension, students consider analogies (sandpaper and sticky notes) for how friction works; that is, they consider what the mechanism is for the ‘backward’ force called friction that a surface exerts on a moving object.  They also briefly consider the air resistance (air drag) on a moving car that is caused by the air pushing against the moving object in a direction opposite to its motion.",
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
    label: 'Ext E: Changing \nDirection',
    x: "-750",
    y: "-800",
    description: "So far in this unit students have studied the motion of objects moving along one dimension (horizontally).  Forces were exerted either along or opposite to the direction of motion.  In this extension, students consider what happens to the motion of a moving object if a force is exerted sideways to the motion.  They watch movies of a hovercraft puck (which moves across smooth surfaces on a cushion of air to minimize friction), and observe what happens when there are repeated sideways taps exerted on the puck.  Essentially the same situation is depicted in a simulation movie, showing taps (with force arrows) on a soccer ball following an octagonal path. Then they watch a movie of a simulation and consider what happens when a continuous sideways force is acting on a moving object (it moves in a circular path).  Finally, they are asked what happens if the continuous sideways force is suddenly removed.",
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
    label: 'A1: Combination \nof Forces\n60 min',
    x: "-975",
    y: "-1000",
    description: "In Unit FM students only considered the effect of a single force acting on an object. In this activity, they are introduced to unbalanced combinations of forces and how they affect the motion of objects. In Initial Ideas, they consider the motion of a low-friction cart with two opposing fan units of different strength mounted on it. In Exploration #1, they consider a cart that starts at rest, with two forces acting on it in various combinations. They predict what its motion would be like, and what single force would be needed to make an identical cart behave in exactly the same manner. They check their thinking by watching movies of simulations of the two carts moving side-by-side. In Exploration #2, they consider similar situations for a cart that is already in motion. After this they are introduced to the idea of a net force. In theSummarizing Questions, they consider why the idea of a net force makes sense and practice using the ideas they have developed.  ",
}, {
    id: 2,
    label: 'A2: Motion \nwith \nBalanced Forces\n90 min',
    x: "-775",
    y: "-1000",
    description: "Having considered unbalanced combinations of forces in the previous activity, students now investigate the effect of balanced combinations of forces. In Initial Ideas, they predict what would happen to a low friction cart with balanced forces acting on it. At the start of start of Exploration #1, the instructor performs a demonstration to check their thinking. To further support these results, they watch a movie of a simulation and conclude that when the forces on an object are balanced, its speed remains constant. In Exploration #2 they experiment with a friction cart with a fan attached, inferring whether the forces acting on it are balanced or unbalanced under different circumstances. In the Summarizing Questions, they consider why these results make sense in terms of the net force and practice using their ideas about both balanced and unbalanced forces. The final question gives them a chance to rationalize the commonly held misconception that a constant force is associated with constant speed. ",
}, {
    id: 3,
    label: 'A3: Comparing \nForces During \nInteractions\n90 min',
    x: "-600",
    y: "-1000",
    description: "In this activity, students consider how the forces interacting objects exert on each other compare in both strength and direction. The Initial Ideas section elicits their ideas about the forces acting between colliding vehicles that have different masses and speeds. In Exploration #1, they consider a collision between two carts to infer that the forces acting between them are in opposite directions. In the rest of the activity they optionally use force plates and force probes themselves, or watch movies of them being used, to measure the forces acting between objects that interact under various conditions. The results show them that in all cases the force pairs have the same strength. In the Summarizing Questions they apply their findings and consider why, if the forces are the same, objects in a collision may show very different effects. They are then introduced to Newton’s Third Law and consider how such pairs of forces are different from what they call 'balanced forces.'",
}, {
    id: 4,
    label: 'A4: Explaining \nPhenomena Using \nForce Ideas\n60 min',
    x: "-600",
    y: "-800",
    description: "In this activity, students use the ideas they have developed about forces and motion over the course of the whole module to evaluate and construct explanations for various phenomena. They are first reminded of the criteria for a good explanation and then consider some diagrams and narratives about a hockey puck sliding across the ice. Next they consider why the pilot of a taxiing plane has to reduce the engine force when he reaches his desired taxiing speed after starting from rest. In the third explanation they consider why a bug gets ‘squished’ when it hits the windshield of a moving car. Finally, they play the role of an expert witness in a scenario involving a case sliding off a luggage rack in a bus that stops quickly.",
}, {
    id: 5,
    label: 'A5: Engineering \nDesign: Inspiration \nfrom Nature\n90 min',
    x: "-900",
    y: "-800",
    description: "In this engineering design activity, students are presented with a model Whirligig that they can cut out and allow to fall.  Their challenge is to design a better Whirligig, one that falls more slowly to the ground (while remaining stable).  They need to construct two possible solutions, test them experimentally, and then explain in terms of Newton’s Second Law why their best model falls more slowly than the original model.",
}, {
    id: 8,
    label: 'Ext A: Newton\'s \nSecond \nLaw',
    x: "-875",
    y: "-1075",
    description: "In this extension students apply the more general case of Newton’s Second Law (using net force) to various situations.",
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
    label: 'Ext B: More \non Balanced \n Forces',
    x: "-700",
    y: "-1075",
    description: "In this extension, students practice analyzing several situations involving balanced forces.  The last part of the extension discusses Newton’s First Law.",
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
    label: 'Ext C: Balanced \nand Unbalanced \nForces',
    x: "-465",
    y: "-945",
    description: "In this extension students review how objects behave when subjected to balanced and unbalanced forces, and then focus on situations involving friction.",
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
    label: 'Ext F: Newton\'s \nThird Law and \nBalanced \nForces',
    x: "-465",
    y: "-865",
    description: "In this extension students first consider several situations where they need to apply Newton’s Third Law: colliding carts, walking, and rocket propulsion.  Then they consider the difference between action-reaction pair forces (acting on two different object) and balanced forces (acting on a single object), which is often confusing to students.",
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
    label: 'Ext DS: More \non Vertical \nMotion',
    x: "-750",
    y: "-735",
    description: "In this extension students apply Newton’s Second Law to situations involving vertical motion.  They first analyze tossing a ball upwards, then an object sitting on a table, and finally a moving elevator.  Then they consider air drag and how it affects the motion of a falling object, including a discussion of terminal velocity.",
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
}]);
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
    to: 5
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