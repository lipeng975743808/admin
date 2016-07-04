<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Kp_user extends Authenticatable
{
    public $table='kp_user';
    public function selectall()
    {
        $arr=$this->all();
        return $arr;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
