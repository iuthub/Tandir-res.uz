@extends('layouts.pageLayout')
@section('content')
	<title>Tandir | Contact</title>
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
			@include('layouts.navbar')
		</div>
	</nav>
	<section id="contact-main" style="background-image: url('img/contact.jpg')">
		<div class="container">
			<div class="row">
				<div class="col-md-6 hero">
					<h1 class="display-4">We are always happy to hear you,<br> Contact us!</h1>
					<ol class="breadcrumb">
					    <li class="breadcrumb-item">
					        <a href="index.html">Home</a>
					    </li>
					    <li class="breadcrumb-item active">Contact</li>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-7 mb-3">



					<form action="{{route('sendContactMessage')}}" method="post" class="p-5 bg-white">
						@csrf
						<div class="row form-group">
							<div class="col-md-6 mb-3 mb-md-0">
								<label class="text-black" for="fname">First name</label>
								<input name="fname" id="fname" class="form-control" type="text" required/>
							</div>
							<div class="col-md-6">
								<label class="text-black" for="lname">Last name</label>
								<input name="lname" id="lname" class="form-control" type="text" required/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="email">Email</label>
								<input name="email" id="email" class="form-control" type="email" required/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="phone">Phone</label>
								<input name="phone" id="phone" class="form-control" type="phone" pattern="^(\+9989)[01345789]{1}[0-9]{7}$" required/>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<label class="text-black" for="message">Message</label>
								<textarea name="message" id="message" class="form-control" type="text" rows="7" placeholder="Write your notes or questions here..." required></textarea>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<input class="btn btn-custom" type="submit"/>
							</div>
						</div>
					</form>



				</div>
				<div class="col-md-5">
					<div class="address p-4 mb-3 bg-white">
						<h3 class="h5 mb-0">Address</h3>
						<p class="mb-4">9, Ziyolilar str., M.Ulugbek district, Tashkent city</p>
						<h3 class="h5 mb-0">Phone</h3>
						<p class="mb-4">
							<a href="tel:">+998 97-777-12-24</a><br>
							<a href="tel:">+998 97-777-12-24</a><br>
							<a href="tel:">+998 97-777-12-24</a><br>
						</p>
						<h3 class="h5 mb-0">Email Address</h3>
						<p class="mb-0">
							<a href="mailto:">Customer@tandir.uz</a>
						</p>
					</div>
					<div class="more-info p-4 mb-3 bg-white">
						<h3 class="h5 text-black mb-3">More Info</h3>
						<p>
							To get more information or to know more about our work, you can contacts us personally in the IUT campus by arranging a meeting in advance.
							<br>
							<br>
							To learn more about INHA University in Tashkent follow the link bellow.
						</p>
						<p><a href="https://inha.uz" target="_blank" class="btn btn-custom">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23484.467704043367!2d69.34306656924217!3d41.34126695608796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3772abeffc72e7b8!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQmNC90YXQsA!5e0!3m2!1sru!2s!4v1588639404790!5m2!1sru!2s" width="100%" height="600px" frameborder="0" allowfullscreen aria-hidden="true" tabindex="0"></iframe>
	@endsection
