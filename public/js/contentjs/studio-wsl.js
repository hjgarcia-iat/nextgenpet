// create an array with nodes
var nodes = new vis.DataSet([{
    id: 1,
    label: 'A1: Wave \nPulses\n120 min',
    x: "-850",
    y: "-1000",
    description: "<p>In this activity students are introduced to mechanical wave pulses in one dimension.  In the Initial Ideas section they use the example of the 'Mexican wave' to consider the conditions necessary for a wave pulse to be created and propagate. They also play with a block on the end of a long spring to see how mechanical wave pulses can transfer energy.</p><p>In Exploration#1 students use a Slinky® to generate both transverse and longitudinal waves. In Exploration#2 they use a simulator of transverse waves on a string to investigate how wave pulses are characterized in terms of their amplitude and width, and how these are related to the motion of the source. In Exploration #3 they investigate what factor(s) determine the speed of the wave; they learn that only the tension in the string affects the wave speed (they don’t vary mass per unit length). Increasing the tension (tautness) increases the wave speed, and vice versa. They also consider why changing the wave speed changes the pulse width. Finally, in Exploration#4 they use both their Slinky® and the simulator to investigate what happens to wave pulses when they reach the end of the medium. The Summarizing Questions have them practice using the ideas they have developed regarding the relationships between different pulse characteristics.</p>"
}, {
    id: 2,
    label: 'A2: Continuous \nWaves\n50 min',
    x: "-675",
    y: "-1000",
    description: "In this activity students examine the characteristics of continuous mechanical waves in one dimension.  Many of the properties of continuous waves they learn about are then applied in the following two activities on water waves (two dimensions) and sound waves (three dimensions). In Exploration#1 they use a simulator to examine continuous transverse waves on a string and how amplitude, frequency, and wavelength are defined. In Exploration #2 they determine how the wavelength of a continuous wave depends on its speed and frequency (but not its amplitude). They try to make sense of these dependencies using an analogy of a line of cars moving along a road. Finally, they are introduced to the algebraic relationship wavelength = wave speed/frequency. The Summarizing Questions have them practice using the ideas they have developed regarding the relationships between different wave characteristics."
}, {
    id: 3,
    label: 'A3: Two \nDimensional \nWaves\n90 min',
    x: "-485",
    y: "-1000",
    description: "In this activity students extend their ideas from Activity 2 (continuous waves in one dimension) to two-dimensional waves.  In the Initial Ideas section they consider how ripples created by a point source on the surface of a lake reduce in amplitude as they spread out.  In Exploration#1 they use the PhET ‘Wave Interference’ simulation to study waves moving along the surface of water, examining both ‘side-view’ and ‘top-view’ representations.  They are introduced to the amplitude, frequency, and wavelength of water waves, and to the idea of 'wavefronts' and the construct of wave rays (in the top view)—arrows that show the direction that the (energy in the) wave is moving.  In Exploration #2 they watch simulator movies to explore how the wave speed depends on depth of the water and thus, for a given frequency, why the wavelength changes when the depth of water changes. They then examine how this change in speed leads to the phenomenon of refraction, using an analogy of a toy car changing direction when it moves onto a different surface."
}, {
    id: 4,
    label: 'A4: Sound \nWaves\n60 min',
    x: "-485",
    y: "-875",
    description: "In this activity students extend their ideas of wave motion in one and two dimensions to three dimensions, with sound waves as the context.  In the Initial Ideas section students consider an electric bell and give their ideas about how sound gets from a source to a listener, including what would happen if the bell were in a vacuum. In Exploration#1 they consider how vibrations of a solid object create sound waves. They use a PhET simulator to see a visual representation of the sound waves, examine the mechanism by which these waves propagate, and see how they are characterized.  In Exploration#2 students learn about some properties of sound waves and how they are detected.  Using the PhET simulation they explore how changing the amplitude and then the frequency of the speaker motion affects the amplitude, wavelength, and loudness and quality of the sound.  They then consider how human hearing is related to their developing ideas and the instructor leads a demonstration of the range of human hearing. Finally they are introduced to the idea that sound waves can move through other materials than air, and one of the Summarizing Questions has them consider the same frequency wave moving through three different materials."
}, {
    id: 5,
    label: 'A5: Engineering \nDesign: Locating an \nEarthquake\n90 min',
    x: "-675",
    y: "-875",
    description: "<em>Note: Because this activity largely duplicates the content of Extension D, you should not assign Extension D if your class does Activity 5</em>. This engineering design activity begins with a brief introduction to two different types of earthquake waves—the longitudinal P-waves and the transverse S-waves—and seismographs.  Because they travel at different (known) speeds, the difference in time between the arrival of P-waves and the slower S-waves at a seismograph can be used to measure the distance to the earthquake.  The challenge for students in this activity is to determine the minimum number of seismographs needed to accurately determine the epicenter of an earthquake to within a small area. Students brainstorm solutions, and then check their solutions using real-world earthquake data and Google map circles. "
}, {
    id: 7,
    label: 'Ext A: How \nDo Waves \nMove?',
    x: "-575",
    y: "-1080",
    description: "In this extension students consider the mechanism for a ‘people wave’ at a stadium, and then consider a ‘wave’ generated along a straight line of people.  Next they consider the mechanisms for one-dimensional waves along a slinky spring and a string, and then mechanical waves that move through a solid modeled by particles with small springs attached to them. ",
    color: {
        border: '#fcd5b5',
        background: '#fcd5b5'
    },
    hover: {
        border: '#fcd5b5',
        background: '#fcd5b5'
    }
}, {
    id: 8,
    label: 'Ext C: Reflection \nof 2D \nWaves',
    x: "-350",
    y: "-935",
    description: "In this extension students watch movies of water waves reflecting from boundaries to determine that the waves reflect at equal angles.",
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
    label: 'Ext D: Seismic \nWaves',
    x: "-565",
    y: "-800",
    description: "<em>[Note: If you plan to have students do Activity 5 (Locating an Earthquake), you should not assign this extension as the content is duplicative.]</em> In this extension students learn about seismic waves associated with earthquakes.  There are both P-waves (longitudinal waves) and S-Waves (Transverse waves) generated from the epicenter of an earthquake, and they move through the earth at different speeds.  After being introduced to seismographs, students are given graphical data and they learn how to determine the distance from the epicenter.  Finally, they use Google map circles to determine the geographical locations of epicenters from seismic data.",
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
    label: 'A1: Pinholes \nand Shadows\n110 min',
    x: "-875",
    y: "-1000",
    description: "In this activity students use pinholes and shadows to gather evidence to support the idea that light travels in straight lines. They are introduced to a light ray representation and use it to draw diagrams to support their observations. In Exploration #1 students are first introduced to the idea that light interactions transfer energy, and that light from an object must enter the eye in order for it to be seen. They investigate the formation of pinhole images and draw light ray diagrams to describe the behavior of light that causes the pinhole image to appear on the screen.  They also consider what happens when there is more than one source of light.  In Exploration #2 students use a point source, a small black blocker, and a screen to investigate how a shadow is formed and how its size and position change when the source is moved, again drawing light ray diagrams to describe and explain what happens.",
}, {
    id: 2,
    label: 'A2: Reflection \nof Light\n80 min',
    x: "-675",
    y: "-1000",
    description: "In this activity, students study the reflection of light from both shiny surfaces (mirror) and from non-shiny white surfaces, like a piece of paper.  Throughout the activity they draw light-ray diagrams to support their reasoning. In the Initial Ideas section they predict how people will see a mirror and a white card when a light beam is shone on them in a dark room. They then participate in a demonstration of this scenario. In Exploration #1, they investigate how light reflects from a mirror and develop the law of reflection (angle of reflection = angle of incidence). In Exploration #2, they see that when light reflects from a white card, it goes in all directions, which is different from a mirror. They are then reminded of the structure for constructing a scientific explanation and, in a summarizing question, apply it in the context of light from a car headlamp reflecting off a wet road.",
}, {
    id: 3,
    label: 'A3: Refraction of \nLight\n90 min',
    x: "-500",
    y: "-1000",
    description: "If they did Unit WS, students will have learned that water waves change direction when passing between two regions (at an angle) where the wave speed is different—a process called refraction.  In this lesson activity they learn about refraction of light.  In the Initial Ideas section they observe a pencil that appears to be bent when partially immersed in a glass of water, and propose an initial for this phenomenon.  In Exploration #1 they use a PhET simulator to investigate what happens when light passes from air into a transparent material and are introduced to an approximate rule for describing this behavior. In Exploration #2 they use the same simulator to examine how light behaves when it passes from a transparent material into air, and are introduced to another approximate rule.  Students practice drawing light ray diagrams using this set of rules and in a summarizing question they use what they learned to explain the ‘mystery appearing coin’ phenomena.  (A coin is at the bottom of an opaque cup and cannot be seen by an observer looking into the cup from above and to the side.  When water is poured into the cup, the coin suddenly appears.)",
}, {
    id: 4,
    label: 'A4: Color\n110 min',
    x: "-500",
    y: "-900",
    description: "This activity introduces students to color phenomena.  In Initial Ideas they predict what color would be seen if red and green lights are overlapped and then see it demonstrated. They are then introduced to the idea of light as an electromagnetic wave and the idea of the electromagnetic spectrum. In Exploration #1 they first use flashlights to explore what colors are seen when red, green, and blue lights are overlapped in various combinations. They are introduced to the color spectrum of visible light and told to approximate it by assuming it consists of three bands: red for the longest wavelengths, green for the middle range, and blue for the shortest.  Using a PhET simulator they reproduce their earlier results, and are introduced to the rules for color addition.  In Exploration #2 they use spectral glasses to explore how color gels work, deducing that when light passes through a gel, the gel absorbs one or more color bands. They then draw color light ray diagrams to figure out what would be seen when white light shines through various combinations of color gels. In Exploration #3 they use their ideas about reflection of the three color bands from non-shiny colored surfaces to explain how we perceive colored objects. In answering Summarizing Questions, they combine several of the ideas they developed.",
}, {
    id: 5,
    label: 'A5: Engineering \nDesign: Measuring \nthe Moon\'s Distance\n60 min',
    x: "-675",
    y: "-900",
    description: "In this engineering design activity, students are challenged to design a system for measuring the distance between the Earth and the Moon using light waves. The challenge is to ensure that a light pulse aimed at the Moon returns to Earth, rather than being absorbed by the Moon’s surface or reflected in another direction. Students brainstorm how to arrange just two mirrors on the Moon’s surface so that a beam of light coming from the Earth from any direction is reflected back in precisely the opposite direction.  Then students test their designs using mirrors, a flashlight with a “slit collimator”, and a piece of paper illuminated by the incoming and reflected light beams. This design of a “retroreflector” only works in two dimensions, so at the end of the activity, students are challenged to add a third mirror to their design to make their retoreflector three-dimensional. ",
}, {
    id: 8,
    label: 'Ext A: Drawing Light \nRay Diagrams for Pinholes \nand Shadows',
    x: "-785",
    y: "-1075",
    description: "This extension provides students the opportunity to practice drawing light ray diagrams to determine the location of pinhole images (from both point sources and elongated sources) on a screen, and the size and shape of a shadow from a point source and blocker.",
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
    label: 'Ext B: More \non Mirror \nReflections \nand Images ',
    x: "-585",
    y: "-1075",
    description: "In this extension, students first learn that the location of an image of a point source in a mirror is the same distance behind the mirror surface as the source is in front.  They apply this rule to locate the position of various point source images in a plane mirror.  Then they consider what happens when light strikes multiple mirrors. Finally, they consider the accuracy of light ray diagrams that show how light behaves in situations where light is striking both shiny and non-shiny surfaces.",
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