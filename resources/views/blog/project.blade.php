
@extends('blog.includes.app')
@section('content')
	<!-- Start Page Title Area -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<h2>Projects</h2>
						<ul>
							<li><a href="index">Home</a>
							</li>
							<li>Projects</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Area -->

	<!-- Start Project Section -->
    @include('blog.includes.ProjectSection')
    <!-- End Project Section -->
@endsection
