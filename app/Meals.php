<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{




    public function meal_orders()
    {
        return $this->hasMany('App\Meal_Orders','meal_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function staff()
    {
        return $this->belongsTo('App\Staff');
    }


}
