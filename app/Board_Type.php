<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board_Type extends Model
{
    public function boards()
    {
        return $this->hasMany('App\Boards','type_id');
    }
}
