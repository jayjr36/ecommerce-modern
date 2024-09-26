@extends('frontend.layouts.master')

@section('title','BreezeBuy || About Us')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">About Us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="about-content">
							@php
								$settings=DB::table('settings')->get();
							@endphp
							<h3>Welcome To <span>BreezeBuy</span></h3>
							{{-- <p>@foreach($settings as $data) {{$data->description}} @endforeach</p> --}}
							<section class="container my-5">
								<div class="text-center mb-4">
									<p class="lead">Your go-to destination for a seamless shopping experience.</p>
								</div>
							
								<div class="row">
									<div class="col-lg-6">
										<h2 class="h4">Our Story</h2>
										<p>BreezeBuy was founded to make online shopping simple and enjoyable. We provide a wide range of high-quality products at great prices, all in one place. From fashion to electronics, home essentials, and more, our platform offers everything you need with just a few clicks.</p>
									</div>
									<div class="col-lg-6">
										<h2 class="h4">Why Choose Us?</h2>
										<ul class="list-unstyled">
											<li><strong>Wide Selection:</strong> Thousands of products across diverse categories.</li>
											<li><strong>Top Quality:</strong> Products sourced from trusted brands and vendors.</li>
											<li><strong>Affordable Prices:</strong> Great value without breaking the bank.</li>
											<li><strong>Fast & Secure Delivery:</strong> Quick, reliable shipping to your door.</li>
											<li><strong>Friendly Support:</strong> Customer service ready to assist whenever you need.</li>
										</ul>
									</div>
								</div>
							
								<div class="mt-5">
									<h2 class="h4">Join Our Community</h2>
									<p>Follow us on social media for exclusive deals, new product launches, and special offers. Thank you for shopping with BreezeBuy, where your satisfaction is our priority!</p>
								</div>
							</section>
							<div class="button">
								{{-- <a href="{{route('blog')}}" class="btn">Our Blog</a> --}}
								<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
							</div>
						</div>
					</div>
					{{-- <div class="col-lg-3 col-12">
						<div class="about-img overlay">
							<div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div>
							<img src="@foreach($settings as $data) {{$data->photo}} @endforeach" alt="@foreach($settings as $data) {{$data->photo}} @endforeach">
						</div>
					</div> --}}
				</div>
			</div>
	</section>
	<!-- End About Us -->


	<!-- Start Shop Services Area -->
	{{-- <section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

	@include('frontend.layouts.newsletter') --}}
@endsection
