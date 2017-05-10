// create an array with nodes
var nodes = new vis.DataSet([
    {
        id         : 1,
        label      : 'A1: Pressure\n90min',
        x          : "-1100",
        y          : "-1000",
        description: 'For Activities 1-5 of this unit, students work on an explanatory model of why a can with a bit of boiling water implodes dramatically when immersed in cold water.  In this activity, students begin by observing the difference between a can of hot air and a can of boiling water when immersed in the cold water.  They then consider the difference between force and pressure when they consider the effect of a force applied over a broad area (like a person’s weight applied across the entire area of a foot in a tennis shoe) versus its application over a small area (like the same person’s weight concentrated into the base of a stiletto heel). They also consider whether air pressure is directional. It becomes evident in this experiment that understanding more about pressure will help the students explain what they observe.'
    },
    {
        id         : 2,
        label      : 'A2: Pressure and the \nAmount of Gas\n90min',
        x          : "-900",
        y          : "-1000",
        description: 'In this activity students investigate what happens to air pressure when the amount of air changes.  They examine these changes under conditions in which the temperature and volume are held constant. First, they examine how pressure changes when air is pumped into a stoppered glass flask.  Then they consider the form of the relationship between pressure and the amount of gas (air) by plotting the data. Finally, students consider a model of gas as a collection of small particles, using a simulation to consider how interactions between small particles and their surroundings (e.g., the wall of a container) could explain the mascroscopic phenomenon of pressure.'
    },
    {
        id         : 3,
        label      : 'A3: Pressure and \nTemperature Relationship\n90min',
        x          : "-685",
        y          : "-1000",
        description: 'In this activity students investigate how temperature affects the pressure of a gas and what the form of the relationship is between pressure and temperature when volume and the amount of gas are held constant. After considering how temperature changes might affect pressure in terms of the Small Particle Model, students carry out an experiment to determine the relationship between temperature and pressure. Then they carry out a similar exploration using the same simulation used in Activity 2, and explore the pressure-temperature relationship in terms of the Small Particle Model. They examine the SPT mechanism for pressure, and explore its connection to macroscopic changes in temperature and pressure using macroscopic/nanoscopic tables (“macro/nano tables) and macro/nano energy diagrams.'
    },
    {
        id         : 4,
        label      : 'A4: Explanations \nInvolving Gas\n90min',
        x          : "-485",
        y          : "-1000",
        description: 'In this activity, students work through some additional explanations of real-world phenomena in terms of ideas that they have developed in class about gases and their connection to the SPT mechanisms for pressure and temperature. They use macro/nano tables to help them construct their explanations.'
    },
    {
        id         : 5,
        label      : 'A5: Properties \nof Liquids\n90min',
        x          : "-485",
        y          : "-875",
        description: 'This activity concludes the examination of the “hot can” experiment from Activity 1, as students explore why the can with boiling water in it collapsed dramatically when placed in ice. In so doing, students conduct explorations in which they study the change in state of water from liquid to gas, and gather data to plot the change in temperature vs. time. Then they use a simulation to explore how the liquid-to-gas change of state affects particle behavior. Students then measure the change in pressure vs. time for two flasks, one containing hot air cooling to room temperature, and one containing hot water vapor and air that is also cooling. They observe that the pressure in the water flask drops more quickly and conclude this happens because of condensation of water vapor, and that liquid particles don’t exert as much pressure as air particles because their behavior is different.'
    },
    {
        id         : 6,
        label      : 'A6: More on \nLiquids and \nCharacteristic Properties\n100min',
        x          : "-800",
        y          : "-875",
        description: 'In this activity, students investigate the attraction between particles, whether liquid particles move like gas particles, and what happens when liquids are heated and cooled without going through a change of state. They begin by comparing the attractive forces of water, ethanol, and hexane by examining the behavior of drops of each liquid, and the reaction of water and hexane to charged objects. To study the movement of particles, they observe how colored dye spreads through water at three different temperatures. Then they explore how the volume and mass of liquids change when their temperature changes. Finally, they use simulations to explore the behavior of liquid particles when they are heated, and how to explain macroscopic changes in terms of energy changes at the particle level. '
    },
    {
        id         : 7,
        label      : 'A7: Solids \nand SPT\n100min',
        x          : "-1100",
        y          : "-875",
        description: 'In this activity, students investigate the properties of solids and make inferences about the nature of the particles that make them up.  They observe a demonstration, and begin to model what they observe in terms of the Small Particle Theory (SPT).  Students begin by drawing particulate models first of a liquid (saturated sodium acetate) they observe in a flask, and then of the solid that forms when the liquid crystalizes after it is poured onto a seed crystal. Then students examine how solids interact with charged objects and magnets to determine the type of interaction between particles of a solid. Students then explore the change of state from solid to liquid, first through experiment (ice to water) and then through simulation (argon) to examine the transition at the particle scale. Then they observe what happens when a solid is heated (expands) or cooled (contracts), and, with the help of simulations, explain those observations in terms of the small particle theory of solids.  In the last part of the activity students compare the small particle models of gases, liquids, and solids.'
    },
    {
        id         : 8,
        label      : 'A8: Density\n100min',
        x          : "-1100",
        y          : "-725",
        description: 'This activity introduces students to the concept of characteristic properties that can be used to identify substances. In that context, students are introduced to density, and learn that density = mass/volume, and that objects made of the same material have the same density. They also learn to measure volume using the displacement method (as well as by using a ruler when appropriate). Because the density of a substance does not depend on the amount (mass) of material, its shape, or its volume, it is known as a physical characteristic property, a property that is specific to that substance. Students then examine the densities of liquids and gases, and observe that liquids and gases vary in density just as solids do. Finally, they examine what determines whether an object sinks or floats. '
    },
    {
        id         : 9,
        label      : 'A9: Mixing \nand Solubility\n90min',
        x          : "-900",
        y          : "-725",
        description: 'In this activity students investigate mixtures of two pure substances.  This investigation allows them to refine their models of the liquid-solid system demonstrated in Activity 7. They also make inferences about interactions between particles that are not from the same substance. Students begin by examining hand warmers in which a liquid interior becomes solid—and warmer—after activation, and speculating about the particle behavior.   Then students begin examining the differences between suspensions and solutions by comparing how charcoal and sugar mix with water. Then they investigate how much different substances dissolve in water, and identify solubility as another characteristic property. Further exploration reveals that solubility is dependent upon temperature. Then students speculate about the particle model for solubility, before examining energy transfers that occur when solutions are mixed.'
    },
    {
        id         : 10,
        label      : 'A10: Explanations \nInvolving Physical \nChanges\n90min',
        x          : "-685",
        y          : "-725",
        description: 'Students begins this activity by examining class consensus ideas about physical changes, and listing the evidence for them. They then try to explain everyday events or phenomena in terms of ideas about physical changes that have been developed in class.',
    },
    {
        id         : 11,
        label      : 'A11 ED: Engineering \nDesign: \nEvaluating \nBallonet Designs \n55min',
        x          : "-500",
        y          : "-725",
        description: 'In the first part of this activity students consider how the average density of a blimp compares to that of the surrounding air when the blimp hovers at constant altitude, and then what happens when the blimp is warmed.  Next, students are introduced to the ballonet, and need to decide how pumping air into or out from the ballonet causes the blimp to rise or fall.  In the last (and major) part of the activity, students consider how to arrange ballonets within a blimp to satisfy certain criteria for how the blimp should behave in different circumstances.  For each design choice, students need to explain their decision in terms of how changes in average density of the blimp changes its sinking and floating behavior.',
    },
    {
        id         : 15, label: 'Ext A: Intro to \nSpreadsheets & Graphing', x: "-1000", y: "-1075",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        description: 'Throughout the Matter and Interactions module, students use spreadsheet programs (like Google Sheets, Microsoft Excel or Apple’s Numbers) to analyze data.  In this extension, students engage in two tutorials that help them become proficient in using Google Sheets, including a tutorial on how to plot data in Google Sheets.',
    },
    {
        id         : 16, label: 'Ext B: Pressure-Volume \nRelationship', x: "-780", y: "-1075",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        description: 'In this extension, students look at the relationship between two macroscopic properties:  volume and pressure.  They use the Small Particle Theory to explain observations, using both a data sample provided by the extension and then a simulation that models the behavior of a gas composed of small particles. They also learn how to plot the relationship using spreadsheets.',
    },
    {
        id         : 17, label: 'Ext C: Gas \nLaw Graphing', x: "-575", y: "-1075",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'In this extension, a set of data from an experiment conducted in Activity 3 that describes the macroscopic relationship between pressure and temperature is used by students to review graphing in Google Sheets. They also review the technique that allows them to confirm that the relationship between pressure and temperature is a direct proportionality.  ',
    },
    {
        id         : 18, label: 'Ext D: Energy Involved in \nHeating & Phase Changes', x: "-975", y: "-800",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'In this extension, students review the SPT mechanism for temperature, and then review thermal expansion and contraction. They describe changes in the kinetic and potential energy of particles when a substance is heated, and make inferences about the relative strengths of attractive forces between particles in different states (solid, liquid, gas) given information found on the heating curve of water.',
    },
    {
        id         : 19, label: 'Ext E: SPT & Density \nof Gases, Liquids \n& Solids', x: "-1000", y: "-650",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'This extension ties together the ideas of density and the Small Particle Theory of matter, thereby allowing students to explore how the Small Particle Theory explains the densities of gases, liquids, and solids. The exploration is conducted using movies of simulations that model the SPT of matter.',
    },
    {
        id         : 20,
        label      : 'Ext F: Using Characteristic \nPhysical Properties \nof Matter',
        x          : "-800y",
        y          : "-650",
        color      : {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'Students use the characteristic physical properties of density, melting point, boiling point, and solubility (listed in a table) to identify materials.',
    }
]);

var nodes2 = new vis.DataSet([
    {
        id         : 1,
        label      : 'A1: Physical \nChanges vs. \nChemical Reactions\n90min',
        x          : "-1100",
        y          : "-1000",
        description: 'This activity introduces chemical reactions as processes where, when two or more materials interact, the ending materials have different compositions (chemical properties) than the beginning materials.  This is in contrast to processes where the ending materials have the same compositions (or chemical properties). The latter are physical changes.  The activity begins with students considering the differences between mixing ingredients for a cake and actually baking the cake. The activity continues with explorations in which students compare what happens when iron and sulfur are first mixed together, and then heated together.  They conclude that the former is a physical change and the latter is a chemical reaction. In the next part of the activity students look at several processes and determine which represent a physical change and which ones represent a chemical reaction. The summarizing questions return to the question of the baking cake, and begin to introduce a classification scheme for matter. .'
    },
    {
        id: 2,
        label: 'A2: Classification \nof Matter\n90min',
        x: "-900",
        y: "-1000",
        description: 'Activity 2 focuses on the differences between elements, compounds, and mixtures, and how physical and/or chemical means can be used to separate mixtures into their component elements/compounds.   Students explore what happens on a particle level when two substances (zinc iodide and water) are mixed together to make a solution. They decide that creating the solution is a physical change because evaporation of the water leaves the zinc iodide behind.  Then students explore what happens when electricity is added to the solution, and discover that “new” substances are created; that is, the zinc iodide separates into zinc and iodine.  They then examine the physical and chemical properties of the zinc and iodine, comparing them to each other and the original substance (zinc iodide). They conclude that all three have individual sets of properties. They also find that adding water to a mixture of zinc and iodine is different than adding water to zinc iodide; the latter brings about a physical change (creating a solution) and the former causes a chemical reaction that produces zinc iodide. Finally, students work through a classification scheme for mixtures (which has two subcategories, solutions and heterogeneous mixtures) and pure substances (compounds and elements).'
    },
    {
        id: 3,
        label: 'A3: Evidence of \nChemical Reactions\n90min',
        x: "-685",
        y: "-1000",
        description: 'Activity 3 focuses on evidence that indicates a chemical reaction has occurred.  Students begin by reviewing chemical reactions with which they are familiar from everyday life.  Then they explore three different chemical reactions (steel wool and air, Alka-Seltzer™ and water, Epsom salt solution and ammonia cleaner). They consider the evidence that each interaction is in fact a chemical reaction, and they record the masses of all system components both before and after the reactions. They conclude that mass is conserved in all three cases. Finally, students once again consider the differences between physical changes and chemical reactions, and also conclude that the conservation of mass they have observed in their explorations is evidence that supports the idea mass is conserved in all chemical reactions. '
    },
    {
        id: 4,
        label: 'A4: Conservation of \nMass and SPT\n90min',
        x: "-485",
        y: "-1000",
        description: 'In Unit PC students considered only the property of ‘particles’ without attention to their internal structure. In this activity, students learn about the constituent parts of ‘particles’ that comprise matter: atoms, molecules, and repeating formula units.  Elements consist of the same type of atoms.  Compounds consist of two or more different atoms joined in either molecules or repeating formula units.  Students then consider some simple chemical reactions (iron reacting with sulfur to form iron sulfide, hydrogen and oxygen combining to form water, and rusting) and learn to represent them using both a picture model and a chemical equation.  Conservation of mass follows by ensuring that both the reactants and products in the reaction have the same number of each type of atom.  The summarizing questions provide students with practice balancing chemical equations..'
    },
    {
        id: 5,
        label: 'A5: Chemical \nReactions & Energy Transfer\n90min',
        x: "-485",
        y: "-875",
        description: 'Students conduct two explorations, one involving the contents (mostly bits of iron) of disposable hand warmers reacting with air, and the other involving Alka-SeltzerT<sup>&trade;</sup> tablets reacting with water. In the former reaction the temperature (measured by a thermometer) increases and in the latter reaction the temperature decreases.  Students infer that in the former energy is transferred from the system (reactants and products) to the surroundings (which they learn is called an exothermic reaction), and in the latter energy is transformed from the surroundings to the system (called an endothermic reaction). They then describe the two chemical reactions in terms of energy using the giver/receiver energy diagram and potential energy graphs (which plot potential energy versus reaction time). Students also compare exothermic/ endothermic chemical reactions to exothermic/endothermic physical changes.'
    },
    {
        id: 6,
        label: 'A6: Elements & \nthe Periodic Table\n90min',
        x: "-800",
        y: "-875",
        description: 'In this activity students explore how physical and chemical properties of elements can be used to categorize and organize them.   In Exploration 1 students gather data about some physical and chemical properties of seven different elements: iron, magnesium, silicon, sulfur, tin, zinc, and two different samples of carbon, graphite and coal.  From this, they learn that they can classify the elements into three broad categories—metals, nonmetals, and metalloids—based upon them having similar properties. In Exploration 2 students sort several element cards into categories of their choosing based on the element’s properties, and find that there are many ways of doing this. They compare their “periodic tables” to that of Dmitri Mendeleev (1869) and analyze his organization of elements. Finally, they are introduced to the modern periodic table.'
    },
    {
        id: 7,
        label: 'A7: Atoms & \nthe Periodic Table\n35min',
        x: "-1100",
        y: "-875",
        description: 'In the previous activity students learned how the periodic table is organized around certain physical and chemical properties of the elements. In this activity they use a simple orbit model of atoms to understand how the organization of the periodic table can be explained in terms of atomic structure, such as the number of protons in the nucleus and different electron energy levels (higher electron orbits in the model). Students also learn about isotopes, and how the abundance of different isotopes is reflected in the periodic table’s atomic masses. After the idea of valence electrons is introduced, students explore how the position of elements in groups on the periodic table is related to the type of ions that are formed.'
    },
    {
        id: 8,
        label: 'A8: Electrons \nand Chemical \nBonding\n90min',
        x: "-1100",
        y: "-725",
        description: 'In this activity students learn that either molecular or ionic bonds hold atoms or ions of a compound together.  In Activity 7, students were introduced to the Shell Model of the atom.  In Exploration 1, they now learn about the dot diagram model (also know as Lewis dot structures) for representing atoms and ions, where the dots represent valence electrons. In Exploration 2 they explore how metal and nonmetals atoms can interact through a transfer of one or more valence electrons from the metal to the nonmetal atom.  This results in a strong electrostatic attraction between the positive and negative ions, holding them together in what is called an ionic bond. In Exploration 3 they explore how two nonmetal atoms can be held together by an electrostatic interaction involving the sharing of valence electrons between the two atoms. The interaction results in what is called a covalent bond.  Finally, students learn about the approximations known as the duet rule and the octet rule, which allow them to predict how many nonmetal atoms need to join with other nonmetal atoms to form the covalent bond.'
    },
    {
        id: 9,
        label: 'A9: Molecular \nStructure \n(Supplemental)\n110min',
        x: "-900",
        y: "-725",
        description: 'In the previous activity, students examined how an element’s valence electrons can be used to predict the chemical bonds formed when elements interact with one another.  In this activity, students use Atomic Tiles to explore how valence electrons are shared between atoms in different types of chemical bonds.  In Exploration 1, they use Atomic Tiles to explore how valence electrons are related to covalent bonds. In Exploration 2, they examine how valence electrons (represented as open or closed dots on the tiles) can be used to determine the types of covalent bonds that form, and how that affects molecular structure. In Exploration 3, students use Atomic Tiles to represent molecular structure, which is in turn determined by the covalent bonds that can form. Exploration 4 delves into the three-dimensional structure of molecules using a simulation program. The summarizing questions provide opportunities for students to practice what they have learned.'
    },
    {
        id: 10,
        label: 'A10: Using the \nClass Consensus \nto Explain Observations\n90min',
        x: "-675",
        y: "-725",
        description: 'Students review the Summary Ideas for the unit, and then use them to explain observations of phenomena. Full explanations need to include a balanced chemical equation, and both macroscopic and nanoscopic narratives. In Exploration 1, students observe a movie of a small piece of dry ice (solid carbon dioxide) being placed in a small amount of water; the solid dry ice sublimes to its vapor state.  They determine that mass is conserved, Then they explain why this is a physical change, and whether the process is endothermic or exothermic.  Then students add a crushed antacid tablet to vinegar, producing a bubbly flowing material.  Students determine that mass is conserved.  Then they examine the chemical equation for the reaction and show there are the same number of atoms of each element on each side of the equation, thus ‘explaining’ why mass is conserved.  They determine if the interaction is a chemical reaction, and whether it is exothermic or endothermic. At the end of the lesson, students write full explanations for both phenomena.'
    },
    {
        id         : 11,
        label      : 'A11 ED: Engineering \nDesign: \nWhich Hand \nWarmer Is Best?\n60min',
        x          : "-475",
        y          : "-725",
        description: 'In this engineering design activity, students use a Decision Matrix to help them decide what type of commercially-available hand warmer would best suit a class of fifth graders going on a weekend camping trip in the mountains in cool weather, with especially cold nights. Students have to balance factors like reusability and the duration of warmth of the hand warmer in coming to their decisions. In the last section, students reflect on their decision-making process.'
    },
    {
        id       : 12, label: 'Ext A: Separating Mixtures \nusing Physical \nProperties', x: "-800", y: "-1075",
        color    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        description: 'Students first view some physical properties of the materials in three different mixtures, and then they consider for which physical properties can certain items (water, coffee filter, evaporation dish, magnet, screen) be used to separate substances in a mixture.  Then they work with a simulation where they use the items mentioned above to separate the components of the three mixtures.'
    },
    {
        id   : 13, label: 'Ext B: Reaction Rates \nand Temperature', x: "-600", y: "-1075",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'Students explore how the temperature of water affects how quickly certain chemical reactions occur (reaction rate).  They consider dissolving Alka-Seltzer in water, and then putting cracked ‘glow sticks’ in water.'
    },
    {
        id   : 14, label: 'Ext C: Collision Theory & \nChemical Reactions', x: "-650", y: "-935",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'In this extension, students are introduced to Collision Theory.  Students learn how to use Collision Theory to explain how chemical reactions occur. By using what they already know about how changes in temperature affect small particles, students are able to describe why temperature changes reaction rate. Students are also introduced to a picture model representation for chemical reactions.   In future lessons, they use the picture model to help describe the energy picture at the particle level during a chemical reaction. '
    },
    {
        id   : 15, label: 'Ext D: Reaction \nRate & Energy \nDiagrams', x: "-650", y: "-815",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'This extension builds on Extension C, in which students develop a particle-level mechanism that explains how temperature affects the rate of chemical reaction. Students are introduced to reaction coordinate graphs and learn how to interpret them. They use them to explore chemical reactions.  Using the reaction coordinate graphs, students test the particle-level mechanism for how temperature affects reaction rates using movies of simulators. Students also learn how to classify types of chemical reactions based on how energy changes during the reaction.'
    },
    {
        id   : 16, label: 'Ext E: Models of \nthe Atom', x: "-950", y: "-815",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
        },
        description: 'Students are introduced to key historical experiments and observations that helped form models of the atom (in chronological order): Dalton’s theory of atomic structure (billiard balll model), plum pudding model, the Rutherford model (nuclear model), and the Bohr model (shell model). The extension includes several videos to watch that describe many of the important experiments that lead to the development of the various atomic models.'
    }
]);

// create an array with edges
var edges = new vis.DataSet([
    {from: 1, to: 2},
    {from: 2, to: 3},
    {from: 3, to: 4},
    {from: 4, to: 5},
    {from: 5, to: 6},
    {from: 6, to: 7},
    {from: 7, to: 8},
    {from: 8, to: 9},
    {from: 9, to: 10},
    {from: 10, to: 11}
]);

var edges2 = new vis.DataSet([
    {from: 1, to: 2},
    {from: 2, to: 3},
    {from: 3, to: 4},
    {from: 4, to: 5},
    {from: 5, to: 6},
    {from: 6, to: 7},
    {from: 7, to: 8},
    {from: 8, to: 9},
    {from: 9, to: 10},
    {from: 10, to: 11}
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

