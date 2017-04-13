@if(Session::has('success'))
    
    <div class="alert alert-success alert-dismissible"
         role="alert">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
            <i class="fa fa-times"></i>
        </button>
        Your message was sent! We will get back to your shortly.
    </div>

@endif

@if(Session::has('error'))
    
    <div class="alert alert-danger alert-dismissible"
         role="alert">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
            <i class="fa fa-times"></i>
        </button>
        Please see errors below
    </div>

@endif


