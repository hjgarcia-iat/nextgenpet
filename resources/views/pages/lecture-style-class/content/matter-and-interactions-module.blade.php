@extends('layouts.two-column')

@section('pageTitle')
    Lecture Style Class
@stop
@section('sidebar')
    @include('pages.lecture-style-class._sidebar')
@stop
@section('banner')
    @include('pages.lecture-style-class._banner')
@stop
@section('content')

    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Matter and Interactions Module</h3>
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>
        <h4>Unit PC: Physical Changes</h4>
        @include('pages.partials._canvas',['canvasId' => 'canvas'])
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>

        <h4>Unit CR: Chemical Reactions</h4>
        @include('pages.partials._canvas',['canvasId' => 'canvas2'])
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>
    </section>
@stop

@section('scripts')
    <script src="//fast.wistia.com/embed/medias/el4h8jlwzj.jsonp" async></script>
    <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.js"></script>


    <script>
        // create an array with nodes
        var nodes = new vis.DataSet([
            {id: 1, label: 'L1: Pressure', x: "-950", y: "-1000"},
            {id: 2, label: 'L2: The SPT \nof Gases', x: "-800", y: "-1000"},
            {id: 3, label: 'L3: Pressure \nand SPT', x: "-650", y: "-1000"},
            {id: 4, label: 'L4: Liquids \nand the \nSPT', x: "-485", y: "-1000"},
            {id: 5, label: 'L5: Solids, \nthe SPT \nand Energy', x: "-485", y: "-875"},
            {id: 6, label: 'L6: Changes \nof State', x: "-485", y: "-750"},
            {id: 7, label: 'L7: Change of \nState and \nthe SPT', x: "-650", y: "-750"},
            {id: 8, label: 'L8 ED: Evaluating \nBallonet \nDesigns', x: "-800", y: "-750"},
            {
                id       : 10, label: 'Ext G: Effects \nDue to Air \nPressure', x: "-875", y: "-1075",
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
                id   : 11, label: 'Ext H: Properties \nof Gases \nand SPT', x: "-725", y: "-1075",
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
                id: 12, label: 'Ext I: Mass, \nVolume and \nDensity', x: "-575", y: "-1075",
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
                id   : 13, label: 'Ext J: Sinking \nand Floating', x: "-350", y: "-935",
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
                id   : 14, label: 'Ext K: Rates of \nWarming of \nDifferent Materials', x: "-350", y: "-815",
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
                id   : 15, label: 'Ext L: Explanations \nInvolving Heating \nand Cooling', x: "-565", y: "-675",
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
                id   : 16, label: 'Ext  M: Heating \nCurves and \nSPT', x: "-725", y: "-675",
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
            {id: 1, label: 'L1: Physical \nChanges versus \nChemical Reactions', x: "-1000", y: "-1000"},
            {id: 2, label: 'L2: Chemical \nReactions and \nConversation of Mass', x: "-750", y: "-1000"},
            {id: 3, label: 'L3: Chemical \nReactions, \nConservation of Mass \nand SPT', x: "-485", y: "-1000"},
            {id: 4, label: 'L4: Chemical \nReactions and \nEnergy Transfer', x: "-485", y: "-875"},
            {id: 5, label: 'L5: Classifying \nand Organizing \nElements', x: "-485", y: "-750"},
            {id: 6, label: 'L6: Periodic Trends \nand the \nElements', x: "-675", y: "-750"},
            {id: 7, label: 'L7: Atoms, Ions \nand the \nPeriodic Table', x: "-845", y: "-750"},
            {id: 18, label: 'L8: Electrons \nand Chemical \nBonding', x: "-1000", y: "-750"},
            {id: 19, label: 'L9: Using the \nClass Consensus \nto Explain \nObservations', x: "-1000", y: "-875"},
            {
                id       : 10, label: 'Ext A: Separating \nMixtures Using \nPhysical Properties', x: "-875", y: "-1075",
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
                id   : 11, label: 'Ext B: Reaction \nRates and \nTemperature', x: "-625", y: "-1075",
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
                id   : 12, label: 'Ext F: Balancing \nChemical \nEquations', x: "-325", y: "-935",
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
                id   : 13, label: 'Ext G: \nCharacteristic \nProperties', x: "-575", y: "-680",
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
                id   : 14, label: 'Ext E: Models of \nthe Atom', x: "-775", y: "-680",
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
                id   : 15, label: 'Ext H: Atomic \nStructure, the \nPeriodic Table, and\n Isotopes', x: "-925", y: "-660",
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
                id   : 16,
                label: 'Ext I: Bond \nTypes and \nthe Chemical \nStructure of \nMaterials',
                x    : "-1150",
                y    : "-810",
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
            {from: 7, to: 8}
        ]);

        var edges2 = new vis.DataSet([
            {from: 1, to: 2},
            {from: 2, to: 3},
            {from: 3, to: 4},
            {from: 4, to: 5},
            {from: 5, to: 6},
            {from: 6, to: 7},
            {from: 7, to: 18},
            {from: 18, to: 19}
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

    </script>
@stop

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.css">
    <style>
        #canvas { width : 100%; height : 500px; border : 1px solid lightgray; margin-bottom : 40px; }
    </style>
@stop