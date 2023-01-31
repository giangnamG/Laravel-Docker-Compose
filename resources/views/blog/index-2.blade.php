@extends('blog.includes.app')

@section('content')

    <!-- Start Slider Are -->
    @extends('blog.includes.Slider')
    <!-- End Slider Are -->

    <!-- Start About Section -->
    @include('blog.includes.statics.AboutMe')
    <!-- End About Section -->

    <!-- Start Services Section -->
    @include('blog.includes.statics.ServicesSection')
    <!-- End Services Section -->

    <!-- Start Project Section -->
    @include('blog.includes.ProjectSection')
    <!-- End Project Section -->

    <!-- Start Counter Section -->
    @include('blog.includes.CounterSection')
    <!-- End Counter Section -->

    <!-- Start Overview Section -->
    @include('blog.includes.statics.OverviewSection')
    <!-- End Overview Section -->

    <!-- Start Team Section -->
    @include('blog.includes.statics.TeamSection')
    <!-- End Team Section -->

    <!-- Start Testimonial Section -->
    @include('blog.includes.TestimonialSection')
    <!-- End Testimonial Section -->

    <!-- Start Blog Section -->
    @include('blog.includes.BlogSection')
    <!-- End Blog Section -->

@endsection
