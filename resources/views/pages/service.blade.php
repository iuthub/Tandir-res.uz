@extends('layouts.pageLayout')
@section('content')
	<link rel="stylesheet" href="{{asset('css/pick.css')}}">
	<link rel="stylesheet" href="{{asset('css/additional.css')}}">
<title>Tandir | Service</title>
</head>
<body class="bg-image">
@if(session('success'))
<p style="position:absolute; z-index:12000; background-color: lightgreen; color:orange">{{session('success')}}</p>
@endif
<!-- ------------------------------------------------------------------------------------------>
	<form class="pickForm">
		<span class="cancelPickForm">&#10006;</span>
		<p>THIS is a Pick Form</p>
		<div class="info">
			<p>Product Name: <span class="p_name"></span> </p>
			<p class="hidden">Product Definition: <span class="p_definition"></span> </p>
			<p>Product Price: <span class="p_price"></span>$ </p>
			<p class="hidden">Available Portion: <span class="p_portion"></span> </p>
		</div>

		<p class="order">Order</p>
		<div class="f_group">
			<label for="orderedQuantity">Select quantity: </label>
			<input class="quantityInput" type="number" value="1" min="1" max="20" name="orderedQuantity">
		</div>
		<p class="priceSection">Total price: <span class="totalPrice"></span></p>
		<input type="submit" class="submitPickForm btn btn-custom mt-3" name="submitPickForm" value="Pick">
	</form>
	<div class="grayCover"></div>
