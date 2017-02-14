// create an array with nodes
var nodes = new vis.DataSet([
    {
        id         : 1,
        label      : 'A1: Modeling \nand the \nMystery Tube \n80 min',
        x          : "-850",
        y          : "-1000",
        description: "The purpose of this activity is to introduce students to the modeling process in an interesting way that does not depend on knowing specific scientific content.  The Initial Ideas section allows discussion of how models are used and what criteria are used to consider them good or to refute them. For the rest of the activity, students work with a sealed ‘mystery tube’ with four strings emerging from it. They first pull out only one of the strings and, from this observation, develop their initial model (diagram) for how they think the strings are arranged/connected inside the tube. Based on this model, they make a prediction about what would happen if a different string were pulled out. Then they see what actually happens and revise their model if necessary. The process continues, with students make additional predictions, observations, and revisions of their model (diagram) until they can account for of all the observations. Optionally, they can also construct a physical version of their model."
    },
    {
        id         : 2,
        label      : 'A2: Exploring \nMagnetic \nEffects \n90 min',
        x          : "-675",
        y          : "-1000",
        description: "This activity introduces students to some properties of the magnetic interaction. First, they learn that only certain metals (iron and nickel) are attracted to a magnet. Then they perform experiments with nails that are either rubbed or not rubbed with a magnet. They discover that each end of a rubbed nail attracts both ends of an unrubbed nail, and that each end of a rubbed nail attracts one end of another rubbed nail, but repels the other end. Students also observe that a rubbed nail, when allowed to float freely, always orients itself along the geographic north-south direction. Finally, using a compass, they conclude that like Poles of two magnetized objects repel each other, and unlike Poles attract (the Law of Magnetic Poles)."
    },
    {
        id         : 3,
        label      : 'A3: Developing a \nModel for \nMagnetism \n90 min',
        x          : "-485",
        y          : "-1000",
        description: "In the Initial Ideas section of this activity, students suggest an initial model for what happens inside a nail when it is rubbed and so explain how a rubbed nail differs from an unrubbed nail. They then use their initial model to predict what would happen if a magnetized nail were cut in half. They perform experiments in which a magnetized nail is cut in half, and then another magnetized nail is cut into unequal-sized pieces, and then cut again.  In all cases, the cut nail pieces behave like the original magnetized nail.  They conclude that a magnetized nail cut anywhere along its length will produce pieces that are each magnetized. Based on this evidence they work on revising their initial models (if appropriate), present them to the class, and then adopt which one they think is best."
    },
    {
        id         : 4,
        label      : 'A4: Better \nModel for \nMagnetism \n90 min',
        x          : "-485",
        y          : "-875",
        description: "If it was not done at the end of the previous activity, the instructor may review some of the current models in the class.  At this point it is usually the case that many of the students’ current models cannot easily explain why a magnetized nail cut anywhere along its length produces two magnetized nail pieces. The purpose of this activity is to provide additional physical evidence, simulation evidence, and analogies to help students re-conceptualize the nature of the entities inside a nail and what might happen to them when the nail is rubbed with a magnet.  By the end of the activity, the majority of the class should support an ‘alignment of tiny magnets ‘ model.  This assumes that inside an unmagnetized nail there are large numbers of tiny magnets (domains) that have their North Poles randomly oriented, thus producing no external magnetic effects.  Rubbing the nail with a magnet causes the tiny magnets to align (according to the Law of Magnetic Poles) with their North Poles all pointing in the same direction, thus producing a large external magnetic effect."
    },
    {
        id         : 5,
        label      : 'A5: Explaining \nPhenomena Involving \nMagnetism \n90 min',
        x          : "-650",
        y          : "-875",
        description: "In this lesson students apply the ‘alignment of tiny magnets’ model to make predictions and explain a variety of magnetic phenomena.  Back in A2, they had magnetized nails, but did not have a model to explain how they become magnetized, nor how to determine in advance which end of the nail would be the North or South Pole. Now they use their model to predict two ways they could rub a nail to make its tip end a North Pole, and then they test their thinking. Next, they predict what would happen if the tip of an unmagnetized nail is held close to, but not touching, each pole of a magnet. They then test their predictions and consider how this phenomenon of induced magnetization can be explained using their model. They use their model to explain why both poles of a magnet attract a (steel) paper clip.  Finally, they predict how the relative magnetic strengths of the ends and middle of a bar magnet would compare, design an experiment to test their predictions, and then use the model to explain their results. Throughout the activity they also practice constructing and evaluating more formal model-based explanations (diagram + narrative)."
    },
    {
        id         : 6,
        label      : 'A6 ED: Designing \na Maglev \nTrain \n80 min',
        x          : "-850",
        y          : "-875",
        description: "In this engineering design activity, students are presented with a brief description of the maglev (magnetic levitation) train system and are introduced to a brief description of the steps in the engineering design process. Their challenge is to sketch out (but not construct) the design of a simple ‘maglev-like’ system where an object can move a certain distance while floating above the surface.  An initial question involves what type of magnetic strips (with different arrangement of poles) would be best to use for the bottom of a train and on the track so that the train would levitate.  Then they sketch a design for the model maglev system, consisting of a long box (for the ‘tracks’), a light object (for the ‘train’) and magnets or magnetic strips.  They explain how their model system would work based on ideas from the unit. Following this, they consider two scenarios involving an actual maglev train: (1) the track ahead has developed a crack in it; and (2) there is a fire along the tracks ahead of them.  For each scenario they are asked whether they should worry about it, and to justify their response in terms of ideas developed during the unit."
    },
    {
        id         : 8,
        label      : 'Ext A: Exploring \nthe Region \naround a Magnet',
        x          : "-575",
        y          : "-1075",
        description: "Students use the PhET Magnet and Compass simulation to explore what happens to a compass as it is moved around in the region surrounding a bar magnet.",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id         : 9,
        label      : 'Ext B: Evaluating \nMagnetism \nModels',
        x          : "-350",
        y          : "-935",
        description: "Students are shown several examples of magnetism models proposed by (hypothetical) students and are asked to determine what phenomena these models can (and cannot) explain.",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id         : 10,
        label      : 'Ext C: Explaining \nAnother Magnetic \nPhenomenon',
        x          : "-765",
        y          : "-800",
        description: "Students explore how changing the temperature of a rubbed, magnetized nail affects its magnetic strength.  After being asked about how they think cooling or heating the nail will affect its magnetization, students watch movies of a rubbed nail being heated and cooled. Then they evaluate three formal, model-based explanations for why heating a rubbed nail causes it to lose its magnetization.",
        color      : {
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
    {
        id         : 1,
        label      : 'A1: Exploring \nStatic Electric \nEffects \n90 min',
        x          : "-975",
        y          : "-1000",
        description: "In this activity, students collect evidence regarding how charged objects interact with other objects (both charged and uncharged).  (If classroom conditions are too humid for good results, movies of the experiments can be accessed via the student resources website.) In Part 1 students determine what kinds of materials are involved in static electric effects.  They tear apart two pieces of tape, labeled Top (T) and Bottom (B); bring various objects near them to see if there is any effect; and conclude that all materials attract both tapes.  In Part 2 they conclude that the T and B tapes attract each other regardless of which sides/ends are brought together.  From a movie, they observe that both ends of a wool-rubbed plastic stirrer repel both ends of another rubbed stirrer.  From these observations students conclude that charged objects are ‘one-ended’ (all parts behave the same way). In Part 3 they observe how T and B tapes from two different pairs interact, and conclude: (1) there are two types of charge; and (2) similarly charged tapes repel each other, while oppositely charged tapes attract. Finally, they observe what happens when other charged objects are brought close to charged B and T tapes."
    },
    {
        id         : 2,
        label      : 'A2: Developing a \nModel for \nStatic Electricity \n120 min',
        x          : "-785",
        y          : "-1000",
        description: "Building on their observations in A1 students start developing their model for static electricity.  They first construct an initial model for what happens when two non-conducting materials are rubbed together, acrylic (sheet) and Styrofoam (plate). The class discusses their initial models and groups decide which they want to adopt.  In Exploration #1 they observe what happens when a +charged acrylic touches strands of uncharged tinsel hanging from the end of a soda can electroscope, and is then removed.  [The tinsel spreads out.]  They draw a model diagram showing what they think happens, and from that predict how the spread-out tinsel will behave when charged acrylic and Styrofoam are brought near. They observe what actually happens and get model-based feedback from a simulation.  In Exploration #2, students see what happens when a plastic stirrer is rubbed all over with wool, and then is touched all over by the demonstrator.  They also observe what happens when the wool-charged stirrer is dropped in water.  In each case, the stirrer is brought near uncharged tinsel on an electroscope to determine if the stirrer is charged, and students explain their observations in terms of the charges on the plastic stirrer.  In Summarizing Questions they discuss the implications of their observations and, if necessary, revise their models."
    },
    {
        id         : 3,
        label      : 'A3: Representing \nUncharged \nObjects \n90 min',
        x          : "-600",
        y          : "-1000",
        description: "In this activity students continue developing their models for static electricity by examining what happens when a charged object is brought close to an uncharged soda-can electroscope. In the Initial Ideas section they present their ideas for how to represent an uncharged electroscope. In Exploration #1 they first see that when a positively-charged acrylic sheet is held close to the base end of an electroscope, the tinsel at the other end becomes charged (it spreads out) when the acrylic is held near, but becomes uncharged when the acrylic is removed. They try to explain this behavior using their model and gather evidence to support or refute their thinking from movies of actual experiments and simulations. In Exploration #2 they do the same for the situation in which a negatively-charged Styrofoam plate is held close to the electroscope and then removed.  In the Summarizing Questions students discuss how best to represent uncharged objects and then revise their models as necessary to explain their observations."
    },
    {
        id         : 4,
        label      : 'A4: Refining Model \nfor Different \nMaterials \n110 min',
        x          : "-600",
        y          : "-800",
        description: "[Note: Students should complete Ext D first, if possible.] In this activity students continue refining their models for static electricity by examining the behaviors of different materials involved in static electric interactions.  In Initial Ideas students use their current models to represent what they think will happen when a positively-charged acrylic sheet touches the base ends of two electroscopes: a metal soda can and a plastic water bottle.  In Exploration #1 they watch a movie of the experiments, observing that the tinsel at the end of the soda can sticks out (becomes charged) and remains so when the acrylic is removed, but the tinsel at the end of the plastic water bottle doesn’t stick out (is uncharged). Students then use their model to predict what charge the tinsel has in each case and then watch movies of experiments and a simulation to gather evidence for these charge states.  In Exploration #2 students consider how both metal and non-metal objects can be discharged.  They watch movies and explain what happens in different situations.  The Summarizing Questions ask students how they could refine their models to account for the behavior of different materials and introduce them to the terms ‘conductors’ and 'insulators.'"
    },
    {
        id         : 6,
        label      : 'A5: Interactions \nBetween Charged \nand Uncharged Objects \n80 min',
        x          : "-815",
        y          : "-800",
        fixed      : true,
        description: "In A1, students saw that all uncharged objects are attracted to all charged objects. In this activity, they consider how this can be explained using their model and check their thinking using the PhET ‘Electric Field Hockey’ simulation.  Students first predict how they could arrange a single + and single – charge so that they would attract a charged object. They test their thinking in Exploration #1 and then consider how this would work if they had a larger group of equal numbers of + and – charges. In Exploration #2 they explore how an uncharged metal object becomes polarized (negative charges move to one side of the object) when a charge is brought near. In Exploration #3 they learn that when a charge is brought near an uncharged non-metal object, each atom/molecule in the uncharged object becomes polarized (negative charges in each atom move slightly to one side away from positive charges).  In both cases, because negative charges in the uncharged object are at different distances from the charged object than positive charges, the charged object is attracted to the uncharged object. In Summarizing Questions students rub a balloon on their hair and stick it to a wall, and consider how to explain this."
    },
    {
        id         : 7,
        label      : 'A6: Explaining \nPhenomena Involving \nStatic Electricity \n70 min',
        x          : "-1025",
        y          : "-800",
        fixed      : true,
        description: "This activity gives students more practice using the class consensus model to explain some different phenomena. At the start of the activity the instructor may review the ‘Charges in Materials’ model, which likely aligns with that developed by the class. In Exploration #1 students first predict whether a charged balloon would pick up small pieces of paper and aluminum and then they try it. Next, they apply the ‘Charges in Materials’ model to explain why the aluminum is attracted to the charged balloon and then apply their evaluation criteria to a pre-written explanation for why the paper is attracted. They then use these ideas to explain how a large charged plate works to remove dust and pollen grains in an air purifier. In Exploration #2 students construct a formal explanation for what causes ‘static cling’ in a clothes dryer."
    },
    {
        id         : 8,
        label      : 'A7 ED: Refueling \nSafety \n60 min',
        x          : "-1025",
        y          : "-900",
        description: "In this activity, students consider the danger of static electric discharge when refueling and what precautions people should take to prevent it. They start by considering how static electric discharge could put a driver refueling her car in danger, and what precautions the driver could take. Then, using the class consensus model for static electricity, they work on developing a set of safety precautions for workers who refuel airplanes, which can develop a strong static charge from friction interactions with air while flying. Their task is to develop a set of safety precautions that would, if followed, completely discharge a plane, and would be followed by all relevant workers. Students are also given constraints (low cost and short, but effective, training) and then they work together in small groups to develop and optimize solutions. They also consider challenge questions on how changed circumstances could modify their solution, specifically for non-metal planes and for a situation in which some workers are not following their safety procedures, how the plane could be discharged before it reaches the refueling station."
    },
    {
        id         : 12,
        label      : 'Ext A: Which \nis Charge \nis Which?',
        x          : "-900",
        y          : "-1075",
        description: "Students work with movies from a simulation to learn about the triboelectric series, from which they can determine how materials rubbed together will be charged (+ or -).  From this extension, students learn that acrylic becomes positively charged and Styrofoam becomes negatively charged when they are rubbed together. Students use that knowledge in L2.",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id         : 13,
        label      : 'Ext B: The Law \nof Electric \nCharges',
        x          : "-700",
        y          : "-1075",
        description: "Students work with the PhET simulation, ‘Electric Field Hockey,’ to explore how + and - electric charges affect each other.  They conclude that like charges repel each other and unlike charges attract (law of electric charges), and that the strength of the interaction depends on the distance between the charges and the amount of charge.",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id         : 15,
        label      : 'Ext D: What do \nCharged Entities \nRepresent?',
        x          : "-450",
        y          : "-900",
        description: "Students consider which type of charge (+, - or both) is actually transferred when two different materials (e.g. acrylic and Styrofoam) are rubbed together.  Initially they consider all possibilities (+ is transferred, - is transferred, both are transferred), but learn about the atomic model and in the end conclude that only – charged (electrons) are transferred.",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id         : 16,
        label      : 'Ext E: What Happens \nwhen Charged Object \nis Discharged?',
        x          : "-700",
        y          : "-725",
        description: "Students use their current model for charged materials to explore and explain what happens when charged objects are discharged in terms of the movement of – charges.  They use the PhET simulation, ‘John Travoltage,’ to get feedback on their ideas, and also develop an explanation for ‘static’ shock.",
        color      : {
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
    {
        from: 1,
        to  : 2
    },
    {
        from: 2,
        to  : 3
    },
    {
        from: 3,
        to  : 4
    },
    {
        from: 4,
        to  : 5
    },
    {
        from: 5,
        to  : 6
    }
]);

var edges2 = new vis.DataSet([
    {
        from: 1,
        to  : 2
    },
    {
        from: 2,
        to  : 3
    },
    {
        from: 3,
        to  : 4
    },
    {
        from: 4,
        to  : 6
    },
    {
        from: 6,
        to  : 7
    },
    {
        from: 7,
        to  : 8
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
var options    = {
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
