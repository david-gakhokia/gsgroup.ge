@extends('frontend.layouts.app')

@section('title', __('Privacy Policy'))

@section('content')


    <!-- Section Started Heading -->
		<div class="section section-inner started-heading">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<!-- titles -->
						<div class="h-titles">
							<div class="h-title splitting-text-anim-2 scroll-animate" data-splitting="chars" data-animate="active">{{ __('Privacy Policy') }}</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Section Description -->
		<div class="section section-inner m-description">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 align-left col-lg-12">
						<div class="m-titles">
							<div class="m-title scrolla-element-anim-1 scroll-animate" data-animate="active">{{ $privacy_policy->title }}</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="description-text scrolla-element-anim-1 scroll-animate" data-animate="active">
							<p>{!! $privacy_policy->description !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>

@endsection


