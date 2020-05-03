<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{



    public function staff()
    {
        return $this->hasMany('App\Staff','role_id');
    }
}
