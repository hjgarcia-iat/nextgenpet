@if(Session::has('success') || Session::has('status') || Session::has('error'))

    <div class="d-flex justify-content-center">

        @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible w-100"
                 role="alert">
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{ session('success') }}</strong>
            </div>
        @endif

        @if (session('status'))
            <div class="alert alert-success alert-dismissible w-100"
                 role="alert">
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{ session('status') }}</strong>
            </div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-danger alert-dismissible w-100"
                 role="alert">
                <button type="button"
                        class="close"
                        data-dismiss="alert"
                        aria-label="Close">
                    <i class="fa fa-times"></i>
                </button>
                <strong>{{ session('error') }}</strong>
            </div>
        @endif

    </div>

@endif