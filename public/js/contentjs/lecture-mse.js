// create an array with nodes
var nodes = new vis.DataSet([
    {id      : 1,
        label: 'L1: Modeling and \nthe Mystery Tube\n35 min',
        x    : "-900",
        y    : "-1000",
        description: "The purpose of this lesson is to introduce students to the modeling process in an interesting way that does not depend on knowing specific scientific content.  The situation involves a tube with four holes in it and with strings hanging out each of the holes. They are shown a movie of what happens when one of the strings is pulled out.  From this observation, students develop their initial model (diagram) of how they think the strings are arranged/connected inside the opaque tube. Based on this model, they make a prediction about what would happen if a different string were pulled out. Then they observe the movie showing what actually happens and revise their model if necessary. The process continues, with students make additional predictions, observations (movies) and revisions of their model (diagram), until they can account for all the observations.  "
    },
    {id      : 2,
        label: 'L2: Exploring \nMagnetic \nEffects\n90 min',
        x    : "-700",
        y    : "-1000",
        description: "This lesson introduces students to some properties of the magnetic interaction. First, they learn that only certain metals (iron and nickel) are attracted to a magnet. Then they perform experiments with nails that are either rubbed or not rubbed with a magnet. They discover that each end of a rubbed nail attracts both ends of an un-rubbed nail, and that each end of a rubbed nail attracts one end of another rubbed nail and repels the other end. Students also observe that a rubbed nail, when allowed to float freely, always orients itself along the geographic north-south direction. Finally, using a compass, they conclude that like Poles of two magnetized objects repel each other, and unlike Poles attract (the Law of Magnetic Poles)."
    },
    {id      : 3,
        label: 'L3: Developing \na Model \nfor Magnetism\n70 min',
        x    : "-485",
        y    : "-1000",
        description: "Students suggest an initial model for what happens inside a nail when it is rubbed to explain how a rubbed nail differs from an unrubbed nail. They test their model by predicting what happens if the nail is cut in half. Then they watch two movies of experiments in which a magnetized nail is cut in half, and then another magnetized nail is cut into one-third and two-third pieces.  In both cases, the cut nail pieces behave like the original magnetized nail.  They conclude that a magnetized nail cut anywhere along its length will produce two pieces that are each magnetized. Based on this evidence they work on revising their initial models (if appropriate), and may e-mail their revised models to their instructor."
    },
    {id      : 4,
        label: 'L4: Better Model \nfor Magnetism\n60 min',
        x    : "-485",
        y    : "-800",
        description: "Before starting this lesson, the instructor may show some of the revised models e-mailed to him at the end of the previous lesson.  At this point, many of the students’ revised models cannot explain why a magnetized (rubbed) nail cut anywhere along its length produces two magnetized nail pieces. The purpose of this activity is to provide additional physical evidence, simulation evidence, and analogies to help students re-conceptualize what the entities inside a nail might be, and what might happen to them when the nail is rubbed with a magnet.  By the end of the activity, the majority of the class supports a ‘tiny magnets alignment model’ of magnetism.  This assumes that inside an unmagnetized nail, there are large numbers of tiny magnets (domains) that have their North Poles randomly oriented, thus producing no external magnetic effects.  Rubbing the nail with a magnet causes the tiny magnets to align (according to the Law of Magnetic Poles), with their North Poles all pointing in the same direction, thus producing a large external magnetic effect."
    },
    {id      : 5,
        label: 'L5: Explaining \nPhenomena Involving \nMagnetism\n70 min',
        x    : "-665",
        y    : "-800",
        description: "In this lesson students apply the <em>Tiny Magnets Alignment Model</em> to make predictions and explain a variety of magnetic phenomena.  First, they predict two ways they could rub a nail to make its tip end a North Pole, and then they test their predictions. Second, they predict what would happen if the tip of an unmagnetized nail is held close to, but not touching, the North Pole of a magnet, and then they test their predictions. Third, they explain why a magnet attracts a (steel) paper clip.  Finally, they predict what would happen to a magnetized nail that is heated to a high temperature and then cooled.  They watch a movie to see what actually happens."
    },
    {id      : 6,
        label: 'L6 ED: Engineering Design: \nIs the U.S. Losing \nits Edge?\n60 min',
        x    : "-900",
        y    : "-800",
        description: "In this engineering design lesson, students are presented with a brief description of the maglev (magnetic levitation) train system and are introduced to a brief description of the steps in the engineering design process. Students are then challenged to sketch out (but not construct) the design of a simple ‘maglev-like’ system where an object can move a certain distance while floating above the surface.  An initial question involves what types of magnetic strips (with different arrangement of Poles) would be best to use for the bottom of a train and on the track so that the train would levitate.  Then students sketch a design for the model maglev system, consisting of a long box (for the ‘tracks’), a light object (for the ‘train’), and magnets or magnetic strips.  They explain how their model system would work based on ideas from the unit.  Following this, they consider two scenarios involving an actual maglev train: (1) the track ahead has developed a crack in it; and (2) there is a fire along the tracks ahead of them.  For each scenario they are asked whether they should worry about it, and to justify their response in terms of ideas developed during the unit."
    },
    {id      : 7,
        label: 'L7: Exploring Static \nElectric Effects (Optional)\n40 min',
        x    : "-900",
        y    : "-900",
        description: "[<em>Students could work through this optional lesson if they do not work through the unit of static electricity</em>.] In this lesson students watch videos to collect evidence about how electrically charged objects interact with other electrically charged objects and with non-electrically charged objects.  They also collect evidence that suggests that charged objects behave differently than magnetized objects, and therefore that the explanations (models) for magnetism phenomenon and static electric phenomenon must be different. "
    },
    {
        id   : 8,
        label: 'Ext A: Exploring the \nRegion around \na Magnet',
        x    : "-615",
        y    : "-1075",
        description: "Students use the PhET Magnet and Compass simulation to explore what happens to a compass as it is moved around in the region surrounding a bar magnet. ",
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
        label: 'Ext B: Evaluating \nMagnetism \nModels',
        x    : "-350",
        y    : "-900",
        description: "Students are shown several examples of magnetism models proposed by (hypothetical) students and are asked to determine what phenomena these models can (and cannot) explain.",
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
        label: 'L1: Exploring \nStatic Electric \nEffects\n60 min',
        x    : "-950",
        y    : "-1000",
        description: "Students perform experiments and/or watch videos to collect evidence about how electrically charged objects interact with other electrically charged objects and with other non-electrically charged objects.  "
    },
    {id      : 2,
        label: 'L2: Developing a \nModel for Static \nElectricity\n75 min',
        x    : "-775",
        y    : "-1000",
        description: "Based on their observations from L1 and Exts A and B, students develop their first models to explain what happens when: (1) an acrylic sheet and Styrofoam plate are rubbed together; (2) when a + charged acrylic sheet is touched to the metal tinsel of a soda can electroscope; and (3) when a wool-rubbed, charged plastic stirrer looses its charge when touched by fingers or dropped in water."
    },
    {id      : 3,
        label: 'L3: Representing \nUncharged Objects \nIn Your Model\n60 min',
        x    : "-600",
        y    : "-1000",
        description: "Students propose an initial model for what kinds of entities are in an uncharged soda can electroscope (metal can and tinsel).  Then they explore and explain what happens when a + charged acrylic sheet is brought close to the non-tinsel end of the electroscope (without touching), causing the tinsel to spread out, followed by the + charged acrylic being moved far away again."
    },
    {id      : 4,
        label: 'L4: Refining \nModel for \nDifferent Materials\n60 min',
        x    : "-600",
        y    : "-800",
        description: "Students watch a movie of a + charged acrylic sheet touching the base ends of two electroscopes: the soda can, made of metal, and the water bottle made of plastic. They observe the tinsel spreads out in the former case, but does nothing in the latter, and then develop a model-based explanation. They also consider how to discharge both metallic and non-metallic objects, and to explain why it happens."
    },
    {id      : 6,
        label: 'L5: Explaining \nPhenomena Involving \nStatic Electricity\n45 min',
        x    : "-800",
        y    : "-800",
        description: "At the beginning of the lesson students review the consensus ‘Charges in Materials’ model, and then use that model to explain some examples of interesting phenomena: (1) why a charged rubber balloon can pick up small pieces of aluminum foil and paper; and (2) what happens when certain materials stick together when removed from a dryer (‘static cling’). "
    },
    {
        id   : 8,
        label: 'Ext A: Which \nis Charge \nis Which?',
        x    : "-925",
        y    : "-1075",
        description: "Students work with movies from a simulation to learn about the triboelectric series, from which they can determine how materials rubbed together will be charged (+ or -).  ",
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
        label: 'Ext B: The Law \nof Electric \nCharges',
        x    : "-800",
        y    : "-1075",
        description: "Students work with the PhET simulation, ‘Electric Field Hockey,’ to explore how + and - electric charges affect each other.  They conclude that like charges repel each other and unlike charges attract (law of electric charges), and that the strength of the interaction depends on the distance between the charges and the amount of charge.  ",
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
        label: 'Ext C: Electroscope \nand Negatively(-) \nCharged Object',
        x    : "-425",
        y    : "-935",
        description: "Students explore and explain what happens when a negatively charged Styrofoam plate is brought near the base end of the uncharged electroscope.   They observe what happens by watching a movie, and then consider and choose one of several possible models to explain it. They receive model-based feedback from a movie of a computer simulation (similar to the one they watched during class).",
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
        label: 'Ext D: Nature \nof Charged \nEntities ',
        x    : "-425",
        y    : "-865",
        description: "Students consider which type of charge (+, - or both) is actually transferred when two different materials (e.g., acrylic and Styrofoam) are rubbed together.  Initially they consider all possibilities (+ is transferred, - is transferred, both are transferred), but learn about the atomic model and in the end conclude that only – charged particles (electrons) are transferred. ",
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
        label: 'Ext E: Discharging \nCharged \nObjects',
        x    : "-610",
        y    : "-715",
        description: "Students use their current model for charged materials to explore and explain what happens when charged objects are discharged in terms of the movement of – charges.  They use the PhET simulation, ‘John Travoltage,’ to get feedback on their ideas, and also develop an explanation for ‘static’ shock. ",
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
        label: 'Ext F: Charged \nand Uncharged \nObjects ',
        x    : "-780",
        y    : "-722",
        description: "Students learn how an uncharged object (either a metal or non-metal) interacts with another charge (either + or -).  Using the PhET ‘Electric Field Hockey’ simulation, students learn that the entire uncharged metal object becomes polarized, whereas each atom in the uncharged non-metal object becomes polarized. In either case, because the negative charges in the uncharged object are now at different distances from the external charge than are the positive charges, there is a net attraction between the external charge and the uncharged object.",
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

    if (clickedNodes.length > 0) {
        var label       = clickedNodes[0].label;
        var description = clickedNodes[0].description;
        setUpDrawer($canvas, label, description);
        scrollWindow($canvas);
    }

});

network2.on("click", function (params) {
    var $canvas      = $(params.event.target.parentNode.parentNode);
    var ids          = params.nodes;
    var clickedNodes = nodes2.get(ids);
    if (clickedNodes.length > 0) {
        var label       = clickedNodes[0].label;
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
    $('html, body').animate({scrollTop: distance});
}

