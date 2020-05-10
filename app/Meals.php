<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meals extends Model
{
    protected $guarded = [];

    public function meal_rders()
    {
        return $this->hasMany('App\Meal_Orders','meal_id');
    }

    public function photo()
    {
        return $this->belongsTo('App\Photo');
    }

}
