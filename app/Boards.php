<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    public function board_orders()
    {
        return $this->hasMany('App\Board_Orders','board_id');
    }

    public function board_type()
    {
        return $this->belongsTo('App\Board_Type');

    }

    public function staff()
    {
        return $this->belongsTo('App\Staff');

    }

}
