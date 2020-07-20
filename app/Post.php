<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{


    public function Doctor()
    {
        return $this->belongsTo('App/Doctor_info','email');
    }
    public function teacher()
    {
        return $this->belongsTo('App/teacher_info','email');
    }
    public function student()
    {
        return $this->belongsTo('App/student_info','email');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }


}
