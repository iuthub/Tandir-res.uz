<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
    	return view("authentication.login");
    }

    public function login(Request $request)
    {
    	$validate=$request->validate([
    		'name'=> 'required|min:5',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::attempt($validate))
    	{
    		return redirect()->route('dashboard');
    	}
    	return redirect('/login')->with('status','Login failed!.Try again');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
