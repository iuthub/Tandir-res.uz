<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    // protected $fillable = ['id','first_name','email','phone_number','number_of_people','date','time','total_price','is_approved'];


    protected $guarded=[];

    public function meal_orders()
    {
        return $this->hasMany('App\Meal_Orders','order_id');
    }
}
