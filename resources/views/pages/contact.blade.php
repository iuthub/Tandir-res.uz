<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/query.css')}}">
	<title>Contact Page</title>
	
	<style>
	body {
		color: white;
		padding-top: 53px;
		background-image: url("img/bg3.jpg");
		background-size: 100%;
		background}
	#map_canvas {
			width: 100%;
			height: 100%;
			margin-top: 0;
			padding-bottom: 0;
			}
	#map_canvas   { position: relative;}
	.form-row     { padding-bottom: 1%;}
	.form-control { border-radius: 0;  }
	</style>

</head>
<body>
	@if(session('message'))
		<div style="color:red !important;">{{session('message')}}</div>
	@endif
	<!-- HEADER NAVBAR -->
	<nav class="navbar navbar-expand-md">
		<div class="container">
			<!-- BRAND -->
			<a href="index.html" class="navbar-brand">
				<span><img src="{{asset('img/logo-tandir.png')}}" style="height: 1.8em"></span>	<!-- FIXED LOGO SIZE LEFT AS INLINE STYLE -->
				<span><img src="{{asset('img/tandir.png')}}" style="height: 1.6em"></span>		<!-- FIXED LOGO SIZE LEFT AS INLINE STYLE -->
			</a>
			<!-- MENU ICON FOR <768 SCREEN SIZE -->
			<button class="navbar-toggler" data-toggle="collapse" data-target="#nav-list">
			<svg height="1em" viewBox="0 -53 384 384" fill="#fff" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
			</button>
			<!-- NAVIGATION BAR -->
			<div id="nav-list" class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="#about" class="nav-link">About</a></li>
					<li class="nav-item"><a href="products.html" class="nav-link">Products</a></li>
					<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
				</ul>
				<button class="btn btn-custom d-md-block d-none">Order now</button>
			</div>
		</div>
	</nav>

	<!-- Main Container -->
	<div class="container-fluid" style="padding-bottom: 20px">
		<div class="row">
			
			<!-- Contact information -->
			<div class="col-md-8" style="padding-left: 7%; padding-right: 7%;">
			<div class="row">
				<div class="col">
					<h1 style="margin-top: 8%; margin-bottom: 8%">Contact</h1>
					<div class="row">
						<div class="col">
							<h5>Address</h5>
							<p>
								Inha University <br>
								Ziyolilar str 9 <br>Mirzo Ulugbek district <br> Tashkent <br>
							</p>
						</div>
						<div class="col">
							<h5>Get in touch</h5>
							<p>
								+998(71)289-9999 <br>
								+998(94)611-0660 <br>
								+998(97)777-1224
							</p>
						</div>
						<div class="col">
							<h5>Follow us</h5>
							<div class="row">
								<a href="https://github.com/iuthub/ip-group-project-techieland">
									<img src="img/github.svg" height="100px" width="100px">
								</a>
								
								<a href="https://www.instagram.com/p/B_tk_bhhYJiyXmnCqS9jn3baLpEe4aVNGCB0-A0/?igshid=1wy6rul54m8g6">
									<img src="img/instagram.svg" height="100px" width="100px">
								</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>
			
			<!-- Service mail -->
			<div class="row">
				<div class="col">
					<span>customeservice@tandir.uz</span>
				</div>
			</div>
			<form method="post" action="{{route('sendContactMessage')}}">
				@csrf
				<div class="row" style="padding-top: 7%">
					<div class="col">
						<form>
							<div class="form-row">
								<div class="col">
									<label >Full name</label>
									<input type="text" name="name" class="form-control" placeholder="Full name">
								</div>
								<div class="col">
									<label >Email address</label>
									<input type="email" name="email" class="form-control" placeholder="name@example.com">
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<label >Phone</label>
									<input type="text" name="phone_number" pattern="^(9989)[01345789]{1}[0-9]{7}$" class="form-control" placeholder="Phone">
								</div>
								<div class="col">
									<label >Order number</label>
									<input type="text" name="order_number" class="form-control" placeholder="Order number">
								</div>
							</div>
							<div class="form-row">
								<div class="col-6">
									<label>Company Name</label>
									<input type="text" name="company_name" class="form-control"  placeholder="Company name">
								</div>
							</div>
							
							<div class="form-row">
								<div class="col">
									<label>Your message</label>
									<textarea class="form-control" name="message" rows="3"></textarea>
								</div>
							</div>
							<div class="form-row">
								<div class="col">
									<button type="submit" class="btn btn-custom d-md-block d-none" style="margin-left: 0">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			</form>
			<!-- Form starts here -->
			

		<!-- Map -->
		<div class="col-md-4">
			<div id="map-canvas">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d23484.467704043367!2d69.34306656924217!3d41.34126695608796!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3772abeffc72e7b8!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQmNC90YXQsA!5e0!3m2!1sru!2s!4v1588639404790!5m2!1sru!2s" width="500" height="900" frameborder="0" style="border:0" allowfullscreen aria-hidden="true" tabindex="0"></iframe>
			</div>
		</div>


	</div>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</body>
</html>