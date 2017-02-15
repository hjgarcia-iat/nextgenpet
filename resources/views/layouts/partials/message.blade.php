@if(Session::has('success'))
    
    <div class="alert alert-success alert-dismissible"
         role="alert">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
            <i class="fa fa-times"></i>
        </button>
        <strong>Success!</strong>
        {{ Session::get('success') }}
    </div>

@endif

@if(Session::has('error'))
    
    <div class="alert alert-success alert-dismissible"
         role="alert">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
            <i class="fa fa-times"></i>
        </button>
        {{ Session::get('error') }}
    </div>

@endif

