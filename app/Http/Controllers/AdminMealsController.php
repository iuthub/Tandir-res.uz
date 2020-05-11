<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\MealRequest;
use App\MealOrders;
use App\Meals;
use App\Orders;
use App\Category;
use App\Http\Requests\MealRequest as RequestsMealRequest;

class AdminMealsController extends Controller
{

    public function index()
    {
        $meals = Meals::all();


        return view('meals.meal_view',compact('meals'));
    }



    public function create()
    {
        $categories = Category::pluck('name','id')->all();

        return view('meals.create_meal',compact('categories'));
    }


    public function store(RequestsMealRequest $request)
    {




        // Meals::create($input);
        $meals = new Meals;


        $meals->name = $request->name;
        $meals->category_id = $request->category_id;
        $meals->price = $request->price;
        $meals->portion = $request->portion;
        $meals->is_available = $request->is_available;
        $meals->definition = $request->definition;

        $meals->save();

        return redirect('admin/meals');

    }


    public function edit($id)
    {
        $meal = Meals::findOrFail($id);

        $categories = Category::pluck('name','id')->all();

        return view('meals.edit_meal',compact('meal','categories'));
    }


    public function update(RequestsMealRequest $request, $id)
    {
        $meal = Meals::findOrFail($id);

        $meal->photo_id = $request->photo_id;
        $meal->name = $request->name;
        $meal->category_id = $request->category_id;
        $meal->price = $request->price;
        $meal->portion = $request->portion;
        $meal->is_available = $request->is_available;
        $meal->definition = $request->definition;

        $meal->save();

        return redirect('/admin/meals');

    }


    public function destroy($id)
    {
        Meals::findOrFail($id)->delete();

        return redirect('/admin/meals');
    }
















}



