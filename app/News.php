<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = ['name','img','caption_img','txt','user_id','updated_at','created_at'];
}
