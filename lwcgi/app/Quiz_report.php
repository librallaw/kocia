<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz_report extends Model
{
    //

    public function quiz()
    {
        return $this->belongsTo(Quiz::class,'quiz_code','quiz_code');
    }
}
