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
        <h3>Interactions and Forces Module</h3>
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>
        <h4>Unit on Force</h4>
        <div id="canvas">
        
        </div>
        <p>
        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem deserunt doloremque impedit inventore maiores officia, porro quasi quisquam repellat veniam vero voluptate, voluptatum! Expedita fuga nam optio, quis saepe vitae!</span><span>Asperiores at atque autem doloremque est et eum id ipsam magni molestias, natus nisi possimus quia quibusdam quidem repudiandae sint velit vitae! Ab amet fugit harum necessitatibus quos sunt, veritatis.</span><span>Accusantium assumenda consectetur corporis maxime nam natus omnis provident repellat sapiente ullam! Accusantium atque beatae consectetur dolores fugiat iusto quidem totam! Aliquam aspernatur beatae blanditiis consequuntur culpa dicta, maiores repellat.</span>
        </p>
        
        <h4>Unit on Combined Forces</h4>
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
            {id: 1, label: 'UFM A1: Interactions Force \nand Motion', x: "-1000", y: "-1000"},
            {id: 2, label: 'UFM A2: Motion with a \nContinuous Force', x: "-750", y: "-1000"},
            {id: 3, label: 'UFM A3: Pushes and \nSlowing Down', x: "-485", y: "-1000"},
            {id: 4, label: 'UFM A4: Forces \nand Friction', x: "-485", y: "-800"},
            {id: 5, label: 'UFM A5: Changing Force \nStrength and Mass', x: "-750", y: "-800"},
            {id: 6, label: 'UFM A6: Falling Objects', x: "-1000", y: "-800"},
            {id: 7, label: 'UFM A7: Crash Barrier Design', x: "-1000", y: "-875"},
            {
                id       : 10, label: 'Ext A: Force Diagrams', x: "-875", y: "-1075",
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
                id   : 11, label: 'Ext B: Pushing a \nSkateboarder', x: "-615", y: "-1075",
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
                id   : 12, label: 'Ext C: Connecting Force and \nEnergy Models', x: "-650", y: "-900",
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
                id   : 13, label: 'Ext D: How Does \nFriction Work?', x: "-650", y: "-725",
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
                id   : 14, label: 'Ext E: Changing Direction', x: "-875", y: "-725",
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
            {id: 1, label: 'UCF A1: Combination of Forces', x: "-1100", y: "-1000"},
            {id: 2, label: 'UCF A2: Balanced Forces', x: "-825", y: "-1000"},
            {id: 3, label: 'UCF A3: Comparing Forces \nDuring Interactions', x: "-600", y: "-1000"},
            {id: 4, label: 'UCF A4: Explaining \nPhenomena Using \nForce Ideas', x: "-600", y: "-800"},
            {id: 5, label: 'UCF A5: \'Whirligig\' \nChallenge', x: "-900", y: "-800"},
            {
                id   : 8, label: 'UCF Ext A: Newton\'s Second \n Law and Net Force', x: "-975", y: "-1075",
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
                id   : 9, label: 'UCF Ext B: More on Balanced \n Forces', x: "-725", y: "-1075",
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
                id   : 10, label: 'UCF Ext C: Balanced and \nUnbalanced Forces', x: "-750", y: "-935",
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
                id   : 11,
                label: 'UCF Ext E: Newton\'s Third Law and \nBalanced Forces', x: "-750", y: "-875",
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
                id   : 12, label: 'UCF Ext D: More on Vertical \nMotion (Air Drag)', x: "-750", y: "-735",
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
            {from: 6, to: 7}
        ]);

        var edges2 = new vis.DataSet([
            {from: 1, to: 2},
            {from: 2, to: 3},
            {from: 4, to: 5}
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