@extends('layouts.pageLayout')
@section('content')
<title>Tandir | Home</title>
</head>
<body>
	<!-- HEADER NAVBAR -->
	<nav class="navbar navbar-expand-md">
		<div class="container">
			<!-- BRAND -->
			<a href="index.html" class="navbar-brand">
				<span><img src="{{asset('img/logo-tandir.png')}}" style="height: 1.8em"></span>	<!-- FIXED LOGO SIZE LEFT AS INLINE STYLE -->
				<span><img src="{{asset('img/tandir.png')}}" style="height: 1.6em"></span>		<!-- FIXED LOGO SIZE LEFT AS INLINE STYLE -->
			</a>
			<div class="ml-auto">
				<!-- SIGN UP BUTTON FOR MD SCREEN -->
				<a href="#" class="btn btn-custom d-md-none">Sign up</a>
				<!-- MENU ICON FOR <768 SCREEN SIZE -->
				<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-list">
					<svg height="1em" viewBox="0 -53 384 384" fill="#fff" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
				</button>
			</div>
			@include('layouts.navbar')
		</div>
	</nav>

	<section id="home">
		<div id="banner" class="carousel slide" data-ride="carousel">
			<!-- CAROUSEL INDICATORS -->
			<ol class="carousel-indicators">
				<li data-target="#banner" data-slide-to="0" class="active"></li>
				<li data-target="#banner" data-slide-to="1"></li>
				<li data-target="#banner" data-slide-to="2"></li>
				<li data-target="#banner" data-slide-to="3"></li>
			</ol>
			<!-- CAROUSEL ITEMS -->
			<div class="carousel-inner">
				<div class="carousel-item active" style="background-image: url({{asset('img/home-1.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">There is no Love Sincerer Than the Love of Food!<br> Reserve Your Table.</h1>
								<a href="service.html#order" class="btn btn-custom btn-hero">Order now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item" style="background-image: url({{asset('img/home-2.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">Barbeque May not be the Road to Peace, But it's a Perfect Start!</h1>
								<a href="service.html#order" class="btn btn-custom btn-hero">Order now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item" 
				style="background-image: url({{asset('img/home-3.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">There's no better feeling than a Warm Pizza Box on Your Lap!<br> Take Your Slice!</h1>
								<a href="service.html#order" class="btn btn-custom btn-hero">Order now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item" style="background-image: url({{asset('img/home-4.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">It's a Sushi o'clock, Just Have a Taste and You Will Soy Into Our Shushi!</h1>
								<a href="service.html#order" class="btn btn-custom btn-hero">Order now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> 			
	</section>
    @endsection