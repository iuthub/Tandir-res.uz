<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker3.min.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">
	
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/query.css')}}">

    
		@yield('content')
		<footer>
		      <div class="container">
		        <div class="row pt-5 text-center">
		          <div class="col-md-12">
		            <div class="border-top pt-5 mb-5">
		            	<p>This website is meant to serve the good. Developed by the Students of INHA UNIVERSITY in TASHKENT. <br>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.</p>
		            </div>
		          </div>
		        </div>
		      </div>
		    </footer>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<script src="{{asset('js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
		<script src="{{asset('js/jquery.timepicker.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
	</body>
</html>