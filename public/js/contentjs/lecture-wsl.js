// create an array with nodes
var nodes = new vis.DataSet([
    {
        id   : 1,
        label: 'L1: Properties \nof Waves\n100 min',
        x    : "-800",
        y    : "-1000",
        description: "In this lesson students are introduced to mechanical waves in one dimension. In Part 1 students are shown videos of both transverse and longitudinal wave pulses moving along a slinky spring.  In Part 2 they learn about continuous transverse waves, first seeing movies of a slinky, and then seeing movies from the PhET simulation, ‘’Waves on a String.’ Using the simulator movies they learn about the frequency, amplitude, and wavelength of the continuous transverse wave, and then with movies using a slinky they learn about the equivalent properties of a continuous longitudinal wave.  In Part 3 they learn that changing the amplitude of a transverse wave does not change its wavelength, but changing the frequency of the source does change the wavelength.  In Part 4 they investigate what factor(s) determines the speed of the wave; they learn that only the tension in the string affects the wave speed (they don’t consider the effects of changing the mass per unit length). Increasing the tension (tautness) increases the wave speed, and vice versa.  They also learn about the relationship between wavelength, wave speed and frequency:  wavelength = wave speed/frequency.",
    },
    {
        id   : 2,
        label: 'L2: Two-Dimensional \nWaves\n55 min',
        x    : "-600",
        y    : "-1000",
        description: "In this lesson students extend what they had learned in L1 (waves in one dimension) to two-dimensional waves.  They observe movies from the PhET ‘Wave Interference’ simulation to study waves moving along the surface of water.  [The depth of the water is great enough to approximate the waves as transverse in nature.]  In Part 1 students watch movies showing both ‘side-view’ and ‘top-view’ simulations of the water waves.  They are introduced to the amplitude, frequency, and wavelength of water waves, and to the construct of wave rays (in the top view)—arrows that show the direction that the (energy in the) wave is moving.  In Part 2 they explore how the wave speed depends on depth of the water: the waves move faster in deeper water and shower in shallower water.  They also note that for a given frequency, the faster the waves move the longer the wavelength is.",
    },
    {
        id   : 3,
        label: 'L3: Sound \nWaves\n65 min',
        x    : "-600",
        y    : "-900",
        description: "In this lesson students extend their ideas of wave motion in one and two dimensions to three dimensions, with sound waves as the context.  In Part 1 students first consider whether sound can travel through a vacuum (it cannot). Then they watch the PhET ‘Sound’ simulation that depicts sound waves coming from a speaker.  The simulation includes audio, so students can both see a visual representation of the sound waves and hear what the speaker is emitting.  There is a brief explanation of how the sound wave propagates through the air (in terms of areas of increased and decreased pressure), and that sound is a longitudinal wave.  In Part 2 students learn about some properties of sound waves and how they are detected.  Using movies from the PhET simulation, they explore how changing the amplitude and then the frequency of the speaker motion affects the amplitude, wavelength, and loudness and quality of the sound.  At the end of the lesson there is a brief description of human hearing.",
    },
    {
        id       : 7,
        label    : 'Ext A: How Do \nWaves Move?',
        x        : "-715",
        y        : "-1065",
        description: "In this extension students consider the mechanism for a ‘people wave’ at a stadium, and then consider a ‘wave’ generated along a straight line of people.  Next they consider the mechanisms for one-dimensional waves along a slinky spring and a string, and then mechanical waves that move through a solid modeled by particles with small springs attached to them. ",
        color    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        },
        hover    : {
            border    : '#fcd5b5',
            background: '#fcd5b5'
        }
    },
    {
        id   : 8,
        label: 'Ext B: Wave \nRefraction ',
        x    : "-450",
        y    : "-975",
        description: "(Optional) Students might work through this only if they are going to learn about the refraction of light (Unit L L3).  They first watch movies of waves from a simulation of water waves to determine how waves change direction when they enter a region where the wave speed changes.  Then they consider an analogy with toy cars moving down a ramp through a region with a different amount of friction to provide a reason for why waves change direction when there is a change in speed (assuming the waves strike the boundary at an angle).",
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
        label: 'Ext C: Reflection \nof 2D Waves',
        x    : "-450",
        y    : "-915",
        description: "In this extension students watch movies of water waves reflecting from boundaries to determine that the waves reflect at equal angles.",
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
        label: 'Ext D: Seismic \nWaves',
        x    : "-700",
        y    : "-845",
        description: "In this extension students learn about seismic waves associated with earthquakes.  There are both P-waves (longitudinal waves) and S-Waves (transverse waves) generated from the epicenter of an earthquake, and they move through the earth at different speeds.  After being introduced to seismographs, students are given graphical data and they learn how to determine the distance from the epicenter.  Finally, they use Google map circles to determine the geographical locations of epicenters from seismic data.",
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
    {
        id   : 1,
        label: 'L1: Light \nWaves, \nPinholes, and \nImages\n75 min',
        x    : "-950",
        y    : "-1000",
        description: "In this lesson students are told that light is a special type of wave known as an electromagnetic wave, which does not require a medium to travel through.  Visible light occupies a tiny fraction of the entire range of electromagnetic waves.  Students are told to assume that light travels in straight lines, behavior they can model by drawing light ray diagrams.  Assuming materials are available, students then investigate the formation of pinhole images using a MiniMagliteTM point source of light, a card with a tiny hole in its center, and a screen.  Students can observe a tiny dot of illumination on the screen (the pinhole image).  They move the source in different directions, observe what happens to the pinhole image, add another point light source, and draw light ray diagrams to describe the behavior of light that accounts for the pinhole image(s). Finally students use a MiniMagliteTM, a small black blocker, and a screen to investigate how a shadow is formed and how its size and position change when the source is moved.  Students draw light ray diagrams to describe and explain what happens. Throughout this lesson, if materials are not available, students can watch movies of all the phenomena.",
    },
    {
        id   : 2,
        label: 'L2: Reflection \nof Light\n40 min',
        x    : "-775",
        y    : "-1000",
        description: "In this lesson students study the reflection of light from both shiny surfaces (Law of Reflection) and from non-shiny white surfaces, like a piece of paper.  They draw light ray diagrams to show how light reflects from a mirror (angle of reflection equals the angle of incidence) and from white paper (regardless of the direction of the incident light, there is reflected light in all directions).",
    },
    {
        id   : 3,
        label: 'L3: Refraction of \nLight\n75 min',
        x    : "-600",
        y    : "-1000",
        description: "In UWS Extension B, students learned that water waves change direction when passing between two regions (at an angle) where the wave speed is different—a process called refraction of water waves.  In this lesson students learn about refraction of light.  The lesson begins with students observing a photo of a pencil appearing bent when partially immersed in a glass of water.  They need to decide which of several light ray diagrams accurately describes how the light is behaving to cause the effect.  For most of the remainder of the lesson students observe movies from a PhET simulation to learn two sets of rules (simple approximations to Snell’s Law of Refraction) for deciding how light changes direction when traveling between air and a transparent liquid or solid material.  Students practice drawing light ray diagrams using this set of rules. In the last part of the lesson they use what they learned to explain the ‘mystery of the appearing coin’ phenomenon.  A coin is at the bottom of an opaque cup and cannot be seen by an observer looking into the cup from above and to the side.  However, when water is poured into the cup, the coin suddenly appears.",
    },
    {
        id   : 4,
        label: 'L4: Light \nand Color\n70 min',
        x    : "-600",
        y    : "-900",
        description: "This lesson introduces color phenomena.  Students are told to approximate the color spectrum by assuming it consists of three bands corresponding to different ranges of wavelengths: red for the longest, green for the middle range, and blue for the shortest.  After a description of the three-color receptors in the eye responsible for the first stage in the perception of color, students learn about color addition of lights. When two or more bands (red, green, blue) of color light enter their eye at the same time, the eye-brain system perceives a certain color light.  The rules are:  red + green = yellow; red + blue = magenta; blue + green = cyan; red + green + blue = white.  The last part of the lesson explores how color gels work.  When light passes through a gel, the gel absorbs (subtracts out) one or more of the color bands, and the eye perceives what remains. Students can then figure out what would be seen when white light shines through two different color gels. Finally students use a simple analogy to understand why color objects appear the way they do. Throughout this lesson, if materials are not available, students can watch movies of all the phenomena.",
    },
    {
        id   : 5,
        label: 'L5 ED: Measuring the \nMoon\'s Distance\n75 min',
        x    : "-775",
        y    : "-900",
        description: "This is an engineering design lesson where students first consider problems associated with laser pulses going from the earth to the moon, striking a single mirror, and then reflecting back to the exact same place—so that accurate measurements can be made of the earth to moon distance.  The problem with this arrangement is that if the light pulses strike the mirror at slightly different angles, the reflected pulses will not return to the same place on earth. The students’ challenge is to design a system of two mirrors that will reflect light back that is parallel to the incoming light.  Students must have protractors to do this lesson, and there are optional parts that require plane mirrors (to test the design). ",
    },
    {
        id   : 8,
        label: 'Ext A: Drawing Light \nRay Diagrams for \nPinholes and \nShadows',
        x    : "-865",
        y    : "-1075",
        description: "This extension provides students the opportunity to practice drawing light ray diagrams to determine the location of pinhole images (from both point sources and elongated sources) on a screen, and the size and shape of a shadow from a point source and blocker.",
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
        label: 'Ext B: More \non Mirror \nReflections and \nImages ',
        x    : "-700",
        y    : "-1082",
        description: "In this extension, students first learn that the location of an image of a point source in a mirror is the same distance behind the mirror surface as the source is in front.  They apply this rule to locate the position of various point source images in a plane mirror.  Then they consider what happens when light strikes multiple mirrors. Finally, they consider the accuracy of light ray diagrams that show how light behaves in situations where light is striking both shiny and non-shiny surfaces.",
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
        to  : 5
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