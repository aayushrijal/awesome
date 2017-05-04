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
			<p>{{ config('body.get_in_touch') }}</p>
			<form>
				<div class="form-group">
					<p>Email address *</p>
					<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
				</div>
				<div class="form-group">
					<p>Message *</p>
					<textarea name="" class="form-control" id="" cols="30" rows="5"></textarea>
				</div>
				<button type="submit" class="btn btn-default awesome-btn">SEND</button>
			</form>
		</div>
	</div>
	<div class="footer-wrapper">
		<ul class="social-links text-center">
			<li><a href="https://twitter.com/rijalaayush" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
			<li><a href="http://www.facebook.com/aayushrij" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
			</li>
			<li><a href="https://www.instagram.com/aayushrij/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
			</li>
		</ul>
		<div class="copyright">
			<a href="{{ route('home') }}"><i class="fa fa-copyright fa-lg"></i> {{ config('body.main_name') }} 2017</a>
		</div>
	</div>
@endsection