<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('body.main_name') }}</title>
	<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ asset('css/custom/style.css')}}">
	<link rel="stylesheet" href="{{  asset('css/vendor/font-awesome.min.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
	<script src="{{ asset('js/vendor/jquery-2.2.3.min.js')}}"></script>

	@yield('style')
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('home') }}">
				<img class="brand-img" height=60 src="{{ asset('images/logo.png')}}" alt="{{ config('body.main_name') }}"/>
			</a>
		</div>
	</div>
</nav>
@yield('content')
<div class="footer-wrapper">
	<ul class="social-links text-center">
		<li><a href="https://twitter.com" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
		<li><a href="http://www.facebook.com/roshny.adhikary" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
		</li>
		<li><a href="https://www.instagram.com/_nittygrittylight" target="_blank"><i class="fa fa-instagram
			fa-2x"></i></a>
		</li>
	</ul>
	<div class="copyright">
		<a href="{{ route('home') }}"><i class="fa fa-copyright fa-lg"></i> {{ config('body.main_name') }} 2017</a>
	</div>
</div>
<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
@yield('script')
</body>
</html>
