@extends('layouts.app')

@section('content')
	<div class="hero-wrapper">
		<div class="container">
			<div class="hero-banner">
				<div class="main-name">{{ config('body.main_name') }}</div>
				<h3>{{ config('body.profession') }}</h3>
			</div>
		</div>
	</div>
	<div class="container gallery">
		<div class="row">
			<div class="col-md-12">
				<div class="gallery-image">
					<img height=170 src="{{ asset('images/photo.png')}}" alt=""/>
				</div>
				<div class="gallery-btn-wrapper">
					<a class="btn btn-primary awesome-btn" href="{{ route('gallery') }}">VISIT MY GALLERY</a>
				</div>
			</div>

		</div>
	</div>
	<div class="intro-wrapper">
	</div>
	<div class="container">
		<div class="intro">
			<p>{{ config('body.personal_description') }}</p>
		</div>
	</div>
	<div class="contact-wrapper">

	</div>
	<div class="container">
		<div class="contact">
			<div class="status-messages">
				@if(Session::has('error'))
					{{ Session::get('error') }}
				@elseif(Session::has('success'))
					{{ Session::get('success') }}
				@endif
			</div>
			<p>{{ config('body.get_in_touch') }}</p>
			<form action="{{ route('message') }}" method="post">
				{{csrf_field()}}
				<div class="form-group">
					<p>Email address *</p>
					<input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
						   required>
				</div>
				<div class="form-group">
					<p>Message *</p>
					<textarea name="message" class="form-control" id="" cols="30" rows="5" required></textarea>
				</div>
				<button type="submit" class="btn btn-default awesome-btn">SEND</button>
			</form>
		</div>
	</div>
@endsection