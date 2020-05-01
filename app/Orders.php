<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    public function meal_orders()
    {
        return $this->hasMany('App\Meal_Orders','order_id');
    }

    public function board_orders()
    {
        return $this->hasMany('App\Board_Orders','order_id');
    }

    public function clients()
    {
        return $this->belongsTo('App\Clients');

    }

    public function staff()
    {
        return $this->belongsTo('App\Staff');

    }
}
