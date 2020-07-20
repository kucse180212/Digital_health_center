<?php

namespace App;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class teacher_info extends Model  
{
    use Notifiable;
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
