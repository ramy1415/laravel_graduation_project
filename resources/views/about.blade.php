
	@extends('layouts.app')
	@section('styles')
		
	
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/Tcss/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Tcss/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/Tcss/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Tcss/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Tcss/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('css/Tcss/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/Tcss/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/Tcss/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Tcss/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('css/Tcss/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Tcss/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/Tcss/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fonts/font/flaticon.css') }}"/>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">


	@endsection

@section('content')
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-bottom:15px;">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="offer-deal text-center px-2 px-lg-5">
					<div class="img" style="background-image: url(images/designer1.jpg);"></div>
					<div class="text mt-4">
						<h3 class="mb-4">Upload Inspirations</h3>
						<p class="mb-5">designers upload their designs, and track if their design be sold to a company or not, finally they will gain confidence and money</p>
						{{-- <p><a href="#" class="btn btn-white px-4 py-3"> Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="offer-deal active text-center px-2 px-lg-5">
					<div class="img" style="background-image: url(images/user.jpg);"></div>
					<div class="text mt-4">
						<h3 class="mb-4">Vote for liked designs</h3>
						<p class="mb-5">Our beloved users can vote on their liked designs, follow their favorite designers, and track the manufacturing process.</p>
						{{-- <p><a href="#" class="btn btn-white px-4 py-3"> Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p> --}}
					</div>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="offer-deal text-center px-2 px-lg-5">
					<div class="img" style="background-image: url(images/fabrication2.jpg);"></div>
					<div class="text mt-4">
						<h3 class="mb-4">Buy Designs &amp; Make It!</h3>
						<p class="mb-5">Companies can buy designs, convert it into real amazing product.</p>
						{{-- <p><a href="#" class="btn btn-white px-4 py-3"> Book A Treatment <span class="ion-ios-arrow-round-forward"></span></a></p> --}}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-section-services bg-light"style="margin-bottom:15px;">
<h2 style="color:rgb(250, 18, 107);margin-bottom:75px;text-align:center;margin-left:80px;font-weight:600;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:24px;">DESIGNER</h2>
<div class="container-fluid px-md-5">
	<div class="row">
		<div class="col-md-6 col-lg-3">
			<div class="services text-center ftco-animate">
				<div class="icon d-flex justify-content-center align-items-center">
					<span class="flaticon-id-card"></span>
				</div>
				<div class="text mt-3">
					<h3>Be From Our Family</h3>
					<p>Register with us, let users know who you are and fill in your profile data </p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-think"></span>
					</div>
					<div class="text mt-3">
						<h3>Upload Your Design</h3>
						<p>you decide to make an inspire design into real, so lets upload it</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-navigation"></span>
					</div>
					<div class="text mt-3">
						<h3>Track Your Design</h3>
						<p>track if your design won in vote or a company bought it</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-money-bag"></span>
					</div>
					<div class="text mt-3">
						<h3>Enjoy Your Money :)</h3>
						<p>Now you can check your bank acount</p>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
<section class="ftco-section ftco-section-services bg-light "style="margin-bottom:15px;">
<h2 style="color:rgb(250, 18, 107);margin-bottom:75px;text-align:center;margin-left:80px;font-weight:600;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:24px;">USER</h2>
<div class="container-fluid px-md-5">
	<div class="row">
		<div class="col-md-6 col-lg-3" >
			<div class="services text-center ftco-animate">
				<div class="icon d-flex justify-content-center align-items-center">
					<span class="flaticon-id-card"></span>
				</div>
				<div class="text mt-3">
					<h3>Register & Enjoy!</h3>
					<p>sign in to take all privileges enjoy your journey </p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-love-message"></span>
					</div>
					<div class="text mt-3">
						<h3>Vote On Your Favourit Designs</h3>
						<p>if you like a design and wish it to be a real product, lets vote! </p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-navigation"></span>
					</div>
					<div class="text mt-3">
						<h3>Company Made Your Beloved Design!</h3>
						<p>track if a company convered your favourite designs into real products</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-shopping-cart"></span>
					</div>
					<div class="text mt-3">
						<h3>Enjoy Shoping</h3>
						<p>Now you can buy products that fit your taste</p>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
<section class="ftco-section ftco-section-services bg-light">
<h2 style="color:rgb(250, 18, 107);margin-bottom:75px;text-align:center;margin-left:80px;font-weight:600;font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;font-size:24px;">COMPANY</h2>
<div class="container-fluid px-md-5">
	<div class="row">
		<div class="col-md-6 col-lg-3">
			<div class="services text-center ftco-animate">
				<div class="icon d-flex justify-content-center align-items-center">
					<span class="flaticon-id-card"></span>
				</div>
				<div class="text mt-3">
					<h3>Registeration</h3>
					<p>Register with us, to be able to deal with us and buy designs</p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3">
			<div class="services text-center ftco-animate">
				<div class="icon d-flex justify-content-center align-items-center">
					<span class="flaticon-navigation"></span>
				</div>
				<div class="text mt-3">
					<h3>Track Designs Votes</h3>
					<p>Track what designs our clients prefer most</p>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-buy"></span>
					</div>
					<div class="text mt-3">
						<h3>Pick & Buy Designs</h3>
						<p>Add chosen designs to your cart, then buy them easily with paypal or strips account</p>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="services text-center ftco-animate">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-vest"></span>
					</div>
					<div class="text mt-3">
						<h3>Advertise Products</h3>
						<p>Upload the products, and let our customers buy them </p>
					</div>
				</div>
			</div>
		</div>
</div>
</section>
@endsection
  @push('scripts')
	<script src="{{ asset('js/templatejs/jquery.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/jquery-migrate-3.0.1.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/popper.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/jquery.easing.1.3.js') }}"></script>
	<script src="{{ asset('js/templatejs/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/jquery.stellar.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/aos.js') }}"></script>
	<script src="{{ asset('js/templatejs/jquery.animateNumber.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/bootstrap-datepicker.js') }}"></script>
	<script src="{{ asset('js/templatejs/jquery.timepicker.min.js') }}"></script>
	<script src="{{ asset('js/templatejs/scrollax.min.js') }}"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="{{ asset('js/templatejs/google-map.js') }}"></script>
	<script src="{{ asset('js/templatejs/main.js') }}"></script>
  @endpush

