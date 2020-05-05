<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

    }

    public function contact()
    {
    	return view('pages.contact');
    }

    public function sendMessage(Request $request)
    {
    	$validate=$request->validate([
    		'name'=> 'required|min:5',
    		'email' => 'required',
    		'phone_number'=>'required',
    		'company_name'=>'required',
    		'order_number'=>'required',
            'message'=>'required'
    	]);
         // DB::insert("insert into contact_page_messages 
         //    (name,email,phone_number,company_name,order_number) Values('?','?','?','?',?)",$validate);
        DB::table('contact_page_messages')->insert($validate);
        return redirect()->route('contactPage')->with('message','Your message send.Wait for response.');
    }
}
