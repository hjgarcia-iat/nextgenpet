@extends('layouts.two-column')

@section('pageTitle')
    Studio Style Class
@stop
@section('sidebar')
    @include('pages.studio-style-class._sidebar')
@stop
@section('banner')
    @include('pages.studio-style-class._banner')
@stop
@section('content')
    
    <section id="pdf-content" class="pdf-content"></section>
    <section id="html-content" class="html-content">
        <h3>Matter and Interactions Module</h3>
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>
        <h4>Physical Changes Unit</h4>
        <div id="canvas">
        
        </div>
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>
        
        <h4>Chemical Reactions Unit</h4>
        <div id="canvas2" class="canvas">
        
        </div>
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>
    </section>
    <div class="modal fade" id="myModal-1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">UM L1: Modeling and the Mystery Tube</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi fuga odit? Accusamus accusantium dignissimos dolorum error excepturi laudantium mollitia numquam, officiis praesentium qui, quidem, ratione rem unde voluptates voluptatibus!</p>
                    
                    <span class="wistia_embed wistia_async_ft3r1d6oru popover=true popoverAnimateThumbnail=true"
                          style="display:inline-block;height:240px;width:300px">&nbsp;</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div><!-- /.modal -->
    <div class="modal fade" id="myModal-2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">UM L2: Exploring Magnetic Effects</h4>
                </div>
                <div class="modal-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae commodi fuga odit? Accusamus accusantium dignissimos dolorum error excepturi laudantium mollitia numquam, officiis praesentium qui, quidem, ratione rem unde voluptates voluptatibus!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    <script src="//fast.wistia.com/embed/medias/el4h8jlwzj.jsonp" async></script>
    <script src="//fast.wistia.com/assets/external/E-v1.js" async></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.js"></script>
    
    
    <script>
        // create an array with nodes
        var nodes = new vis.DataSet([
            {id: 1, label: 'UPC A1: Pressure', x: "-1100", y: "-1000"},
            {id: 2, label: 'UPC A2: The SPT of \nGases', x: "-900", y: "-1000"},
            {id: 3, label: 'UPC A3: Pressure and \nSPT', x: "-685", y: "-1000"},
            {id: 4, label: 'UPC A4: Liquids and \nthe SPT', x: "-485", y: "-1000"},
            {id: 5, label: 'UPC A5: Solids, the SPT \nand Energy', x: "-485", y: "-875"},
            {id: 6, label: 'UPC A6: Changes of \nState', x: "-800", y: "-875"},
            {id: 7, label: 'UPC A7: Change of State \nand the SPT', x: "-1100", y: "-875"},
            {id: 8, label: 'UPC A8: Evaluating \nBallonet Designs', x: "-1100", y: "-725"},
            {id: 9, label: 'UPC A9: Evaluating \nBallonet Designs', x: "-900", y: "-725"},
            {id: 10, label: 'UPC A10: Evaluating \nBallonet Designs', x: "-685", y: "-725"},
            {id: 11, label: 'UPC A11: Evaluating \nBallonet Designs', x: "-485", y: "-725"},
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
                id   : 16, label: 'Ext B: Pressure-Volume \nRelationship', x: "-800", y: "-1075",
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
                id   : 17, label: 'Ext C: Gas \nLaw Graphing', x: "-655", y: "-935",
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
                id   : 18, label: 'Ext D: Energy in \nHeating & Phase Changes', x: "-975", y: "-800",
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
            {id: 1, label: 'UCR A1: Physical \nChanges vs. \nChemical Reactions', x: "-1100", y: "-1000"},
            {id: 2, label: 'UCR A2: Classification \nof Matter', x: "-900", y: "-1000"},
            {id: 3, label: 'UCR A3: Evidence of \nChemical Reactions', x: "-685", y: "-1000"},
            {id: 4, label: 'UCR A4: Conservation of \nMass and SPT', x: "-485", y: "-1000"},
            {id: 5, label: 'UCR A5: Chemical \nReactions & Energy Transfer', x: "-485", y: "-875"},
            {id: 6, label: 'UCR A6: Elements & \nthe Periodic Table', x: "-800", y: "-875"},
            {id: 7, label: 'UCR A7: Atoms & \nthe Periodic Table', x: "-1100", y: "-875"},
            {id: 8, label: 'UCR A8: Electrons & \nChemical Bonding', x: "-1100", y: "-725"},
            {id: 9, label: 'UCR A9: Molecular \nStructure \n(Supplemental)', x: "-900", y: "-725"},
            {id: 10, label: 'UCR A10: Using the \nClass Consensus \nto Explain Observations', x: "-685", y: "-725"},
            {id: 11, label: 'UCR A11: Evaluating \nHand Warmers', x: "-485", y: "-725"},
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
                id   : 14, label: 'Ext C: Collision Theory & Chemical Reactions', x: "-650", y: "-935",
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
                id   : 15, label: 'Ext D: Reaction Rate & Energy Diagrams', x: "-650", y: "-815",
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
            {from: 7, to: 8}
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