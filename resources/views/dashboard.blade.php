<div>
	UserName:{{Auth::user()->name}}<br>
	UserEmail:{{Auth::user()->email}}<br>
	<a href="{{route('logout')}}">Logout</a>
</div>
