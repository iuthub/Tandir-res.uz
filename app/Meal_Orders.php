<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal_Orders extends Model
{



    public function meals()
    {
        return $this->belongsTo('App\Meals');
    }

    public function board_orders()
    {
        return $this->belongsTo('App\Board_Orders');
    }

    public function orders()
    {
        return $this->belongsTo('App\Orders');
    }

}
