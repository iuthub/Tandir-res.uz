<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function meal_orders()
    {
        return $this->hasMany('App\Meal_Orders','order_id');
    }
}
