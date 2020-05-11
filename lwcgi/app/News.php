<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //
    protected $table = "news";

    public function category()
    {
        return $this->hasOne(News_category::class,'id','category_id');
    }
}
