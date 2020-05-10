<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function service()
    {
        $meals=DB::table('meals')->where('category_id','1')->where('portion','>',0)->get();
        $salads=DB::table('meals')->where('category_id','2')->where('portion','>',0)->get();
        $drinks=DB::table('meals')->where('category_id','3')->where('portion','>',0)->get();
        return view('pages.service',['meals'=>$meals,'salads'=>$salads,
            'drinks'=>$drinks]);
        
    }
    public function sendMessage(Request $request)
    {
    	$validate=$request->validate([
    		'fname'=> 'required|min:3',
            'lname'=> 'required|min:3',
    		'email' => 'required',
    		'phone'=>'required',
            'message'=>'required'
    	]);
        // return $validate;
        $rec_name='Tandir Corp.';
        $rec_email='tandir2020@gmail.com';
        $message=$validate['message'];

        $data=['name'=>$validate['fname'].' '.$validate['lname'],'phone'=>$validate['phone'],'email'=>$validate['email'],
        'body'=>$message];
        Mail::send('mail.format',$data,function($msg)
            use ($rec_email,$rec_name,$validate){
            $msg->to($rec_email,$rec_name)->subject('Message to developers');
            $msg->from('tandirsender@gmail.com','Conctact message');
        });
        return redirect()->route('contact')->with('message','Your message send.Wait for response.');
    }

    //post
    public function reserve(Request $r)
    {
        $v=$r->validate([
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'people'=>'required',
            'time'=>'required',
            'date'=>'required',
            'allSales'=>'required',
            'totalPrice'=>'required',
        ]);
        $dt=implode('-',array_reverse(explode('/',$v['date'])));
        // return $dt;
        $result=DB::table('orders')->
        insert(['name'=>$v['name'],
                'email'=>$v['email'],
                'phone_number'=>$v['phone'],
                'number_of_people'=>$v['people'],
                'date'=>$dt,
                'time'=>$v['time'],
                'total_price'=>$v['totalPrice'],
                'is_approved'=>'0',
                'approved_by'=>'none']);
        // return $result;
        $o_id=DB::table('orders')->
        where('name',$v['name'])->first()->id;
        foreach(explode('|',$v['allSales']) as $o)
        {
            if($o=="")
                break;
            $expld=explode(':',$o);
            $m_id=$expld[0];
            $m_quantity=$expld[1];
            $tm_price=DB::table('meals')->where('id',$m_id)->first()->price * $m_quantity;
                DB::table('meal_orders')->insert([
                'order_id'=>$o_id,
                'meal_id'=>$m_id,
                'quantity'=>$m_quantity,
                'order_time'=>date('Y-m-d H:i:s'),
                'total_price'=>$tm_price
            ]);
        }
        
        return redirect()->route('service')->with('success','Order has been reserved');
    }
}
