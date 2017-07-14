<div class="card">
    <a href="#"
       class="list-group-item sublink collapsed"
       data-toggle="collapse"
       data-target="#teacherAndLearningDescriptions"
       data-parent="#main-sidebar-menu">
        <span>Teaching &amp; Learning Materials</span>
    </a>
    <div id="teacherAndLearningDescriptions"
         class="sublinks collapse{{ (Request::is('lecture-style-class/teaching-and-learning/*') ? ' show' : '') }}">
    
        <a class="list-group-item {{ (Request::is('lecture-style-class/teaching-and-learning/table-of-contents') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/table-of-contents') }}">
            <span>Table of Contents with Time Estimates</span>
        </a>
        
        <a class="list-group-item {{ (Request::is('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/general-lessons-and-extensions') }}">
            <span>General Lessons and Extensions</span>
        </a>
        
        <a class="list-group-item {{ (Request::is('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/magnetism-and-static-electricity-module') }}">
            <span>Module MSE Cluster
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-energy-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-energy-module') }}">
            <span>Module IE Cluster
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/interactions-and-forces-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/interactions-and-forces-module') }}">
            <span>Module IF Cluster
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/waves-sound-and-light-module') }}">
            <span>Module WSL Cluster
            </span>
        </a>
        <a class="list-group-item{{ (Request::is('lecture-style-class/teaching-and-learning/matter-and-interactions-module') ? ' active' : '') }}"
           href="{{ url('lecture-style-class/teaching-and-learning/matter-and-interactions-module') }}">
            <span>Module MI Cluster
            </span>
        </a>
    </div>
</div>