<?php

namespace App\Http\Controllers;

use App\Meal_Orders;
use App\Meals;
use App\Orders;
use Illuminate\Http\Request;

class AdminMealOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meal_orders = Meal_Orders::all();

        $meal_orders = $meal_orders->sortBy('date',SORT_REGULAR,false);

        $orders = Orders::all();
        $meals = Meals::all();

        foreach ($meal_orders as $meal_order)
         {
            foreach ($orders as $order)
            {
                foreach ($meals as $meal)
                {
                    if($meal_order->order_id == $order->id)
                    {
                        $meal_customer = $order->first_name;
                    }

                    if ($meal_order->meal_id == $meal->id ) {

                        $meal_name = $meal->name;

                    }

                }
            }
        }
        $meal_customer = $meal_order->order_id;
        $meal_name = $meal_order->meal_id;

        return view('admin.orders.meal_order',compact('meal_orders','meal_customer','meal_name'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Meal_Orders::findOrFail($id)->delete();

        return redirect('/admin/meal_orders');


    }
}
