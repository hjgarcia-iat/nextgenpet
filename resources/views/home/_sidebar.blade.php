<div id="menu">
    <div class="panel list-group">
        <a href="{{ url('/') }}"
           class="list-group-item{{ (Request::is('/') or Request::is('about/flexibility') or Request::is('about/research-based')) ? ' active' : '' }}">
            About
        </a>
        <a href="{{ url('about/module-and-units') }}"
           class="list-group-item{{ (Request::is('about/module-and-units')) ? ' active' : '' }}">Modules &amp; Units
        </a>
        
        <a href="" class="list-group-item">Extensions (Homework)
        </a>
        <a href="" class="list-group-item">Teaching &amp; Learning
        </a>
        <a href="" class="list-group-item">Engineering Design Activities
        </a>
        <a href=""
           class="list-group-item">NGSS &amp; Next Gen PET
        </a>
        <a href=""
           class="list-group-item">Implementation Versions
        </a>
        <a class="list-group-item">Workshops for Faculties &amp; PDF Providers
        </a>
        <a href=""
           class="list-group-item">About the Development Staff
        </a>
    </div>
</div>