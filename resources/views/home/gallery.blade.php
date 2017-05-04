@extends('layouts.app')

@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('css/gridgallery/demo.css')}}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/gridgallery/component.css')}}"/>
	<script src="{{asset('js/gridgallery/modernizr.custom.js')}}"></script>
@endsection

@section('content')
	<div class="gallery-wrapper">
		<div class="container">
			<div class="hero-banner">
				<div class="main-name gallery-banner-text">{{ config('body.main_name') }}</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div id="grid-gallery" class="grid-gallery">
			<section class="grid-wrap">
				<ul class="grid">
					<li>
						<figure>
							<img src="{{asset('images/1.jpg')}}" alt="img01"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{asset('images/2.jpg')}}" alt="img02"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{asset('images/3.jpg')}}" alt="img03"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{asset('images/4.jpg')}}" alt="img04"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/5.jpg')}}" alt="img05"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{asset('images/6.jpg')}}" alt="img06"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{asset('images/7.jpg')}}" alt="img01"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{asset('images/8.jpg')}}" alt="img02"/>
						</figure>
					</li>
				</ul>
			</section>
			<section class="slideshow">
				<ul>
					<li>
						<figure>
							<img src="{{asset('images/1.jpg')}}" alt="img01"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/2.jpg')}}" alt="img02"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/3.jpg')}}" alt="img03"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/4.jpg')}}" alt="img04"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/5.jpg')}}" alt="img05"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/6.jpg')}}" alt="img06"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/7.jpg')}}" alt="img01"/>
						</figure>
					</li>
					<li>
						<figure>
							<img src="{{ asset('images/8.jpg')}}" alt="img02"/>
						</figure>
					</li>
				</ul>
				<nav>
					<span class="icon nav-prev"></span>
					<span class="icon nav-next"></span>
					<span class="icon nav-close"></span>
				</nav>
			</section>
		</div>
	</div>
@endsection

@section('script')
	<script src="{{('js/gridgallery/imagesloaded.pkgd.min.js')}}"></script>
	<script src="{{asset('js/gridgallery/masonry.pkgd.min.js')}}"></script>
	<script src="{{asset('js/gridgallery/classie.js')}}"></script>
	<script src="{{asset('js/gridgallery/cbpGridGallery.js')}}"></script>
	<script>
		new CBPGridGallery(document.getElementById('grid-gallery'));
	</script>
@endsection