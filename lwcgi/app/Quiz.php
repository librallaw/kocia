<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //

    public function questions()
    {
        return $this->hasMany(Quiz_questions::class,"quiz_code","quiz_code");
    }
}
