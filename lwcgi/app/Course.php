<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function category()
    {
        return $this->hasOne(Category::class,'id','category_id');
    }

    public function lectures()
    {
        return $this->hasMany(Lecture::class,'course_code','course_code');
    }
}
