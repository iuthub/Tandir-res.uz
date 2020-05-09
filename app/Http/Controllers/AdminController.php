<?php

namespace App\Http\Controllers;

use App\Meal_Orders;
use App\Meals;
use App\Orders;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        $userCount = User::count();
        $orderCount = Orders::count();
        $meal_orderCount = Meal_Orders::count();
        $mealCount = Meals::count();

        return view('admin.index',compact('userCount','orderCount','meal_orderCount','mealCount'));
    }

}
