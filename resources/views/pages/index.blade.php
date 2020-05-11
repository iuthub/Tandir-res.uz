@extends('layouts.pageLayout')
@section('content')
 <title>Tandir | Home</title>
</head>
<body class="bg-image">
	<!-- HEADER NAVBAR -->
	<nav class="navbar navbar-expand-md">
		<div class="container">
			<!-- BRAND -->
			<a href="{{ route('index') }}" class="navbar-brand">
				<span><img src="{{asset('img/logo-tandir.png')}}" style="height: 1.8em"></span>	<!-- FIXED LOGO SIZE LEFT AS INLINE STYLE -->
				<span><img src="{{asset('img/tandir.png')}}" style="height: 1.6em"></span>		<!-- FIXED LOGO SIZE LEFT AS INLINE STYLE -->
			</a>
			<div class="ml-auto">
				<!-- SIGN UP BUTTON FOR MD SCREEN -->

				<!-- MENU ICON FOR <768 SCREEN SIZE -->
				<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-list">
					<svg height="1em" viewBox="0 -53 384 384" fill="#fff" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
				</button>
			</div>
			<!-- NAVIGATION BAR -->
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
								<a href="{{route('service')}}" class="btn btn-custom btn-hero">Order now</a>
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
				<div class="carousel-item" style="background-image: url({{asset('img/home-3.jpg')}})">
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
	<section id="about" class="site-section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade">
					<img src="{{asset('img/chef.jpg')}}" alt="Image" class="img-fluid rounded">
				</div>
				<div class="col-md-6 order-md-1" data-aos="fade">
					<div class="pb-1 mb-4">
						<h2 class="h1">Our Restaurant</h2>
					</div>
					<p>It’s easy to see you’ve arrived at restaurant National Food, as the restaurant is found just opposite the city’s circus. Most telling, however, is a group of women in white overalls stirring impressive quantities of food in huge cauldrons called kazan, right outside the restaurant, something that only happens at National Food. The staff speaks poor English, which makes it a bit difficult for non-locals to understand what is going on exactly: non-local visitors will inevitably take a peek at the cauldrons and order without having a clear idea of what they’re actually getting.</p>
					<p class="mb-5">Two things are sure: one is that it has meat in it; and the other is that it’s delicious. Chaotic, folkloristic, fun, satisfying and cheap – no-one visiting Tashkent should skip a stop at National Food for a taste of local fare.</p>
					<div class="row">
						<div class="col-md-12 mb-md-5 mb-0 col-lg-6">
							<div class="mb-3 mr-4">
								<svg height="70px" viewBox="0 0 128 128" width="70px" fill="#db9a64" xmlns="http://www.w3.org/2000/svg" data-name="Layer 2"><path d="m127.9 97.754-8.524-23.961v-44.134a1.75 1.75 0 0 0 -1.75-1.75 9.428 9.428 0 0 0 -9.417 9.416v27.353h-21.709a1.75 1.75 0 0 0 -1.75 1.75v31.913a1.75 1.75 0 0 0 1.75 1.75h7.667a1.75 1.75 0 0 0 1.75-1.75v-22.5h12.807l8.211 23.083a1.75 1.75 0 0 0 1.648 1.163h7.667a1.75 1.75 0 0 0 1.649-2.337zm-8.081-1.163-8.211-23.083a1.75 1.75 0 0 0 -1.649-1.163h-15.792a1.749 1.749 0 0 0 -1.75 1.75v22.5h-4.167v-28.417h21.708a1.749 1.749 0 0 0 1.75-1.75v-29.1a5.927 5.927 0 0 1 4.167-5.652v42.424a1.754 1.754 0 0 0 .1.587l7.794 21.909z"/><path d="m41.5 64.678h-21.708v-27.353a9.428 9.428 0 0 0 -9.417-9.416 1.75 1.75 0 0 0 -1.75 1.75v44.134l-8.525 23.961a1.75 1.75 0 0 0 1.649 2.337h7.668a1.75 1.75 0 0 0 1.648-1.163l8.211-23.083h12.807v22.5a1.75 1.75 0 0 0 1.75 1.75h7.667a1.75 1.75 0 0 0 1.75-1.75v-31.917a1.75 1.75 0 0 0 -1.75-1.75zm-1.75 31.913h-4.167v-22.491a1.749 1.749 0 0 0 -1.75-1.75h-15.791a1.75 1.75 0 0 0 -1.649 1.163l-8.211 23.078h-3.952l7.794-21.909a1.754 1.754 0 0 0 .1-.587v-42.422a5.927 5.927 0 0 1 4.167 5.652v29.1a1.749 1.749 0 0 0 1.75 1.75h21.709z"/><path d="m74.167 88.925h-4.584v-19.846l11.274-13.385h9.476a5.579 5.579 0 0 0 .838-11.1l-9.537-12.331a1.748 1.748 0 0 0 -1.384-.68h-32.5a1.793 1.793 0 0 0 -1.546.931l-6.362 12.014h-2.175a5.583 5.583 0 1 0 0 11.166h9.476l11.274 13.385v19.846h-4.584a5.583 5.583 0 0 0 0 11.166h20.334a5.583 5.583 0 0 0 0-11.166zm-28.9-40.9h37.471l-3.509 4.175-.525.622-14.704 17.453zm45.071 4.166h-6.533l.506-.6 3-3.565h3.019a2.083 2.083 0 1 1 0 4.166zm-10.947-17.108 7.3 9.445h-28.074l-7.3-9.445zm-31.365 1.469 6.167 7.976h-10.393zm-10.359 15.642a2.083 2.083 0 1 1 0-4.166h3.019l3.514 4.166zm24.25 21.041.745.884a1.748 1.748 0 0 0 2.676 0l.745-.884v15.69h-4.166zm12.25 23.356h-20.334a2.083 2.083 0 0 1 0-4.166h20.334a2.083 2.083 0 0 1 0 4.166z"/><path d="m61.5 41.556h14.583a1.75 1.75 0 0 0 0-3.5h-14.583a1.75 1.75 0 0 0 0 3.5z"/></svg>
							</div>
							<div>
								<h3>Reservation</h3>
								<p>Reservation is regarded as the prior aim. A table reservation is an arrangement made in advance to have a table available at a restaurant. While most restaurants in the vast majority of the world do not require a reservation.</p>
							</div>
						</div>
						<div class="col-md-12 mb-md-5 mb-0 col-lg-6">
							<div class="mb-3 mr-4">
								<svg height="70px" width="70px" fill="#db9a64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"><g><g><path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z"/></g></g><g><g><path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z"/></g></g><g><g><path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z"/></g></g><g><g><path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z"/></g></g><g><g><path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z"/></g></g><g><g><path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96C281.901,181.576,281.901,176.501,278.771,173.37z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
							</div>
							<div>
								<h3>Delivery</h3>
								<p>As in any industry, technology can be embraced to improve business practices. Food Delivery is no different. Decision makers in this sector have new solutions that allow them to be more efficient at delivering on time.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="gallery">
		<figure>
			<img src="{{asset('img/gallery/1.jpg')}}" alt=""/>
		</figure>
		<figure class="featured">
			<img src="{{asset('img/gallery/2.jpg')}}" alt=""/>
		</figure>
		<figure class="featured">
			<img src="{{asset('img/gallery/3.jpg')}}" alt=""/>
		</figure>
		<figure>
			<img src="{{asset('img/gallery/4.jpg')}}" alt=""/>
		</figure>
		<figure class="featured">
			<img src="{{asset('img/gallery/5.jpg')}}" alt=""/>
		</figure>
		<figure>
			<img src="{{asset('img/gallery/6.jpg')}}" alt=""/>
		</figure>
		<figure>
			<img src="{{asset('img/gallery/7.jpg')}}" alt=""/>
		</figure>
	</section>
	<section id="chef">
		<div class="container">
			<h2 class="h1 text-center">Meet the Chefs</h2>
			<div class="row">
				<div class="col-md-5 m-auto text-center">
					<div><img src="{{asset('img/chef/salt-bae.png')}}"/></div>
					<h3>Nusret Gökçe</h3>
					<p>Master Chef</p>
					<div class="px-5">
						<p>Gökçe became more widely known through a series of viral Internet videos and memes from January 2017 which show him "suavely" cutting meat and sprinkling salt.</p>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
					</div>
				</div>
				<div class="col-md-5 m-auto mt-5 mt-md-0 text-center">
					<div><img src="{{asset('img/chef/burak.png')}}"/></div>
					<h3>Burak Özdemir</h3>
					<p>Master Chef</p>
					<div class="px-5">
						<p>Burak Özdemir, nicknamed CZNBurak Turkish and Lebanese recipes, generally while gazing directly into the camera with a smile, made him an Internet celebrity</p>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts</p>
					</div>
				</div>
			</div>
		</div>
	</section>
       @endsection
