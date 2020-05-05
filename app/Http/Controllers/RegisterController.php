<?php

namespace App\Http\Controllers;
use App\User as UserModel;
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
    		'name'=> 'required|min:5',
    		'email'=> 'required',
    		'password' => 'required|min:6'
    	]);
        // return $validate;
    	// var_dump($validate);
        $validate['password']=Hash::make($validate['password']);
        // return $validate['password'];
    	UserModel::create($validate);
    	return redirect()->route('login');
    }
}
