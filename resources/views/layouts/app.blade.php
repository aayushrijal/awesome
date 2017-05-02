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

</head>
<body>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('images/logo.png')}}" alt=""/></a>
		</div>
	</div>
</nav>
@yield('content')
<script src="{{ asset('js/vendor/jquery-2.2.3.min.js')}}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js')}}"></script>
@yield('script')
</body>
</html>
