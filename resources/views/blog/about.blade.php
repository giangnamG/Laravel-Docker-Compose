
@extends('blog.includes.app')

@section('content')
	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>About Us</h2>
						<ul>
							<li><a href="index">Home</a></li>
							<li>About Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start About Section -->
    @include('blog.includes.statics.AboutMe')
	<!-- End About Section -->

	<!-- Start Counter Section -->
    @include('blog.includes.CounterSection')
	<!-- End Counter Section -->

	<!-- Start Team Section -->
    @include('blog.includes.statics.TeamSection')
	<!-- End Team Section -->

	<!-- Start Testimonial Section -->
    @include('blog.includes.TestimonialSection')
	<!-- End Testimonial Section -->
@endsection
