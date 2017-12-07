<section class="page-title">
	<div class="container">
		<div class="row">
			<div class="col-md-12 d-md-flex flex-md-row align-items-md-center">
				<h2 class="mb-md-0">@yield('pageTitle')</h2>
				@if(auth()->check())
				<div class="ml-md-auto">
					<p class="text-muted mb-0">
						<small>Logged in as:
							<a href="{{ route('my-account') }}">{{ auth()->user()->name }}</a>
						</small>
					</p>
				</div>
				@endif
			</div>
		</div>
	</div>
</section>