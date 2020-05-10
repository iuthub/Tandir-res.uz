<?php

namespace App\Http\Controllers;

use App\Board_Orders;
use App\Meal_Orders;
use App\Meals;
use App\Orders;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;

class AdminOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Orders::all();

        $orders = $orders->sortBy('date',SORT_REGULAR,false);


        return view('admin.orders.orders',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $meal_orders = Meal_Orders::all();


        return view('admin.orders.meal_order',compact('meal_orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        Orders::findOrFail($id)->update($request->all());

        $order = Orders::findOrFail($id);

        $order_customer_name = Orders::findOrFail($id)->first_name;
        $order_customer_email = Orders::findOrFail($id)->email;

        if($order->is_approved == 1)
        {
            $data = [
                        'title'=>'Hi ' . $order_customer_name,
                        'content'=>'You reservation order is approved succesfully!!'
                    ];
        }
        else
        {
            $data = [
                'title'=>'Hi ' . $order_customer_name,
                'content'=>'You reservation order is unapproved unfortunately!!'
            ];
        }

        Mail::send('mail', $data, function ($message) use ($order_customer_email,$order_customer_name)
        {
            $message->from('tandir.res.uz@gmail.com', 'Tandir Rstoranlar Tarmog\'i ');
            $message->sender('tandir.res.uz@gmail.com', 'Tandirchilar');
            $message->to($order_customer_email, $order_customer_name);
            $message->subject('Order Approvment');
        });



            return redirect('/admin/orders');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orders::findOrFail($id)->delete();

        return redirect('/admin/orders');

    }
}
