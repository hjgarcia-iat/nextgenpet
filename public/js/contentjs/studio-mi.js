// create an array with nodes
var nodes = new vis.DataSet([
    {id: 1, label: 'A1: Pressure', x: "-1100", y: "-1000"},
    {id: 2, label: 'A2: Pressure and the \nAmount of Gas', x: "-900", y: "-1000"},
    {id: 3, label: 'A3: Pressure and \nTemperature Relationship', x: "-685", y: "-1000"},
    {id: 4, label: 'A4: Explanations \nInvolving Gas', x: "-485", y: "-1000"},
    {id: 5, label: 'A5: Properties \nof Liquids', x: "-485", y: "-875"},
    {id: 6, label: 'A6: More on \nLiquids and \nCharacteristic Properties', x: "-800", y: "-875"},
    {id: 7, label: 'A7: Solids \nand SPT', x: "-1100", y: "-875"},
    {id: 8, label: 'A8: Density', x: "-1100", y: "-725"},
    {id: 9, label: 'A9: Mixing \nand Solubilitiy', x: "-900", y: "-725"},
    {id: 10, label: 'A10: Explanations \nInvolving Physical \nChanges', x: "-685", y: "-725"},
    {
        id       : 15, label: 'Ext A: Intro to \nSpreadsheets & Graphing', x: "-1000", y: "-1075",
        color    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        highlight: {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        hover    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        }
    },
    {
        id   : 16, label: 'Ext B: Pressure-Volume \nRelationship', x: "-780", y: "-1075",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 17, label: 'Ext C: Gas \nLaw Graphing', x: "-575", y: "-1075",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 18, label: 'Ext D: Energy Involved in \nHeating & Phase Changes', x: "-975", y: "-800",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 19, label: 'Ext E: SPT & Density \nof Gases, Liquids \n& Solids', x: "-1000", y: "-650",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 20,
        label: 'Ext F: Using Characteristic \nPhysical Properties \nof Matter',
        x    : "-800y",
        y    : "-650",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    }
]);

var nodes2 = new vis.DataSet([
    {id: 1, label: 'A1: Physical \nChanges vs. \nChemical Reactions', x: "-1100", y: "-1000"},
    {id: 2, label: 'A2: Classification \nof Matter', x: "-900", y: "-1000"},
    {id: 3, label: 'A3: Evidence of \nChemical Reactions', x: "-685", y: "-1000"},
    {id: 4, label: 'A4: Conservation of \nMass and SPT', x: "-485", y: "-1000"},
    {id: 5, label: 'A5: Chemical \nReactions & Energy Transfer', x: "-485", y: "-875"},
    {id: 6, label: 'A6: Elements & \nthe Periodic Table', x: "-800", y: "-875"},
    {id: 7, label: 'A7: Atoms & \nthe Periodic Table', x: "-1100", y: "-875"},
    {id: 8, label: 'A8: Electrons \nand Chemical \nBonding', x: "-1100", y: "-725"},
    {id: 9, label: 'A9: Molecular \nStructure \n(Supplemental)', x: "-900", y: "-725"},
    {id: 10, label: 'A10: Using the \nClass Consensus \nto Explain Observations', x: "-650", y: "-725"},
    {
        id       : 12, label: 'Ext A: Separating Mixtures \nusing Physical \nProperties', x: "-800", y: "-1075",
        color    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        highlight: {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        hover    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        }
    },
    {
        id   : 13, label: 'Ext B: Reaction Rates \nand Temperature', x: "-600", y: "-1075",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 14, label: 'Ext C: Collision Theory & \nChemical Reactions', x: "-650", y: "-935",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 15, label: 'Ext D: Reaction \nRate & Energy \nDiagrams', x: "-650", y: "-815",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
    },
    {
        id   : 16, label: 'Ext E: Models of \nthe Atom', x: "-950", y: "-815",
        color: {
            border    : '#fcd5b5',
            background: '#fcd5b5',
            highlight : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            },
            hover     : {
                border    : '#fcd5b5',
                background: '#fcd5b5'
            }
        }
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
    {from: 9, to: 10}
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
    "physics": {
        enabled: false
    },
    layout   : {randomSeed: 4},
    edges    : {
        smooth: {
            type: 'continuous'
        },
        arrows: {to: true},
        color : {
            color    : '#333',
            highlight: '#333',
            hover    : '#333',
            opacity  : 1.0
        }
    },
    nodes    : {
        shape              : 'box',
        borderWidthSelected: 10,
        borderWidth        : 10,
        color              : {
            border    : '#b9cde5',
            background: '#b9cde5',
            highlight : {
                border    : '#b9cde5',
                background: '#b9cde5'
            },
            hover     : {
                border    : '#b9cde5',
                background: '#b9cde5'
            }
        },
        shapeProperties    : {
            borderRadius: 0
        },
        shadow             : {
            enabled: true,
            color  : 'rgba(0,0,0,0.5)',
            size   : 10,
            x      : 3,
            y      : 3
        },
    }
};

var network  = new vis.Network(container, data, options);
var network2 = new vis.Network(container2, data2, options);

network.on("doubleClick", function (params) {
    $('#myModal-' + params.nodes[0]).modal();
});

