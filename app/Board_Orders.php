<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board_Orders extends Model
{
    public function meal_orders()
    {
        return $this->hasMany('App\Meal_Orders','board_order_id');
    }

    public function orders()
    {
        return $this->belongsTo('App\Orders');

    }

    public function boards()
    {
        return $this->belongsTo('App\Boards');

    }
}
