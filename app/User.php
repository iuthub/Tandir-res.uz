<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table="users";
    protected $primaryKey="id";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function isAdmin()
    // {

    //     if($this->role_id >= 1 || $this->role_id <= 8)
    //     {
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }


    public function orders()
    {
        return $this->hasMany('App\Orders','approved_by');
    }



}
