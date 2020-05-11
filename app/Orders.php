<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $guarded =[];

    public function meal_orders()
    {
        return $this->hasMany('App\MealOrders','order_id');
    }
}
