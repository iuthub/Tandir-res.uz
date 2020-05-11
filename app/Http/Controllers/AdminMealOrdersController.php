<?php

namespace App\Http\Controllers;

use App\MealOrders;
use App\Meals;
use App\Orders;
use Illuminate\Http\Request;

class AdminMealOrdersController extends Controller
{
    public function index()
    {
        $meal_orders = MealOrders::all();

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


    public function destroy($id)
    {

        MealOrders::findOrFail($id)->delete();

        return redirect('/admin/meal_orders');


    }




}
