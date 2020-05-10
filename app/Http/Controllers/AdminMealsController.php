<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\MealRequest;
use App\Meals;
use App\Photo;
use Illuminate\Http\Request;

class AdminMealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meals::all();


        return view('meals.meal_view',compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id')->all();

        return view('meals.create_meal',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MealRequest $request)
    {
        // $input = $request->all();

        if($file = $request->file('photo_id'))
        {

            $name = time() . $file->getClientOriginalName();

            $file->move('img',$name);

            $photo = new Photo;

            $photo->file = $name;



            $photo->save();

        }



        // Meals::create($input);
        $meals = new Meals;

        $meals->photo_id = $photo->id;
        $meals->name = $request->name;
        $meals->category_id = $request->category_id;
        $meals->price = $request->price;
        $meals->portion = $request->portion;
        $meals->is_available = $request->is_available;
        $meals->ingredients = $request->ingredients;

        $meals->save();

        return redirect('admin/meals');

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
        $meal = Meals::findOrFail($id);

        $categories = Category::pluck('name','id')->all();

        return view('meals.edit_meal',compact('meal','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MealRequest $request, $id)
    {
        $meal = Meals::findOrFail($id);

        $meal->photo_id = $request->photo_id;
        $meal->name = $request->name;
        $meal->category_id = $request->category_id;
        $meal->price = $request->price;
        $meal->portion = $request->portion;
        $meal->is_available = $request->is_available;
        $meal->ingredients = $request->ingredients;

        $meal->save();

        return redirect('/admin/meals');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Meals::findOrFail($id)->delete();

        return redirect('/admin/meals');
    }
}
