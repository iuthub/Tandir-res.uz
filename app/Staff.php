<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function orders()
    {
        return $this->hasMany('App\Orders','approved_by');
    }

    public function boards()
    {
        return $this->hasMany('App\Boards','added_by,edited_by');
    }

    public function meals()
    {
        return $this->hasMany('App\Meals','added_by,edited_by');
    }

    public function roles()
    {
        return $this->belongsTo('App\Roles');

    }
}