<!-- -------------------------------------------------------------------------------------------->

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
	<section id="main">
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
				<div class="carousel-item active"
				style="background-image: url({{asset('img/service-1.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">There is no Love Sincerer Than the Love of Food!<br> Reserve Your Table.</h1>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Service</li>
                                </ol>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item"
				style="background-image: url({{asset('img/service-2.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">Salad Freshens Without Enfeebling and Fortifies Without Irritating!</h1>
								<ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Service</li>
                                </ol>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item"
				style="background-image: url({{asset('img/service-3.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">If Life Gives You Lemons, Make Some Kind of Fruity Juice or Just Order it Here!</h1>
								<ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Service</li>
                                </ol>
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item"
				style="background-image: url({{asset('img/service-4.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-md-6 hero">
								<h1 class="display-4">Breakfast is Everything. The Beginning, the First Thing. <br>Start it with us!</h1>
								<ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Service</li>
                                </ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="order">
		<div class="container">
			<div class="card mt-5 mb-5">
				<div class="card-body">
					<div class="row section-heading">
						<div class="col-md-8">
							<div class="display-4">Reservation</div>
							<div class="sub-heading">Reserve your table, and save your time!</div>
						</div>
					</div>
					<div class="row section-body">
						<div class="col-md-10">
							<form  class="reserveForm" method="post" action="{{route('reserve')}}">
								@csrf
								<div class="row mb-4">
										<div class="form-group col-md-4">
											<label for="name" class="label">Name</label>
											<input name="name" id="name" class="form-control" type="text" required minlength="3" />
										</div>
										<div class="form-group col-md-4">
											<label for="email" class="label">Email</label>
											<input name="email" id="email" class="form-control" type="email" required
											pattern="^[a-zA-Z0-9_+-]+@[a-zA-Z0-9_+-]+\.\w{2,5}$" />
										</div>
										<div class="form-group col-md-4">
											<label for="phone" class="label">Phone</label>
											<input name="phone" id="phone" class="form-control" type="text" pattern="^(\+9989)[01345789]{1}[0-9]{7}$" required/>
										</div>
										<div class="form-group col-md-4">
											<label for="people" class="label">Number of people</label>
											<select name="people" id="people" class="form-control" required>
													<option value="1">1 person</option>
													<option value="2">2 people</option>
													<option value="3">3 people</option>
													<option value="4">4 people</option>
													<option value="5">5 people</option>
													<option value="10">5+ people</option>
											</select>
										</div>
										<div class="form-group col-md-4">
											<label for="date" class="label">Date</label>
											<input name="date" id="date" class="form-control" type="text" data-provide="datepicker" autocomplete="off" required/>
										</div>
										<div class="form-group col-md-4">
											<label for="time" class="label">Time</label>
											<input name="time" value="12:00" id="time" class="form-control timepicker" type="text" autocomplete="off" required/>
										</div>
										<input type="text" class="hiddenAllSales"  name="allSales">
										<input type="number" class="hiddenTotalPrice" name="totalPrice">
										<!-- <input  name="submit" id="submit" class="btn btn-custom mt-3" type="submit"/> -->
									</form>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="delicious">
		<div class="py-5">
		    <div class="container">
		        <div class="row">
		            <div class="col-xl-12">
		                <div class="text-center mb-5">
		                    <h3 class="h1">Delicious Food For You</h3>
		                </div>
		            </div>
		        </div>
		        <div class="delicious">
			        <div class="tablist_menu">
			            <div class="row">
			                <div class="col-xl-12">
			                    <ul class="nav justify-content-center" id="pills-tab" role="tablist">
			                        <li class="nav-item meals">
			                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
			                                <div class="text-center">
			                                    <svg style="height: 3em; width: 3em;" viewBox="0 -21 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m490.152344 240.304688h-17.773438c-1.664062-27.023438-8.246094-53.105469-19.636718-77.625-1.738282-3.753907-6.191407-5.378907-9.945313-3.640626-3.753906 1.742188-5.382813 6.195313-3.640625 9.949219 10.464844 22.535157 16.570312 46.492188 18.210938 71.316407h-343.070313c-4.136719 0-7.488281 3.351562-7.488281 7.488281s3.351562 7.488281 7.488281 7.488281h375.855469c3.789062 0 6.867187 3.082031 6.867187 6.871094v9.140625c0 3.789062-3.078125 6.871093-6.867187 6.871093h-468.304688c-3.789062 0-6.867187-3.082031-6.867187-6.871093v-9.140625c0-3.789063 3.078125-6.871094 6.867187-6.871094h57.539063c4.136719 0 7.492187-3.351562 7.492187-7.488281s-3.355468-7.488281-7.492187-7.488281h-24.753907c3.300782-49.753907 24.636719-96.039063 60.597657-131.046876 34.65625-33.734374 79.4375-53.59375 127.296875-56.742187.027344 0 .054687.003906.082031 0 2.039063-.132813 4.054687-.234375 6.046875-.308594.398438-.011719.792969-.03125 1.191406-.042969.710938-.023437 1.417969-.039062 2.117188-.054687 1.34375-.023437 2.6875-.046875 4.035156-.046875 1.789062 0 3.578125.035156 5.363281.082031.527344.015625 1.050781.03125 1.582031.046875 1.375.046875 2.746094.117188 4.117188.191406.726562.039063 1.453125.078126 2.183594.125 61.488281 4.039063 118.058594 36.015626 153.261718 87.289063 2.339844 3.40625 7.003907 4.277344 10.414063 1.933594 3.410156-2.339844 4.277344-7.003907 1.933594-10.414063-34.640625-50.457031-88.558594-83.503906-148.152344-92.027344 3.734375-5.796874 5.832031-12.621093 5.832031-19.769531 0-4.070312-1.816406-11.574219-13.980468-16.050781-6.074219-2.234375-14.085938-3.46875-22.554688-3.46875-8.472656 0-16.484375 1.234375-22.558594 3.46875-12.164062 4.476562-13.976562 11.980469-13.976562 16.050781 0 7.128907 2.089844 13.941407 5.800781 19.726563-45.246094 6.402344-87.210937 26.886718-120.484375 59.277344-38.871094 37.839843-61.835938 87.949218-65.160156 141.777343h-17.773438c-12.046875.003907-21.847656 9.804688-21.847656 21.851563v9.140625c0 12.050781 9.800781 21.851562 21.847656 21.851562h80.683594c-4.027344 2.757813-7.886719 5.851563-11.5 9.285157l-.148438.140624c-.230468.214844-.449218.445313-.648437.691407l-35.558594 43.179687c-4.460937-2.832031-9.742187-3.863281-14.953125-2.863281-5.433594 1.039063-10.132812 4.132813-13.234375 8.710937l-13.984375 20.621094c-6.394531 9.433594-3.925781 22.320313 5.5 28.722656l95.691406 65.007813c3.46875 2.355469 7.476563 3.582031 11.582032 3.582031 1.304687 0 2.621094-.125 3.933594-.375 5.429687-1.039062 10.128906-4.132812 13.230468-8.710937l13.984375-20.621094c6.394531-9.433594 3.929688-22.320313-5.496093-28.722656l-.546876-.371094c6.660157-7.558594 15.539063-12.976563 25.199219-15.210937 20.355469-4.714844 44.308594-1.679688 60.554688 1.011718 20.097656 3.328125 41.207031 2.191406 61.046875-3.289062l27.578125-7.621094c18.371093-5.078125 35.277343-13.628906 50.253906-25.417969.113281-.089843.222656-.179687.332031-.277343l47.347656-41.933594c8.070313-6.175782 9.828126-16.871094 7.042969-25.539063h60.414063c12.046875 0 21.847656-9.800781 21.847656-21.847656v-9.144531c0-12.046875-9.800781-21.847656-21.847656-21.847656zm-234.152344-225.324219c12.613281 0 20.171875 3.121093 21.554688 4.855469-.101563 7.105468-3.695313 13.660156-9.542969 17.589843-1.472657-.078125-2.925781-.140625-4.375-.195312-.488281-.015625-.976563-.039063-1.464844-.050781-2.089844-.0625-4.152344-.09375-6.171875-.09375-1.433594 0-2.894531.019531-4.367188.050781-.710937.011719-1.425781.03125-2.140624.054687-.851563.027344-1.710938.054688-2.570313.089844-.980469.042969-1.960937.085938-2.9375.140625-5.847656-3.929687-9.4375-10.484375-9.539063-17.585937 1.382813-1.734376 8.941407-4.855469 21.554688-4.855469zm53.710938 281.777343c-.558594-1.265624-1.226563-2.46875-1.980469-3.613281h71.839843l-31.0625 20.558594-44.277343 12.808594-1.503907.035156c8.523438-7.105469 11.632813-19.238281 6.984376-29.789063zm-81.21875-3.613281-10.808594 2.253907-8.355469-2.253907zm-84.464844 138.964844-13.980469 20.621094c-.855469 1.265625-2.152344 2.117187-3.652344 2.40625-1.496093.285156-3.019531-.027344-4.28125-.886719l-95.691406-65.007812c-2.601563-1.765626-3.28125-5.320313-1.515625-7.921876l13.984375-20.625c.855469-1.261718 2.148437-2.117187 3.648437-2.402343.363282-.070313.726563-.105469 1.085938-.105469 1.132812 0 2.238281.339844 3.195312.992188l5.167969 3.507812c0 .003906.003907.003906.003907.003906l90.519531 61.492188c2.601562 1.765625 3.28125 5.324218 1.515625 7.925781zm269.476562-125.253906c-.179687.128906-.351562.269531-.519531.417969l-47.398437 41.984374c-13.363282 10.480469-28.441407 18.089844-44.8125 22.613282l-27.578126 7.621094c-17.757812 4.910156-36.640624 5.929687-54.605468 2.953124-17.507813-2.898437-43.429688-6.144531-66.386719-.828124-13.296875 3.078124-25.4375 10.71875-34.269531 21.34375l-70.792969-48.089844 34.359375-41.726563c12.996094-12.269531 29.476562-19.554687 45.257812-20h.304688c4.894531-.082031 10.074219 1.359375 15.554688 2.894531 1.101562.304688 2.199218.613282 3.300781.910157l49.59375 13.378906c1.136719.304687 2.328125.339844 3.480469.097656l64.953124-13.542969c2.945313-.609374 6.039063-.011718 8.488282 1.648438 1.582031 1.074219 2.816406 2.550781 3.570312 4.265625 2.226563 5.050781.128906 10.980469-4.847656 13.542969l-22.160156 11.734375c-3.066406 1.625-4.613282 5.140625-3.742188 8.5.875 3.363281 3.933594 5.652343 7.410156 5.605469l32.871094-.710938c.652344-.015625 1.296875-.113281 1.917969-.292969l46.316406-13.398437c.730469-.210938 1.421875-.53125 2.054688-.949219l46.726562-30.929687c3.921875-2.421876 9.140625-4.414063 11.917969-.316407 2.164062 3.1875 2.214844 8.925781-.964844 11.273438zm0 0"/></svg>
			                                    <h5>Meals</h5>
			                                </div>
			                            </a>
			                        </li>
			                        <li class="nav-item drinks">
			                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
			                                <div class="text-center">
			                                    <svg style="enable-background:new 0 0 511.988 511.988; height: 3em; width: 3em;" height="1em;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.988 511.988" xml:space="preserve"><g><g><path d="M394.655,202.654H95.988c-17.643,0-32,14.357-32,32v21.333c0,76.117,42.048,145.152,109.717,180.16c5.227,2.688,11.669,0.661,14.379-4.587c2.688-5.227,0.661-11.669-4.587-14.379c-60.544-31.317-98.176-93.077-98.176-161.195v-21.333c0-5.888,4.779-10.667,10.667-10.667h298.667c5.888,0,10.667,4.779,10.667,10.667v21.333c0,68.117-37.632,129.877-98.197,161.173c-5.248,2.709-7.275,9.152-4.587,14.379c1.899,3.669,5.632,5.781,9.493,5.781c1.664,0,3.328-0.384,4.885-1.195c67.691-34.987,109.739-104,109.739-180.139v-21.333C426.655,217.011,412.297,202.654,394.655,202.654z"/></g></g><g><g><path d="M489.865,422.558c-1.664-3.989-5.547-6.592-9.856-6.592H10.676c-4.309,0-8.192,2.603-9.856,6.592c-1.664,3.989-0.747,8.576,2.304,11.627l23.915,23.936c14.123,14.101,32.853,21.867,52.8,21.867h330.965c19.947,0,38.699-7.765,52.843-21.867l23.915-23.936C490.612,431.134,491.529,426.547,489.865,422.558z M448.543,443.038c-10.069,10.069-23.488,15.616-37.717,15.616H79.839c-14.229,0-27.648-5.547-37.717-15.616l-5.717-5.717H454.26L448.543,443.038z"/></g></g><g><g><path d="M491.359,253.022c-28.736-18.475-74.645,1.579-79.787,3.904c-5.355,2.453-7.744,8.768-5.291,14.144c2.453,5.376,8.747,7.744,14.144,5.291c10.283-4.672,43.264-15.744,59.392-5.355c7.275,4.672,10.837,13.739,10.837,27.648c0,42.709-86.144,68.523-119.403,74.88l-7.552,1.493c-5.781,1.131-9.536,6.741-8.405,12.523c1.003,5.077,5.461,8.597,10.453,8.597c0.683,0,1.365-0.064,2.069-0.213l7.488-1.472c5.589-1.067,136.683-26.773,136.683-95.808C511.988,277.193,505.034,261.854,491.359,253.022z"/></g></g><g><g><path d="M328.372,113.31c17.344-21.675,17.344-55.616,0-77.291c-3.691-4.608-10.368-5.376-14.997-1.664c-4.608,3.691-5.355,10.389-1.664,14.997c10.987,13.717,10.987,36.907-0.021,50.667c-17.365,21.675-17.365,55.616,0,77.291c2.112,2.645,5.205,4.011,8.341,4.011c2.325,0,4.693-0.768,6.656-2.347c4.608-3.691,5.355-10.411,1.664-14.997C317.343,150.259,317.343,127.07,328.372,113.31z"/></g></g><g><g><path d="M264.287,113.31c17.365-21.675,17.365-55.616,0-77.291c-3.669-4.608-10.389-5.355-14.997-1.664c-4.608,3.691-5.355,10.411-1.664,14.997c11.008,13.717,11.008,36.907-0.021,50.667c-17.344,21.675-17.344,55.616,0,77.291c2.112,2.645,5.205,4.011,8.341,4.011c2.325,0,4.672-0.768,6.656-2.347c4.608-3.691,5.355-10.389,1.664-14.997C253.279,150.259,253.279,127.07,264.287,113.31z"/></g></g><g><g><path d="M200.372,113.331c17.344-21.675,17.344-55.616,0-77.291c-3.669-4.608-10.368-5.376-14.997-1.664c-4.587,3.669-5.333,10.389-1.664,14.976c10.987,13.717,10.987,36.907-0.021,50.667c-17.365,21.675-17.365,55.616,0,77.291c2.112,2.645,5.205,4.011,8.341,4.011c2.325,0,4.693-0.768,6.656-2.325c4.608-3.691,5.355-10.411,1.664-14.997C189.343,150.259,189.343,127.091,200.372,113.331z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
			                                    <h5>Drinks</h5>
			                                </div>
			                            </a>
			                        </li>
			                        <li class="nav-item salads">
			                            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
			                                <div class="text-center">
												<svg style="enable-background:new 0 0 512.003 512.003; height: 3em; width: 3em;" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.003 512.003" xml:space="preserve"><g><g><path d="M492.638,416.168c-35.445-29.635-139.695-117.048-187.5-159.684c25.879-23.721,62.112-58.999,97.354-93.327c40.344-39.302,78.458-76.417,95.729-91c8.76-7.385,13.781-18.24,13.781-29.781c0-14.438-7.51-27.24-20.094-34.24c-12.521-6.958-27.26-6.615-39.438,0.948c-39.313,24.385-196.469,137.25-196.469,161.583c0,7.178-0.293,15.621-2.85,25.203c-11.751-20.152-18.483-38.615-18.483-46.536c0-15.177-51.573-64.615-153.292-146.958c-4.219-3.427-10.385-3.115-14.25,0.75l-64,64c-3.865,3.854-4.188,10.01-0.75,14.25c82.344,101.719,131.781,153.292,146.958,153.292c9.056,0,31.823,8.76,55.227,23.852C157.266,300.56,60.87,381.466,19.388,416.147C7.066,426.449,0.003,441.605,0.003,457.73c0,29.927,24.344,54.271,54.271,54.271c16.115,0,31.281-7.073,41.583-19.406c35.645-42.613,119.006-141.934,160.151-187.994c42.456,47.553,130.417,152.456,160.172,188.035c10.292,12.313,25.448,19.365,41.552,19.365c29.927,0,54.271-24.344,54.271-54.271C512.003,441.626,504.951,426.47,492.638,416.168z M277.336,172.543c11.219-17.521,121.354-104.99,186.385-145.333c5.5-3.385,12.167-3.573,17.813-0.438c5.719,3.188,9.135,9.021,9.135,15.604c0,5.24-2.26,10.146-6.208,13.479c-17.854,15.073-56.229,52.448-96.854,92.021c-35.809,34.887-72.602,70.699-98.298,94.167c-1.604-1.518-3.255-3.074-4.431-4.25c-6.327-6.327-12.008-13.227-17.279-20.24C276.351,199.191,277.309,183.556,277.336,172.543z M79.493,478.907c-6.24,7.479-15.438,11.76-25.219,11.76c-18.167,0-32.938-14.771-32.938-32.938c0-9.792,4.281-18.979,11.74-25.208c42.625-35.651,143.104-119.991,189.254-161.26c5.341,4.263,10.582,8.732,15.465,13.615c1.036,1.036,2.443,2.535,3.746,3.905C200.651,334.428,115.631,435.712,79.493,478.907z M457.732,490.668c-9.781,0-18.958-4.271-25.188-11.719c-45.26-54.125-153.365-182.854-179.667-209.156c-32.146-32.146-80.802-56.208-101.417-56.208c-0.104,0-0.219,0.01-0.323,0.01c-12.563-4.885-72.802-72.781-126.125-138.188l6.99-6.99l99.125,99.125c2.083,2.083,4.813,3.125,7.542,3.125c2.729,0,5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083L47.086,53.334l6.25-6.25l99.125,99.125c2.083,2.083,4.813,3.125,7.542,3.125s5.458-1.042,7.542-3.125c4.167-4.167,4.167-10.917,0-15.083L68.42,32.001l6.99-6.99c65.406,53.323,133.292,113.49,137.927,124.323c0,22.229,24.146,71.229,56.458,103.542c26.302,26.302,155.031,134.406,209.156,179.656c7.448,6.24,11.719,15.417,11.719,25.198C490.67,475.897,475.899,490.668,457.732,490.668z"/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
												<h5>Salads</h5>
			                                </div>
			                            </a>
			                        </li>
			                    </ul>
			                </div>
			            </div>
			        </div>

			        <div class="mealContainer">
			        	@foreach($meals as $m)
			        		  <div class="meal"
			        		  data-name="{{$m->name}}"
			        		  data-portion="{{$m->portion}}"
			        		  data-id="{{$m->id}}"
			        		  data-price="{{$m->price}}"
			        		  data-definition="{{$m->definition}}">
		                        	<div class="img" id="pick">
		                        		<div class="pseudo">PICK</div>
										<img src="img/meals/{{$m->name}}.jpg" alt="">
		                        	</div>
		                            <div class="info">
		                                <h3>#{{$m->id}}.{{$m->name}}</h3>
		                                <p>{{$m->definition}}</p>
		                                <span>${{$m->price}}</span>
		                            </div>
				                </div>
			        	@endforeach
			        </div>
			        <div class="drinkContainer">
			        	@foreach($drinks as $d)
			        		  <div class="meal"
			        		  data-name="{{$d->name}}"
			        		  data-portion="{{$d->portion}}"
			        		  data-id="{{$d->id}}"
			        		  data-price="{{$d->price}}"
			        		  data-definition="{{$d->definition}}">
		                        	<div class="img" id="pick">
		                        		<div class="pseudo">PICK</div>
										<img src="img/drinks/{{$d->name}}.jpg" alt="">
		                        	</div>
		                            <div class="info">
		                                <h3>#{{$d->id}}.{{$d->name}}</h3>
		                                <p>{{$d->definition}}</p>
		                                <span>${{$d->price}}</span>
		                            </div>
				                </div>
			        	@endforeach
			        </div>
			        <div class="saladContainer">
			        	@foreach($salads as $s)
			        		  <div class="meal"
			        		  data-name="{{$s->name}}"
			        		  data-portion="{{$s->portion}}"
			        		  data-id="{{$s->id}}"
			        		  data-price="{{$s->price}}"
			        		  data-definition="{{$s->definition}}">
		                        	<div class="img" id="pick">
		                        		<div class="pseudo">PICK</div>
										<img src="img/salads/{{$s->name}}.jpg" alt="">
		                        	</div>
		                            <div class="info">
		                                <h3>#{{$s->id}}.{{$s->name}}</h3>
		                                <p>{{$s->definition}}</p>
		                                <span>${{$s->price}}</span>
		                            </div>
				                </div>
			        	@endforeach
			        </div>
	            <section class="selectList">
					<table class="selectedProductData">
						<tr>
							<th>Name</th>
							<th>Definiton</th>
							<th>Price</th>
							<th>Picked</th>
							<th></th>
						</tr>
					</table>
					<div class="saleSubmission">
						@csrf
						<p >Total Price: <span class="totalSalePrice">0</span>$</p>
						<button class="finalSubmit btn btn-custom mt-3">Confirm Reservation</button>
					</div>
					<p class="reserveErrors"></p>
				</section>
	</section>
	<script type="text/javascript" src="{{asset('js/pick.js')}}"></script>
 @endsection
