@extends('layouts.logreg')
@section('content')

@if(session('status'))
	<div style="color:red; text-align:center; padding:0.8em; background-color:lightgreen">
		{{session('status')}}
	</div>
@endif
<div class="logreg">
	<h1>Login</h1>
    <form method="post" action="{{route('loginPost')}}">
    	@csrf
    	<input type="text" name="name" placeholder="Username" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
</div>
@endsection