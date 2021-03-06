@extends('layouts.app')

@section('content')
	<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Our Companies</h4>
		</div>
	</div>
	<!-- Page info end -->


	<div class="container">
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 gutters-sm ">
			@forelse($companies as $company)
			<div class="col-3 mb-3 mt-2">
				<div class="card" style="height: 100%;">
				<img src="{{asset('images/dcover.jpeg')}}" alt="Cover" class="card-img-top">
				<div class="card-body text-center">
					<img src="{{ asset('storage/'.$company->image)}}" style="width:100px; height:100px; margin-top:-65px" alt="User" class="img-fluid img-thumbnail rounded-circle border-0 mb-3">
					<h5 class="card-title">{{$company->name}}</h5>
					<p class="text-secondary mb-1">{{$company->email}}</p>
					{{-- <p class="text-muted font-size-sm">Followers: <i style="color: crimson">{{$designer->likes}}</i></p> --}}
				</div>
				<div class="card-footer">
					<a href="{{ route('company.show',$company->id) }}" class="btn btn-light btn-sm bg-white has-icon btn-block" type="button">See more</a>
				</div>
				</div>
			</div>
			@empty 
				<div class="alert alert-danger text-center" role="alert">
					No Companies Yet!
				</div>
			@endforelse 
		</div>

	</div>

@endsection