@if(Session::has('success'))
    
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><i class="fa fa-times"></i></button>
        <strong>Success!</strong> Your message was sent! We will get back to your shortly.
    </div>
    
@endif

