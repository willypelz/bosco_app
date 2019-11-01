<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $fillable =['post_id','image'];

    public function posts(){
        return $this->belongsTo('App\Post');
    }
}
