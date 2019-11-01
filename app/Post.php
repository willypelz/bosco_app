<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';
    protected $fillable =['user_id','category_id','title','body'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function comment(){
        return $this->hasMany('App\Comment');
    }

    public function images(){
        return $this->hasMany('App\Image');
    }
}
