<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public $guarded = [''];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getRouteKeyName(){
       return 'slug';
    }
}
