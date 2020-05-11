<?php

namespace App\Http\Controllers;

use App\MealOrders;
use App\Meals;
use App\Orders;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        // $users_number = User::count();
        // $orders_number = Orders::count();
        // $meal_orders_count = MealOrders::count();
        // $meals_count = Meals::count();

        return view('admin.index',);
    }
}
