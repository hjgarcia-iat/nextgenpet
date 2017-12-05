@if(Session::has('success') || Session::has('status') || Session::has('error'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible"
                         role="alert">
                        <button type="button"
                                class="close"
                                data-dismiss="alert"
                                aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('status'))
                    <div class="alert alert-success alert-dismissible"
                         role="alert">
                        <button type="button"
                                class="close"
                                data-dismiss="alert"
                                aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                        {{ session('status') }}
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
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endif