<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.partials._page-header-meta') 
    @include('layouts.partials._page-header-styles')
</head>
<body>
	<div class="site-wrapper">
		<div class="site-canvas">
			<div class="site-menu">
				@include('layouts.partials._mobile_nav')
			</div>
			<div class="site-content">
				@include('layouts.partials._page-header')
				<div class="page-content-wrapper">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-6 push-md-3 well">
                                @yield('content')
                            </div>
						</div>
					</div>
				</div>
                @include('layouts.partials._page-footer')
			</div>
		</div>
	</div>
	@include('layouts.partials._page-footerscripts')
</body>

</html>