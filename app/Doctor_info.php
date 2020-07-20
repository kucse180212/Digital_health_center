<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Doctor_info extends Model
{
    //
    public function posts()
    {
        return $this->hasMany('App\post','userid','email');
    }
    public function comments()
    {
        return $this->hasMany('App\comment');
    }
}
