<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
    	return view("authentication.register");
    }

    public function register(Request $request)
    {
    	$validate=$request->validate([
    		'username'=> 'required|min:5',
    		'password' => 'required|min:6',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone_number'=>'required',
            'email'=> 'required',
    	]);
        // return $validate;
    	// var_dump($validate);
        $validate['password']=Hash::make($validate['password']);
        // return $validate['password'];
    	User::create($validate);
    	return redirect()->route('login');
    }
}
