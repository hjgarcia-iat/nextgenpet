// create an array with nodes
var nodes = new vis.DataSet([{
    id: 1,
    label: 'L1: Pressure\n 60 min',
    x: "-950",
    y: "-1000",
    description: "Students are introduced to the macroscopic gas properties of pressure, volume, temperature and amount (mass). Pressure is defined as the (perpendicular) force the gas exerts on a surface divided by the area of the surface.  Students then investigate (through movies) how pressure depends separately on volume, temperature (in kelvins) and amount (mass) of the gas.  By the end of the lesson they have developed the so-called Gas Properties Relationship: pressure ~ amount × temperature/volume.",
}, {
    id: 2,
    label: 'L2: Small Particle \nTheory of \nGases\n65 min',
    x: "-800",
    y: "-1000",
    description: "Students first watch some simulation movies to describe the properties of the small particles of a gas (motion, collisions, relative size compared to inter-particle spacing, what is between particles, etc.).  They view histograms of particle speeds and kinetic energies and determine if and how the average speed and average KE depend on the volume, amount and temperature of the gas and the mass of each particle.  They conclude that the average KE is proportional to the temperature of the gas (measured in kelvins), a relationship referred to as the SPT Relationship for Temperature.",
}, {
    id: 3,
    label: 'L3: Pressure \nand SPT\n70 min',
    x: "-650",
    y: "-1000",
    description: "Students investigate what microscopic properties of a gas affect its pressure.  They separately consider the effects of changes in the average speed and average KE (by varying the temperature), number of particles and the mass of each particle.  They gather evidence to support the so-called SPT Gas Properties Relationship: pressure ~ # particles × average KE/volume.  In the last part of the lesson they are introduced to the macro/micro table, in which they make explicit connections between macroscopic and microscopic properties.  They consider several scenarios where some macroscopic property is changed, and by filling in the appropriate cells in the macro/micro table, determine how other properties will change.",
}, {
    id: 4,
    label: 'L4: Liquids \nand the \nSPT\n 75 min',
    x: "-485",
    y: "-1000",
    description: "Students first use some observations of the behavior of liquids to infer properties of its small particles.  They then compare the properties of particles of liquids and gases.   In the next parts they observe what happens to liquids when heated and cooled (thermal expansion and compression), and then explain those observations in terms of the small particle theory of liquids. ",
}, {
    id: 5,
    label: 'L5: Solids, \nthe SPT \nand Energy\n 45 min',
    x: "-485",
    y: "-875",
    description: "Students first consider a particulate model for a solid, and compare the properties of particles of solids with those of liquids.  Then they observe what happens when a solid is heated (expands) or cooled (contracts), and explain those observations in terms of the small particle theory of solids.  In the last part of the lesson they use the law of conservation of energy to describe the heating and cooling of gases, liquids, and solids in terms of energy.",
}, {
    id: 6,
    label: 'L6: Changes \nof State\n 45 min',
    x: "-485",
    y: "-750",
    description: "In the first part of the lesson, students observe a demonstration where a beaker of ice is heated; the ice melts to water, the temperature of the water increases, and then the water boils.  Students sketch the temperature versus time graph and this becomes their introduction to a heating curve.  They describe various properties of the heating curve, noting where on the curve melting, warming, and boiling occurs.  Finally, they obtain evidence that the mass of the system does not change during a change of state.",
}, {
    id: 7,
    label: 'L7: Changes \nof State \nand Small \nParticle Theory\n55 min',
    x: "-650",
    y: "-750",
    description: "First, students watch movies of simulations to decide what happens to particles during a change in state.  They conclude that, during a change of state, the average particle KE and (hence) temperature remain constant, but the distance between particles changes. They also can explain why mass is conserved during the change of state. Next, students learn about how to describe what happens during a change of state in terms of energy.",
}, {
    id: 8,
    label: 'L8 ED: Evaluating \nBallonet \nDesigns\n 45 min',
    x: "-800",
    y: "-750",
    description: "As a pre-requisite for this engineering design lesson students will need to have worked through UPC Extension J on sinking and floating. In the first part of this lesson students consider how the average density of a blimp compares to that of the surrounding air when the blimp hovers at constant altitude, and then what happens when the blimp is warmed.  Next, students are introduced to the ballonet, and need to decide how pumping air into or out from the ballonet causes the blimp to rise or fall.  In the last (and major) part of the lesson, students consider how to arrange ballonets within a blimp to satisfy certain criteria for how the blimp should behave in different circumstances.  For each design choice, students need to explain their decision in terms of how changes in the average density of the blimp changes its sinking and floating behavior.  If students work on this challenge as a group, they can fill in a group report form to turn in to the instructor.",
}, {
    id: 10,
    label: 'Ext G: Effects \nDue to Air \nPressure',
    x: "-875",
    y: "-1075",
    description: "Students first consider the definition of macroscopic pressure and its relationship to force.  Then they consider the effects of air pressure, focusing on two scenarios: the crushed tin can and the expanded shaving gel.  They explain these in terms of forces and pressure.",
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
    label: 'Ext H: Pressure, \nTemperature, \nMixture of \nGases, and \nAverage KE ',
    x: "-725",
    y: "-1090",
    description: "Students are first introduced to the PhET Gas Properties simulation, where they investigate what happens to the average speed of the particles if the number of particles or volume of the container is changed.  Then students watch movies from a different simulation.  They infer what happens to the density of the gas in a fixed volume container when gas is added, and then explore how the average KE depends, if at all, on the type of gas.  Finally, they return to the PhET Gas Properties simulation to investigate what happens to average particle speeds with mixtures of gases. ",
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
    label: 'Ext I: Mass, \nVolume and \nDensity',
    x: "-575",
    y: "-1075",
    description: "In this extension students are introduced to the macroscopic properties of mass and volume and to the characteristic property of density.  They determine values of the densities of different solids, through both calculation and water displacement.  Towards the end they examine tables showing typical density values for solids, liquids, and gases. ",
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
    label: 'Ext J: Sinking \nand Floating',
    x: "-350",
    y: "-935",
    description: "Students first explore whether solid objects of different volumes or different masses sink or float when placed in water.  Then they consider the relationship between the density of an object and whether it floats or sinks in water.  In the next part they make predictions and observations about a clay boat when placed in water—although a solid lump of clay sinks, when the clay is shaped into a boat, it floats.",
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
    label: 'Ext K: Rates of \nWarming of \nDifferent Materials',
    x: "-350",
    y: "-815",
    description: "Students first consider data that shows how the rates of heating compare for different materials.  They are then introduced to the definitions of heat capacity and specific heat.",
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
    label: 'Ext L: Explanations \nInvolving \nPhysical Changes \nin Liquids \nand Solids ',
    x: "-565",
    y: "-650",
    description: "Students learn how to evaluate explanations involving physical changes in terms of accuracy.  The explanations include a statement about the type of interactions occurring and a statement about the conservation of energy during the physical change. ",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 16,
    label: 'Ext  M: Heating \nCurves, \nMelting and \nBoiling Points ',
    x: "-725",
    y: "-657",
    description: "Students first compare the heating curves of water and methanol.  Then they make observations and inferences about the connections between values of melting and boiling points, the strength of attraction between particles of the substances, and the physical state of substances at a given temperature. ",
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
    label: 'L1: Physical \nChanges versus \nChemical Reactions\n65 min',
    x: "-1000",
    y: "-1000",
    description: "This lesson introduces chemical reactions as a process where, when two or more materials interact, the ending materials have different compositions (chemical properties) than the beginning materials.  This is in contrast to processes where the ending materials have the same compositions (or chemical properties).  The latter are physical changes, and they were studied in Unit PC.  The lesson begins with students comparing what happens when iron and sulfur are first mixed together, and then heated together.  They conclude that the former is a physical change and the latter is a chemical reaction. In the next part of the lesson students look at several processes and determine which represent a physical change and which ones represent a chemical reaction. In the last part, students consider a classification scheme for materials, dividing them initially into pure substances and mixtures, and then into further subdivisions.",
}, {
    id: 2,
    label: 'L2: Chemical \nReactions and \nConversation of Mass\n30 min',
    x: "-750",
    y: "-1000",
    description: "In this brief lesson students observe three different chemical reactions, record the masses of all system components both before and after the reactions, and determine that mass is conserved in all three cases. These observations are then generalized to the Law of Conservation of Mass.  The Law applies to both physical changes and chemical reactions. ",
}, {
    id: 3,
    label: 'L3: Chemical \nReactions, \nConservation of Mass \nand SPT\n85 min',
    x: "-485",
    y: "-1000",
    description: "In Unit PC students considered only the property of ‘particles’ without attention to their internal structure. In this lesson, students learn about the constituent parts of ‘particles’ that comprise matter: atoms, molecules, and repeating formula units.  Elements consist of the same type of atoms.  Compounds consist of two or more different atoms joined in either molecules or repeating formula units.  Students then consider some simple chemical reactions and learn to represent them using both a picture model and a chemical equation.  Conservation of mass follows by ensuring that both the reactants and products in the reaction have the same number of each type of atom. ",
}, {
    id: 4,
    label: 'L4: Chemical \nReactions and \nEnergy Transfer\n35 min',
    x: "-485",
    y: "-875",
    description: "Students observe movies of steel wool rusting and Alka-Seltzer<sup>&trade;</sup> tablets reacting with water. In the former reaction the temperature (measured by a thermometer) increases and in the latter reaction the temperature decreases.  Students infer that in the former energy is transferred from the system (reactants and products) to the surroundings (called an exothermic reaction), and in the latter energy is transformed from the surroundings to the system (called an endothermic reaction). They then describe the two chemical reactions in terms of energy using the giver/receiver energy diagram. ",
}, {
    id: 5,
    label: 'L5: Classifying \nand Organizing \nElements\n50 min',
    x: "-485",
    y: "-750",
    description: "In this lesson students explore how physical and chemical properties of elements can be used to categorize and organize them.   In Part 1 students observe movies to gather data about some physical and chemical properties of seven different elements.  From this, they can classify the elements into three broad categories: metals, nonmetals, and metalloids. In Part 2 they sort several element cards into categories of their choosing based on the element’s properties; there are many ways of doing this.",
}, {
    id: 6,
    label: 'L6: Periodic Trends \nand the \nElements\n35 min',
    x: "-675",
    y: "-750",
    description: "In this lesson students initially work with a scaled down version of the Periodic Table and identify various patterns based on the elements’ physical properties and chemical reactivity.  Then they examine a version of the modern Periodic Table and are introduced to the terms used to name the various groups.",
}, {
    id: 7,
    label: 'L7: Atoms, Ions \nand the \nPeriodic Table\n35 min',
    x: "-845",
    y: "-750",
    description: "In the previous lesson students learned how the periodic table is organized around certain physical and chemical properties of the elements. In this lesson they use a simple orbit model of atoms to understand how the organization of the periodic table can be explained in terms of atomic structure.  After the idea of valence electrons is introduced, students explore how the position of elements in groups on the periodic table is related to the type of ions that are formed. At the end of the lesson students are introduced to four main ideas of Atomic Molecular Theory. ",
}, {
    id: 18,
    label: 'L8: Electrons \nand Chemical \nBonding\n60 min',
    x: "-1000",
    y: "-750",
    description: "In this lesson students learn that either molecular or ionic bonds hold atoms or ions of a compound together.  In Part 1 students are introduced to the dot diagram model for representing atoms and ions. In Part 2 they explore how metal and nonmetals atoms can interact through a transfer of one or more valence electrons from the metal to the nonmetal atom.  This results in a strong electrostatic attraction between the positive and negative ions, holding them together in what is called an ionic bond. In Part 3 they explore how two nonmetal atoms can be held together by an electrostatic interaction involving the sharing of valence electrons between the two atoms. The interaction results in what is called a covalent bond.  Finally, students learn about the approximations known as the duet rule and the octet rule, which allow them to predict how many nonmetal atoms need to join with other nonmetal atoms to form the covalent bond.",
}, {
    id: 19,
    label: 'L9: Using the \nClass Consensus \nto Explain \nObservations\n25 min',
    x: "-1000",
    y: "-875",
    description: "In the first part, students observe a movie of a small piece of dry ice (solid carbon dioxide) being placed in a small amount of water; the solid dry ice sublimes to its vapor state.  Then they evaluate the justification for a claim that this process represents a physical change.  In the second part, students observe a movie where an antacid tablet is added to vinegar, producing a bubbly flowing material.  Students determine that mass is conserved.  Then they examine the chemical equation for the reaction and show there are the same number of atoms of each element on each side of the equation, thus ‘explaining’ why mass is conserved.  Finally, they evaluate the justification for a claim that the reaction was a chemical reaction.",
}, {
    id: 10,
    label: 'Ext A: Separating \nMixtures Using \nPhysical Properties',
    x: "-875",
    y: "-1085",
    description: "Students first view some physical properties of the materials in three different mixtures, and then they consider for which physical properties can certain items (water, coffee filter, evaporation dish, magnet, screen) be used to separate substances in a mixture.  Then they work with a simulation where they use the items mentioned above to separate the components of the three mixtures.",
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
    label: 'Ext B: Reaction \nRates and \nTemperature',
    x: "-625",
    y: "-1085",
    description: "Students first view some physical properties of the materials in three different mixtures, and then they consider for which physical properties can certain items (water, coffee filter, evaporation dish, magnet, screen) be used to separate substances in a mixture.  Then they work with a simulation where they use the items mentioned above to separate the components of the three mixtures.",
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
    label: 'Ext F: Balancing \nChemical \nEquations',
    x: "-325",
    y: "-935",
    description: "To prepare students for balancing chemical equations, they first practice with a simpler system using a PhET computer simulation to make cheese sandwiches from slices of bread and cheese.  Then they work on balancing some chemical equations, starting with easier ones and then moving on to more complex equations. ",
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
    label: 'Ext G: Characteristic \nPhysical \nProperties',
    x: "-575",
    y: "-670",
    description: "Students use the characteristic physical properties of density, melting point, boiling point, and solubility (listed in a table) to identify materials.  ",
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
    label: 'Ext E: Models of \nthe Atom',
    x: "-775",
    y: "-675",
    description: "Students are introduced to key historical experiments and observations that helped form models of the atom (in chronological order): Dalton’s theory of atomic structure (billiard balll model), plum pudding model, the Rutherford model (nuclear model), and the Bohr model (shell model). The extension includes several videos to watch that describe many of the important experiments that lead to the development of the various atomic models. ",
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
    label: 'Ext H: Atomic \nStructure, the \nPeriodic Table, and\n Isotopes',
    x: "-925",
    y: "-660",
    description: "This extension summarizes some important ideas about atomic structure and its relationship to the periodic table.  The focus is on atomic number, isotopes, and atomic mass (as a weighted average of the mass numbers of the various isotopes of an element).",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5',
        hover: {
            border: '#fcd5b5',
            background: '#fcd5b5'
        }
    }
}, {
    id: 16,
    label: 'Ext I: Bond \nTypes and \nthe Chemical \nStructure of \nMaterials',
    x: "-1150",
    y: "-810",
    description: "Students first review and learn about three bond types: ionic, covalent, and metallic. Combining power is defined, as are the octet and duet rules (for ionic and covalent bonds).  Then they consider some examples, including examining some model representations. ",
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
    to: 8
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
}, {
    from: 5,
    to: 6
}, {
    from: 6,
    to: 7
}, {
    from: 7,
    to: 18
}, {
    from: 18,
    to: 19
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