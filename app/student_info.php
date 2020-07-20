<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class student_info extends Model
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
