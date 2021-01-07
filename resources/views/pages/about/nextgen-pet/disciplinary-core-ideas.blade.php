@extends('layouts.two-column')

@section('pageTitle', 'Disciplinary Core Ideas')

@section('sidebar')
    @include('home._sidebar')
@stop

@section('banner')
    @include('home._slider')
@stop

@section('content')
    <p>The NGSS distinguishes four general topics in its DCIs for physical science; Matter and its interactions (PS1), Forces and Motion (PS2), Energy (PS3), and Waves (PS4). Ideas in these topics are developed progressively across K-12 grades and at each band there are DCIs (A, B, C, etc.) that are further divided with bullet points. The table below shows the DCI bullet points that are explicitly addressed in each unit of the Next Gen PET in both the studio- and lecture-style formats of the material (X) or only in the studio-style format (S). (A unit key is available below the table.)</p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Code*</th>
            <th>Narrative</th>
            <th colspan="10">Unit Addressed</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td colspan="2">
                <em>
                    <strong>PS1: Matter and its interactions</strong>
                </em>
            </td>
            <td>
                <strong>M</strong>
            </td>
            <td>
                <strong>SE</strong>
            </td>
            <td>
                <strong>EM</strong>
            </td>
            <td>
                <strong>PEF</strong>
            </td>
            <td>
                <strong>FM</strong>
            </td>
            <td>
                <strong>CF</strong>
            </td>
            <td>
                <strong>WS</strong>
            </td>
            <td>
                <strong>L</strong>
            </td>
            <td>
                <strong>PC</strong>
            </td>
            <td>
                <strong>CR</strong>
            </td>
        </tr>
        <tr>
            <td>MS.PS1.A1</td>
            <td>Substances are made from different types of atoms, which combine with one another in various ways. Atoms form molecules that range in size from two to thousands of atoms.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>MS.PS1.A2</td>
            <td>Each pure substance has characteristic physical and chemical properties (for any bulk quantity under given conditions) that can be used to identify it.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>MS.PS1.A3</td>
            <td>Gases and liquids are made of molecules or inert atoms that are moving about relative to each other.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS1.A4</td>
            <td>In a liquid, the molecules are constantly in contact with others; in a gas, they are widely spaced except when they happen to collide. In a solid, atoms are closely spaced and may vibrate in position but do not change relative locations.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>

        <tr>
            <td>MS.PS1.A6</td>
            <td>The changes of state that occur with variations in temperature or pressure can be described and predicted using these models of matter.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>HS.PS1.A1</td>
            <td>Each atom has a charged substructure consisting of a nucleus, which is made of protons and neutrons, surrounded by electrons.</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>HS.PS1.A2</td>
            <td>The periodic table orders elements horizontally by the number of protons in the atom’s nucleus and places those with similar chemical properties in columns. The repeating patterns of this table reflect patterns of outer electron states.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>HS.PS1.A3</td>
            <td>The structure and interactions of matter at the bulk scale are determined by electrical forces within and between atoms.</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>MS.PS1.B1</td>
            <td>Substances react chemically in characteristic ways. In a chemical process, the atoms that make up the original substances are regrouped into different molecules, and these new substances have different properties from those of the reactants.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>MS.PS1.B2</td>
            <td>The total number of each type of atom is conserved, and thus the mass does not change.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>MS.PS1.B3</td>
            <td>Some chemical reactions release energy, others store energy.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>HS.PS1.B1</td>
            <td>Chemical processes, their rates, and whether or not energy is stored or released can be understood in terms of the collisions of molecules and the rearrangements of atoms into new molecules, with consequent changes in the sum of all bond energies in the set of molecules that are matched by changes in kinetic energy.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>HS.PS1.B3</td>
            <td>The fact that atoms are conserved, together with knowledge of the chemical properties of the elements involved, can be used to describe and predict chemical reactions.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
        </tr>

        <tr>
            <td colspan="2">
                <em>
                    <strong>PS2: Forces and Motion</strong>
                </em>
            </td>
            <td>
                <strong>M</strong>
            </td>
            <td>
                <strong>SE</strong>
            </td>
            <td>
                <strong>EM</strong>
            </td>
            <td>
                <strong>PEF</strong>
            </td>
            <td>
                <strong>FM</strong>
            </td>
            <td>
                <strong>CF</strong>
            </td>
            <td>
                <strong>WS</strong>
            </td>
            <td>
                <strong>L</strong>
            </td>
            <td>
                <strong>PC</strong>
            </td>
            <td>
                <strong>CR</strong>
            </td>
        </tr>
        <tr>
            <td>MS.PS2.A1</td>
            <td>For any pair of interacting objects, the force exerted by the first object on the second object is equal in strength to the force that the second object exerts on the first, but in the opposite direction (Newton’s third law).</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS2.A2</td>
            <td>The motion of an object is determined by the sum of the forces acting on it; if the total force on the object is not zero, its motion will change. The greater the mass of the object, the greater the force needed to achieve the same change in motion. For any given object, a larger force causes a larger change in motion.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>HS.PS2.A1</td>
            <td>Newton’s second law accurately predicts changes in the motion of macroscopic objects. (
                <em>NGPET boundary: Limited to rate of change of speed from net force and mass.</em>
                )
            </td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>3.PS2.B1</td>
            <td>Objects in contact exert forces on each other.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS2.B1</td>
            <td>Electric and magnetic (electromagnetic) forces can be attractive or repulsive, and their sizes depend on the magnitudes of the charges, currents, or magnetic strengths involved and on the distances between the interacting objects.</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>HS.PS2.B2</td>
            <td>Forces that act at a distance (electric, magnetic, and gravitational) can be explained by fields that extend through space and can be mapped by their effect on a test object (a charged object, a magnet, or a ball, respectively)</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td colspan="2">
                <em>
                    <strong>PS3: Energy</strong>
                </em>
            </td>
            <td>
                <strong>M</strong>
            </td>
            <td>
                <strong>SE</strong>
            </td>
            <td>
                <strong>EM</strong>
            </td>
            <td>
                <strong>PEF</strong>
            </td>
            <td>
                <strong>FM</strong>
            </td>
            <td>
                <strong>CF</strong>
            </td>
            <td>
                <strong>WS</strong>
            </td>
            <td>
                <strong>L</strong>
            </td>
            <td>
                <strong>PC</strong>
            </td>
            <td>
                <strong>CR</strong>
            </td>
        </tr>

        <tr>
            <td>MS.PS3.A2</td>
            <td>A system of objects may also contain stored (potential) energy, depending on their relative positions.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS3.A3</td>
            <td>Temperature is a measure of the average kinetic energy of particles of matter. The relationship between the temperature and the total energy of a system depends on the types, states, and amounts of matter present.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>HS.PS3.A2</td>
            <td>Energy is a quantitative property of a system that depends on the motion and interactions of matter and radiation within that system. That there is a single quantity called energy is due to the fact that a system’s total energy is conserved, even as, within the system, energy is continually transferred from one object to another and between its various possible forms.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>HS.PS3.A3</td>
            <td>At the macroscopic scale, energy manifests itself in multiple ways, such as in motion, sound, light, and thermal energy.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>

        <tr>
            <td>MS.PS3.B1</td>
            <td>When the motion energy of an object changes, there is inevitably some other change in energy at the same time.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS3.B3</td>
            <td>Energy is spontaneously transferred out of hotter regions or objects and into colder ones.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>

        <tr>
            <td>HS.PS3.B1</td>
            <td>Conservation of energy means that the total change of energy in any system is always equal to the total energy transferred into or out of the system.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">s</td>
            <td class="text-center">s</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>

        <tr>
            <td>HS.PS3.B2</td>
            <td>Energy cannot be created or destroyed, but it can be transported from one place to another and transferred between systems.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
        </tr>

        <tr>
            <td>HS.PS3.B4</td>
            <td>The availability of energy limits what can occur in any system.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
        </tr>
        <tr>
            <td>MS.PS3.C1</td>
            <td>When two objects interact, each one exerts a force on the other that can cause energy to be transferred to or from the object.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>HS.PS3.C1</td>
            <td>When two objects interacting through a field change relative position, the energy stored in the field is changed.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>HS.PS3.D2</td>
            <td>Although energy cannot be destroyed, it can be converted to less useful forms—for example, to thermal energy in the surrounding environment.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>

        <tr>
            <td colspan="2">
                <em>
                    <strong>PS4: Waves</strong>
                </em>
            </td>
            <td>
                <strong>M</strong>
            </td>
            <td>
                <strong>SE</strong>
            </td>
            <td>
                <strong>EM</strong>
            </td>
            <td>
                <strong>PEF</strong>
            </td>
            <td>
                <strong>FM</strong>
            </td>
            <td>
                <strong>CF</strong>
            </td>
            <td>
                <strong>WS</strong>
            </td>
            <td>
                <strong>L</strong>
            </td>
            <td>
                <strong>PC</strong>
            </td>
            <td>
                <strong>CR</strong>
            </td>
        </tr>
        <tr>
            <td>MS.PS4.A1</td>
            <td>A simple wave has a repeating pattern with a specific wavelength, frequency, and amplitude.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS4.A2</td>
            <td>A sound wave needs a medium through which it is transmitted.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>HS.PS4.A1</td>
            <td>The wavelength and frequency of a wave are related to one another by the speed of travel of the wave, which depends on the type of wave and the medium through which it is passing.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>4.PS4.B1</td>
            <td>An object can be seen when light reflected from its surface enters the eyes.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS4.B1</td>
            <td>When light shines on an object, it is reflected, absorbed, or transmitted through the object, depending on the object’s material and the frequency (color) of the light.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>MS.PS4.B2</td>
            <td>The path that light travels can be traced as straight lines, except at surfaces between different transparent materials (e.g., air and water, air and glass) where the light path bends.</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>HS.PS4.B2</td>
            <td>When light or longer wavelength electromagnetic radiation is absorbed in matter, it is generally converted into thermal energy (heat).</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center">x</td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        </tbody>
    </table>


    <p>*These codes identify each bullet point in the grade level NGSS DCIs. For example, MS.PS1.A3 means that this is under the first NGSS middle school DCI for PS1 (MS.PS1.A) and is the third bullet point there listed.</p>
    <p>
        <em>Unit key</em>
        :
        <strong>M</strong>
        : Developing a Model of Magnetism;
        <strong>SE</strong>
        : Developing a Model of Static Electricity;
        <strong>EM</strong>
        : Energy Model of Interactions;
        <strong>PEF</strong>
        : Potential Energy and Fields;
        <strong>FM</strong>
        : Force Model of Interactions;
        <strong>CF</strong>
        : Combinations of Forces;
        <strong>WS</strong>
        : Mechanical Waves and Sound;
        <strong>L</strong>
        : Light and Color;
        <strong>PC</strong>
        : Physical Changes;
        <strong>CR</strong>
        : Chemical Reactions.
    </p>
@stop
