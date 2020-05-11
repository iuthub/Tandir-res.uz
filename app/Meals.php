<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{

    protected $guarded =[];

    public function meal_orders()
    {
        return $this->hasMany('App\MealOrders','meal_id');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }
}
