<div class="card">
    <a href="#"
       class="list-group-item sublink collapsed"
       data-toggle="collapse"
       data-target="#teacherAndLearningDescriptions"
       data-parent="#main-sidebar-menu">
        <span>Teaching and Learning Materials Descriptions</span>
    </a>
    <div id="teacherAndLearningDescriptions"
         class="sublinks collapse{{ (Request::is('lecture-style-class/teaching-and-learning/*') ? ' show' : '') }}">
    
        <a class="list-group-item {{ (Request::is('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') }}">
            <span>General Lessons and Extensions</span>
        </a>
        
        <a class="list-group-item {{ (Request::is('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') }}">
            <span>Magnetism and Static Electricity Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-energy-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-energy-module') }}">
            <span>Interactions and Energy Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-forces-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-forces-module') }}">
            <span>Interactions and Forces Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') }}">
            <span>Waves, Sounds and Light Module
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/matter-and-interactions-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/matter-and-interactions-module') }}">
            <span>Matter and Interactions Module
            </span>
        </a>
    </div>
</div>